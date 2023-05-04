<?php

namespace BeycanPress\FreshBooks\Model;

use BeycanPress\FreshBooks\Helpers;
use BeycanPress\FreshBooks\Connection;

class Client
{
    use Helpers;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $role;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $organization;

    /**
     * @var ?string
     */
    private $vatName = null;

    /**
     * @var ?string
     */
    private $vatNumber = null;

    /**
     * @var ?string
     */
    private $status = null;

    /**
     * @var ?string
     */
    private $note = null;

    /**
     * @var ?string
     */
    private $homePhone = null;

    /**
     * @var ?string
     */
    private $mobilePhone = null;

    /**
     * @var ?string
     */
    private $source = null;

    /**
     * @var ?string
     */
    private $highlightString = null;

    /**
     * @var string
     */
    private $billingStreet;

    /**
     * @var ?string
     */
    private $billingStreet2 = null;

    /**
     * @var string
     */
    private $billingCity;

    /**
     * @var string
     */
    private $billingCountry;

    /**
     * @var string
     */
    private $billingProvince;

    /**
     * @var string|null
     */
    private $billingPostalCode;

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * @var string
     */
    private $language;

    /**
     * @var ?string
     */
    private $lastActivity = null;

    /**
     * @var ?string
     */
    private $face = null;

    /**
     * @var ?string
     */
    private $lateFee = null;

    /**
     * @var array
     */
    private $lateReminders = [];

    /**
     * @var array
     */
    private $contacts = [];

    /**
     * @var Connection
     */
    private $conn;

    /**
     * @param Connection $conn
     */
    public function __construct(Connection $conn)
    {
        $this->conn = $conn;
    }

    /**
     * @param integer $id
     * @return Client
     */
    public function setId(int $id) : Client
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $role
     * @return Client
     */
    public function setRole(string $role) : Client
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @param string $firstName
     * @return Client
     */
    public function setFirstName(string $firstName) : Client
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @param string $lastName
     * @return Client
     */
    public function setLastName(string $lastName) : Client
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @param string $email
     * @return Client
     */
    public function setEmail(string $email) : Client
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string $organization
     * @return Client
     */
    public function setOrganization(string $organization) : Client
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * @param string|null $vatName
     * @return Client
     */
    public function setVatName(?string $vatName) : Client
    {
        $this->vatName = $vatName;
        return $this;
    }

    /**
     * @param string|null $vatNumber
     * @return Client
     */
    public function setVatNumber(?string $vatNumber) : Client
    {
        $this->vatNumber = $vatNumber;
        return $this;
    }

    /**
     * @param string|null $status
     * @return Client
     */
    public function setStatus(?string $status) : Client
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string|null $note
     * @return Client
     */
    public function setNote(?string $note) : Client
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @param string|null $homePhone
     * @return Client
     */
    public function setHomePhone(?string $homePhone) : Client
    {
        $this->homePhone = $homePhone;
        return $this;
    }

    /**
     * @param string|null $mobilePhone
     * @return Client
     */
    public function setMobilePhone(?string $mobilePhone) : Client
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    /**
     * @param string|null $source
     * @return Client
     */
    public function setSource(?string $source) : Client
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @param string|null $highlightString
     * @return Client
     */
    public function setHighlightString(?string $highlightString) : Client
    {
        $this->highlightString = $highlightString;
        return $this;
    }

    /**
     * @param string $billingStreet
     * @return Client
     */
    public function setBillingStreet(string $billingStreet) : Client
    {
        $this->billingStreet = $billingStreet;
        return $this;
    }

    /**
     * @param string|null $billingStreet2
     * @return Client
     */
    public function setBillingStreet2(?string $billingStreet2) : Client
    {
        $this->billingStreet2 = $billingStreet2;
        return $this;
    }

    /**
     * @param string $billingCity
     * @return Client
     */
    public function setBillingCity(string $billingCity) : Client
    {
        $this->billingCity = $billingCity;
        return $this;
    }

    /**
     * @param string $billingCountry
     * @return Client
     */
    public function setBillingCountry(string $billingCountry) : Client
    {
        $this->billingCountry = $billingCountry;
        return $this;
    }

