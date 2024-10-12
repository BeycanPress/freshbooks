<?php

declare(strict_types=1);

namespace BeycanPress\FreshBooks\Model;

class ClientContact
{
    /**
     * @var string
     */
    private string $email = '';

    /**
     * @var string
     */
    private string $firstName = '';

    /**
     * @var string
     */
    private string $lastName = '';

    /**
     * @var string
     */
    private string $phone = '';

    /**
     * @var string
     */
    private string $userId = '';

    /**
     * @var string
     */
    private string $face = '';

    /**
     * @param string $email
     * @return ClientContact
     */
    public function setEmail(string $email): ClientContact
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string $firstName
     * @return ClientContact
     */
    public function setFirstName(string $firstName): ClientContact
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @param string $lastName
     * @return ClientContact
     */
    public function setLastName(string $lastName): ClientContact
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @param string $phone
     * @return ClientContact
     */
    public function setPhone(string $phone): ClientContact
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param string $userId
     * @return ClientContact
     */
    public function setUserId(string $userId): ClientContact
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @param string $face
     * @return ClientContact
     */
    public function setFace(string $face): ClientContact
    {
        $this->face = $face;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getFace(): string
    {
        return $this->face;
    }

    /**
     * @return array<string,string>
     */
    public function toArray(): array
    {
        return array_filter([
            'email' => $this->email,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'phone' => $this->phone,
            'user_id' => $this->userId,
            'face' => $this->face,
        ]);
    }

    /**
     * @param array<string,string> $data
     * @return ClientContact
     */
    public function fromArray(array $data): ClientContact
    {
        return $this->setEmail($data['email'])
            ->setFirstName($data['first_name'])
            ->setLastName($data['last_name'])
            ->setPhone($data['phone'])
            ->setUserId($data['user_id'])
            ->setFace($data['face']);
    }
}
