<?php

declare(strict_types=1);

namespace BeycanPress\FreshBooks\Model;

class Account
{
    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * Account constructor.
     * @param object|null $data
     */
    public function __construct(?object $data = null)
    {
        if ($data) {
            $this->fromObject($data);
        }
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $id
     * @return Account
     */
    public function setId(string $id): Account
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $name
     * @return Account
     */
    public function setName(string $name): Account
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountUrl(): string
    {
        return "accounting/account/$this->id/";
    }

    /**
     * @return array<string,string>
     */
    public function toArray(): array
    {
        return [
            'account_id' => $this->getId(),
            'name' => $this->getName()
        ];
    }

    /**
     * @param object $data
     * @return Account
     */
    public function fromObject(object $data): Account
    {
        $this->setId($data->account_id);
        $this->setName($data->name);
        return $this;
    }
}
