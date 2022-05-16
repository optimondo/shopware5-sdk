<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 OrderBilling.php
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
 * Class OrderBilling
 *
 * @package Optimondo\Shopware\SDK\Entity
 */
class OrderBilling extends Base
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
    protected $firstname;
    
    /**
     * @var string
     */
    protected $lastname;
    
    /**
     * @var string
     */
    protected $street;
    
    /**
     * @var string
     */
    protected $zipcode;
    
    /**
     * @var string
     */
    protected $city;

    /**
     * @var Country
     */
    protected $country;

    /**
     * @var string
     */
    protected $vatId;

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
     * @return OrderBilling
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
     * @return Address
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;

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
     * @return OrderBilling
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
     * @return OrderBilling
     */
    public function setLastName($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return OrderBilling
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return OrderBilling
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return OrderBilling
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return \Optimondo\Shopware\SDK\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param \Optimondo\Shopware\SDK\Entity\Country $country
     *
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getVatId()
    {
        return $this->vatId;
    }

    /**
     * @param string $vatId
     *
     * @return Address
     */
    public function setVatId($vatId)
    {
        $this->vatId = $vatId;

        return $this;
    }
}
