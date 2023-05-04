<?php

namespace BeycanPress\FreshBooks;

use BeycanPress\FreshBooks\Model\Client;
use BeycanPress\FreshBooks\Model\Invoice;
use BeycanPress\FreshBooks\Model\Account;
use BeycanPress\FreshBooks\Model\Payment;
use BeycanPress\Http\Client as HttpClient;

class Connection
{
    /**
     * @var string
     */
    private $appId;

    /**
     * @var string
     */
    private $appSecret;

    /**
     * @var string
     */
    private $redirectUri;

    /**
     * @var string
     */
    private $accessToken;

    /**
     * @var string
     */
    private $refreshToken;

    /**
     * @var string
     */
    private $apiUrl = 'https://api.freshbooks.com/';
    
    /**
     * @var string
     */
    private $authUrl = 'https://auth.freshbooks.com/';

    /**
     * @var string
     */
    private $tokenFile;

    /**
     * @var array
     */
    private $payload = [];
    
    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var object
     */
    private $profile;

    /**
     * @var Account
     */
    private $account;

    /**
     * @var array
     */
    private $accounts = [];

    /**
     * @see https://www.freshbooks.com/api/errors
     * 
     * @var array
     */
    private $errors = [];
    
    /**
     * @param string $appId
     * @param string $appSecret
     * @param string $redirectUri
     */
    public function __construct(string $appId, string $appSecret, string $redirectUri)
    {
        $this->appId = $appId;
        $this->appSecret = $appSecret;
        $this->redirectUri = $redirectUri;
        $this->httpClient = new HttpClient();
        
        $this->payload = [
            'client_id' => $this->appId,
            'client_secret' => $this->appSecret,
            'redirect_uri' => $this->redirectUri,
        ];

        $this->tokenFile = __DIR__ . '/token.json';

        if (file_exists($this->tokenFile)) {
            $this->setTokens($this->getTokenData());
        }
    }

    /**
     * @return string
     */
    public function getTokenFile() : string
    {
        return $this->tokenFile;
    }

    /**
     * @return object|null
     */
    public function getTokenData() : ?object
    {
        if (file_exists($this->tokenFile)) {
            return json_decode(file_get_contents($this->tokenFile));
        } else {
            return null;
        }
    }

    /**
     * @param bool $direct
     * @return void
     */
    public function refreshAuthentication(bool $direct = false)
    {
        if ($this->refreshToken) {
            if (!$direct && !$this->getExpireStatus()) return;
            $this->getAccessTokenByRefreshToken($this->refreshToken);
        } else {
            throw new \Exception('Refresh token not found.');
        }
    }

    /**
     * @return boolean
     */
    public function getExpireStatus() : bool
    {
        if (!file_exists($this->tokenFile)) {
            throw new \Exception('Token file not found.');
        }

        $tokenData = $this->getTokenData();
        $fileTime = filemtime($this->tokenFile);
        $expireTime = time() - $tokenData->expires_in;
        return ($expireTime + 600) > $fileTime;
    }

