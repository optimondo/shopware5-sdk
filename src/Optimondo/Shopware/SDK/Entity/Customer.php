<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 Customer.php
 * Projekt:                   shopware5-sdk
 *
 * erstellt von:              Daniel Siekiera <ds@optimondo.de>
 * erstellt am:	              16.05.22, 13:04 Uhr
 * zu letzt bearbeitet:       13.05.22, 15:08 Uhr
 *
 * Copyright © 2022 - Optimondo GmbH
 *
 * **************************************************************************************
 */
namespace Optimondo\Shopware\SDK\Entity;

/**
 * Class Customer
 * @package Optimondo\Shopware\SDK\Entity
 */
class Customer extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $salutation;
    /**
     * @var string
     */
    protected $number;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $firstname;
    /**
     * @var string
     */
    protected $lastname;
    /**
     * @var CustomerAttribute[]
     */
    protected $attribute;
    /**
     * @var Address
     */
    protected $defaultBillingAddress;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Customer
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @param string $salutation
     *
     * @return Customer
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     *
     * @return Customer
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     *
     * @return Customer
     */
    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     *
     * @return Customer
     */
    public function setLastName($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return CustomerAttribute[]
     */
    public function getAttributes()
    {
        return $this->attribute;
    }

    /**
     * @param CustomerAttribute[] $attribute
     *
     * @return Customer
     */
    public function setAttributes($attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * @return Address
     */
    public function getDefaultBillingAddress()
    {
        return $this->defaultBillingAddress;
    }

    /**
     * @param Address $defaultBillingAddress
     *
     * @return Customer
     */
    public function setDefaultBillingAddress($defaultBillingAddress)
    {
        $this->defaultBillingAddress = $defaultBillingAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}
