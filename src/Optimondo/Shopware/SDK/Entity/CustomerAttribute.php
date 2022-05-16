<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 CustomerAttribute.php
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
 * Class CustomerAttribute
 */
class CustomerAttribute extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $customerId;
    /**
     * @var string
     */
    protected $stripeCustomerId;

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
     * @return CustomerAttribute
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     *
     * @return CustomerAttribute
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return int
     */
    public function getStripeCustomerId()
    {
        return $this->stripeCustomerId;
    }

    /**
     * @param int $stripeCustomerId
     *
     * @return CustomerAttribute
     */
    public function setStripeCustomerId($stripeCustomerId)
    {
        $this->stripeCustomerId = $stripeCustomerId;

        return $this;
    }
}