    /**
     * @param string|null $id
     * @return Connection
     */
    public function setAccount(?string $id = null) : Connection
    {
        if ($id) {
            if (isset($this->getAccounts()[$id])) {
                $this->account = new Account($this->accounts[$id]);
            } else {
                throw new \Exception('Account not found');
            }
        } else {
            $this->account = new Account($this->getFirstAccount());
        }

        $this->httpClient->setBaseUrl($this->apiUrl . $this->account->getAccountUrl());
        return $this;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return Connection
     */
    private function addPayloadParam(string $key, $value) : Connection
    {
        $this->payload[$key] = $value;
        return $this;
    }

    /**
     * @param array $params
     * @return Connection
     */
    private function addPayloadParams(array $params) : Connection
    {
        $this->payload = array_merge($this->payload, $params);
        return $this;
    }

    /**
     * @param string $path
     * @return string
     */
    public function createApiUrl(string $path) : string
    {
        return $this->apiUrl . $path;
    }

    /**
     * @param string $path
     * @return string
     */
    public function createAuthUrl(string $path) : string
    {
        return $this->authUrl . $path;
    }

    /**
     * @param array $scopes
     * @return string
     */
    public function getAuthRequestUrl(array $scopes = []): string
    {
        $this->addPayloadParam('response_type', 'code');

        if (!empty($scopes)) {
            $this->addPayloadParam('scope', implode(' ', $scopes));
        }

        return $this->createAuthUrl('oauth/authorize?') . http_build_query($this->payload);
    }

    /**
     * @param string $code
     * @param string $codeType
     * @param string $grandType
     * @return object
     */
    public function getToken(string $code, string $codeType = 'code', string $grandType = 'authorization_code') : object
    {
        $this->addPayloadParams([
            'grant_type' => $grandType,
            $codeType => $code,
        ]);

        $this->httpClient->deleteHeader('Content-Type')->deleteHeader('Authorization');
        $res = $this->checkError($this->httpClient->post($this->apiUrl . 'auth/oauth/token', $this->payload));
        
        file_put_contents($this->tokenFile, json_encode($res));

        return $res;
    }

    /**
     * @param object $tokens
     * @return string
     */
    private function setTokens(object $tokens) : string
    {
        $this->accessToken = $tokens->access_token;
        $this->refreshToken = $tokens->refresh_token;
        $this->httpClient->addHeader('Content-Type', 'application/json');
        $this->httpClient->addHeader('Authorization', 'Bearer ' . $this->accessToken);
        return $this->accessToken;
    }

    
    /**
     * @param string $code
     * @return string
     */
    public function getAccessTokenByAuthCode(string $code) : string
    {
        return $this->setTokens($this->getToken($code));
    }

    
    /**
     * @param string $refreshToken
     * @return string
     */
    public function getAccessTokenByRefreshToken(string $refreshToken) : string
    {        
        return $this->setTokens($this->getToken($refreshToken, 'refresh_token', 'refresh_token'));
    }

    /**
     * @return object
     */
    public function revokeAccessToken(): object
    {
        $this->addPayloadParams(['token' => $this->refreshToken]);
        $this->httpClient->deleteHeader('Content-Type')->deleteHeader('Authorization');
        return $this->checkError($this->httpClient->post($this->apiUrl . 'auth/oauth/revoke', $this->payload));
    }

    /**
     * @return object
     */
    public function getProfile() : object
    {
        if ($this->profile) return $this->profile;
        return $this->profile = $this->checkError($this->httpClient->get($this->apiUrl . 'auth/api/v1/users/me'));
    }

    /**
     * @return array
     */
    public function getBusinessMemberships() : array
    {
        return $this->getProfile()->business_memberships;
    }

    /**
     * @return object
     */
    public function getFirstAccount() : object
    {
        return $this->getBusinessMemberships()[0]->business;
    }

    /**
     * @return array
     */
    public function getAccounts() : array
    {
        if ($this->accounts) return $this->accounts;
        $memberships = $this->getBusinessMemberships();
        $memberships = array_column($memberships, 'business');
        foreach ($memberships as $membership) {
            $this->accounts[$membership->account_id] = (object) [
                'account_id' => $membership->account_id,
                'name' => $membership->name
            ];
        }
        return $this->accounts;
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public function __call(string $name, array $arguments)
    {
        if (in_array(strtoupper($name), $this->httpClient->getMethods())) {

            if (!$this->account) {
                throw new \Exception('Account not set!');
            }

            return $this->checkError($this->httpClient->$name(...$arguments));
        } else {
            throw new \Exception('Method not found');
        }
    }

    /**
     * @param string $path
     * @param array $params
     * @return mixed
     * @throws \Exception
     */
    private function checkError($res)
    {
        if (isset($res->error) || isset($res->error_type) || isset($res->message) || isset($res->errors)) {
            if (isset($res->error) && $res->error == 'unauthenticated') {
                throw new \Exception('Unauthenticated, you need to get access token by auth code first!');
            } else {
                throw new \Exception($res->error_description ?? $res->message);
            }
        } else {
            if (is_bool($res)) {
                throw new \Exception('Something went wrong!');
            } elseif (is_string($res) && $res) {
                throw new \Exception($res);
            }

            if (isset($res->response)) {

                if (isset($res->response->errors)) {
                    throw new \Exception($res->response->errors[0]->message);
                }

                if (isset($res->response->result)) {
                    return $res->response->result;
                } else {
                    return $res->response;
                }
            }
            
            return $res;
        }
    }

    /**
     * @return Client
     */
    public function client() : Client
    {
        return new Client($this);
    }

    /**
     * @return Invoice
     */
    public function invoice() : Invoice
    {
        return new Invoice($this);
    }

    /**
     * @return Payment
     */
    public function payment() : Payment
    {
        return new Payment($this);
    }
}