    /**
     * @param string $billingProvince
     * @return Client
     */
    public function setBillingProvince(string $billingProvince) : Client
    {
        $this->billingProvince = $billingProvince;
        return $this;
    }

    /**
     * @param string|null $billingPostalCode
     * @return Client
     */
    public function setBillingPostalCode(?string $billingPostalCode) : Client
    {
        $this->billingPostalCode = $billingPostalCode;
        return $this;
    }

    /**
     * @param string $currencyCode
     * @return Client
     */
    public function setCurrencyCode(string $currencyCode) : Client
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @param string $language
     * @return Client
     */
    public function setLanguage(string $language) : Client
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @param string|null $lastActivity
     * @return Client
     */
    public function setLastActivity(?string $lastActivity) : Client
    {
        $this->lastActivity = $lastActivity;
        return $this;
    }

    /**
     * @param string|null $face
     * @return Client
     */
    public function setFace(?string $face) : Client
    {
        $this->face = $face;
        return $this;
    }

    /**
     * @param string|null $lateFee
     * @return Client
     */
    public function setLateFee(?string $lateFee) : Client
    {
        $this->lateFee = $lateFee;
        return $this;
    }

    /**
     * @param array $lateReminders
     * @return Client
     */
    public function setLateReminders(array $lateReminders) : Client
    {
        $this->lateReminders = $lateReminders;
        return $this;
    }

