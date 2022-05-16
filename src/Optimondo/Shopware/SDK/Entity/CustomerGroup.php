<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 CustomerGroup.php
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
 * Class CustomerGroup
 */
class CustomerGroup extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $key;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $tax;
    /**
     * @var bool
     */
    protected $taxInput;
    /**
     * @var bool
     */
    protected $mode;
    /**
     * @var float
     */
    protected $discount;
    /**
     * @var float
     */
    protected $minimumOrder;
    /**
     * @var float
     */
    protected $minimumOrderSurcharge;
    /**
     * @var float
     */
    protected $basePrice;
    /**
     * @var float
     */
    protected $percent;

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
     * @return CustomerGroup
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $key
     *
     * @return CustomerGroup
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return CustomerGroup
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return bool
     */
    public function isTax()
    {
        return $this->tax;
    }

    /**
     * @param bool $tax
     *
     * @return CustomerGroup
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * @return bool
     */
    public function isTaxInput()
    {
        return $this->taxInput;
    }

    /**
     * @param bool $taxInput
     *
     * @return CustomerGroup
     */
    public function setTaxInput($taxInput)
    {
        $this->taxInput = $taxInput;

        return $this;
    }

    /**
     * @return bool
     */
    public function isMode()
    {
        return $this->mode;
    }

    /**
     * @param bool $mode
     *
     * @return CustomerGroup
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     *
     * @return CustomerGroup
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @return float
     */
    public function getMinimumOrder()
    {
        return $this->minimumOrder;
    }

    /**
     * @param float $minimumOrder
     *
     * @return CustomerGroup
     */
    public function setMinimumOrder($minimumOrder)
    {
        $this->minimumOrder = $minimumOrder;

        return $this;
    }

    /**
     * @return float
     */
    public function getMinimumOrderSurcharge()
    {
        return $this->minimumOrderSurcharge;
    }

    /**
     * @param float $minimumOrderSurcharge
     *
     * @return CustomerGroup
     */
    public function setMinimumOrderSurcharge($minimumOrderSurcharge)
    {
        $this->minimumOrderSurcharge = $minimumOrderSurcharge;

        return $this;
    }

    /**
     * @return float
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
     * @param float $basePrice
     *
     * @return CustomerGroup
     */
    public function setBasePrice($basePrice)
    {
        $this->basePrice = $basePrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * @param float $percent
     *
     * @return CustomerGroup
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }
}