    /**
     * @param ClientContact $contact
     * @return Client
     */
    public function addContact(ClientContact $contact) : Client
    {
        $this->contacts[] = $contact;
        return $this;
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getRole() : string
    {
        return $this->role;
    }

    /**
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getOrganization() : string
    {
        return $this->organization;
    }

    /**
     * @return string|null
     */
    public function getVatName() : ?string
    {
        return $this->vatName;
    }

    /**
     * @return string|null
     */
    public function getVatNumber() : ?string
    {
        return $this->vatNumber;
    }

    /**
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getNote() : ?string
    {
        return $this->note;
    }

    /**
     * @return string|null
     */
    public function getHomePhone() : ?string
    {
        return $this->homePhone;
    }

    /**
     * @return string|null
     */
    public function getMobilePhone() : ?string
    {
        return $this->mobilePhone;
    }

    /**
     * @return string|null
     */
    public function getSource() : ?string
    {
        return $this->source;
    }

    /**
     * @return string|null
     */
    public function getHighlightString() : ?string
    {
        return $this->highlightString;
    }

    /**
     * @return string
     */
    public function getBillingStreet() : string
    {
        return $this->billingStreet;
    }

    /**
     * @return string|null
     */
    public function getBillingStreet2() : ?string
    {
        return $this->billingStreet2;
    }

    /**
     * @return string
     */
    public function getBillingCity() : string
    {
        return $this->billingCity;
    }

    /**
     * @return string
     */
    public function getBillingCountry() : string
    {
        return $this->billingCountry;
    }

    /**
     * @return string
     */
    public function getBillingProvince() : string
    {
        return $this->billingProvince;
    }

    /**
     * @return string|null
     */
    public function getBillingPostalCode() : ?string
    {
        return $this->billingPostalCode;
    }

    /**
     * @return string
     */
    public function getCurrencyCode() : string
    {
        return $this->currencyCode;
    }

    /**
     * @return string
     */
    public function getLanguage() : string
    {
        return $this->language;
    }

    /**
     * @return string|null
     */
    public function getLastActivity() : ?string
    {
        return $this->lastActivity;
    }

    /**
     * @return string|null
     */
    public function getFace() : ?string
    {
        return $this->face;
    }

    /**
     * @return string|null
     */
    public function getLateFee() : ?string
    {
        return $this->lateFee;
    }

    /**
     * @return array
     */
    public function getLateReminders() : array
    {
        return $this->lateReminders;
    }

    /**
     * @return array
     */
    public function getContacts() : array
    {
        return $this->contacts;
    }

    /**
     * @return object
     */
    public function toObject() : object
    {
        return (object) $this->toArray();
    }

    /**
     * @return array
     */
    public function toArray() : array 
    {
        return array_filter([
            'id' => $this->id,
            'role' => $this->role,
            'fname' => $this->firstName,
            'lname' => $this->lastName,
            'email' => $this->email,
            'organization' => $this->organization,
            'vat_name' => $this->vatName,
            'vat_number' => $this->vatNumber,
            'status' => $this->status,
            'note' => $this->note,
            'home_phone' => $this->homePhone,
            'source' => $this->source,
            'highlight_string' => $this->highlightString,
            'p_street' => $this->billingStreet,
            'p_street2' => $this->billingStreet2,
            'p_city' => $this->billingCity,
            'p_country' => $this->billingCountry,
            'p_province' => $this->billingProvince,
            'p_postal_code' => $this->billingPostalCode,
            'currency_code' => $this->currencyCode,
            'language' => $this->language,
            'last_activity' => $this->lastActivity,
            'face' => $this->face,
            'late_fee' => $this->lateFee,
            'late_reminders' => $this->lateReminders,
            'contacts' => is_array($this->contacts) ? array_map(function($val) {
                return $val->toArray();
            }, $this->contacts) : $this->contacts
        ]);
    }

    /**
     * @param array $data
     * @return Client
     */
    public function fromArray(array $data) : Client 
    {
        return $this->fromObject($this->arrayToObject($data));
    }

    /**
     * @param object $data
     * @return Client
     */
    public function fromObject(object $data) : Client
    {
        $this->setId($data->id);
        $this->setRole($data->role);
        $this->setFirstName($data->fname);
        $this->setLastName($data->lname);
        $this->setEmail($data->email);
        $this->setOrganization($data->organization);
        $this->setVatName($data->vat_name);
        $this->setVatNumber($data->vat_number);
        $this->setStatus($data->status ?? null);
        $this->setNote($data->note);
        $this->setHomePhone($data->home_phone);
        $this->setSource($data->source ?? null);
        $this->setHighlightString($data->highlight_string ?? null);
        $this->setBillingStreet($data->p_street);
        $this->setBillingStreet2($data->p_street2);
        $this->setBillingCity($data->p_city);
        $this->setBillingCountry($data->p_country);
        $this->setBillingProvince($data->p_province);
        $this->setBillingPostalCode($data->p_postal_code ?? null);
        $this->setCurrencyCode($data->currency_code);
        $this->setLanguage($data->language);
        $this->setLastActivity($data->last_activity);
        $this->setFace($data->face ?? null);
        $this->setLateFee($data->late_fee ?? null);
        $this->setLateReminders($data->late_reminders);
        
        foreach ($data->contacts as $value) {
            $this->addContact((new ClientContact())->fromArray($value));
        }
        
        return $this;
    }

    /**
     * @param string $id
     * @return Client
     */
    public function getById(string $id) : Client
    {
        return $this->fromObject($this->conn->get('users/clients/' . $id)->client);
    }

    /**
     * @return Client
     */
    public function create() : Client
    {
        return $this->fromObject($this->conn->post('users/clients', [
            "client" => $this->toArray()
        ], true)->client);
    }

    /**
     * @param int|null $id
     * @return Client
     */
    public function update(?int $id = null) : Client
    {
        return $this->fromObject($this->conn->put('users/clients/' . strval($id ?? $this->getId()), [
            "client" => $this->toArray()
        ], true)->client);
    }

    /**
     * @param int|null $id
     * @return object
     */
    public function delete(?int $id = null) : object
    {
        return $this->conn->put('users/clients/' . strval($id ?? $this->getId()), [
            "client" => [
                "vis_state" => 1
            ]
        ], true);
    }

    /**
     * @see https://www.freshbooks.com/api/parameters
     * 
     * @param array $clientData
     * @return Client|null
     */
    public function search(array $clientData) : ?Client
    {
        $data = '';
        foreach ($clientData as $key => $value) {
            $data .= "search$key=$value&";
        }
    
        $res = $this->conn->get("users/clients?" . rtrim($data, '&'));
    
        if (!$res->total) return null;
    
        return $this->fromObject($res->clients[0]);
    }

    /**
     * @param string $email
     * @return Client|null
     */
    function searchByEmail(string $email) : ?Client
    {
        return $this->search(['[email]' => $email]);
    }
    
}