<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 OrderDetail.php
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
 * Class OrderDetail
 */
class OrderDetail extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $orderId;
    /**
     * @var int
     */
    protected $articleId;
    /**
     * @var int
     */
    protected $taxId;
    /**
     * @var float
     */
    protected $taxRate;
    /**
     * @var int
     */
    protected $statusId;
    /**
     * @var string
     */
    protected $number;
    /**
     * @var string
     */
    protected $articleNumber;
    /**
     * @var float
     */
    protected $price;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var string
     */
    protected $articleName;
    /**
     * @var bool
     */
    protected $shipped;
    /**
     * @var int
     */
    protected $shippedGroup;
    /**
     * @var string
     */
    protected $releaseDate;
    /**
     * @var int
     */
    protected $mode;
    /**
     * @var int
     */
    protected $esdArticle;
    /**
     * @var string
     */
    protected $config;
    /**
     * @var string
     */
    protected $ean;
    /**
     * @var string
     */
    protected $unit;
    /**
     * @var string
     */
    protected $packUnit;
    /**
     * @var OrderDetailAttribute
     */
    protected $attribute;

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
     * @return OrderDetail
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     *
     * @return OrderDetail
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return int
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * @param int $articleId
     *
     * @return OrderDetail
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * @return int
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * @param int $taxId
     *
     * @return OrderDetail
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @param float $taxRate
     *
     * @return OrderDetail
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @return int
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * @param int $statusId
     *
     * @return OrderDetail
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

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
     * @return OrderDetail
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getArticleNumber()
    {
        return $this->articleNumber;
    }

    /**
     * @param string $articleNumber
     *
     * @return OrderDetail
     */
    public function setArticleNumber($articleNumber)
    {
        $this->articleNumber = $articleNumber;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return OrderDetail
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return OrderDetail
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getArticleName()
    {
        return $this->articleName;
    }

    /**
     * @param string $articleName
     *
     * @return OrderDetail
     */
    public function setArticleName($articleName)
    {
        $this->articleName = $articleName;

        return $this;
    }

    /**
     * @return bool
     */
    public function isShipped()
    {
        return $this->shipped;
    }

    /**
     * @param bool $shipped
     *
     * @return OrderDetail
     */
    public function setShipped($shipped)
    {
        $this->shipped = $shipped;

        return $this;
    }

    /**
     * @return int
     */
    public function getShippedGroup()
    {
        return $this->shippedGroup;
    }

    /**
     * @param int $shippedGroup
     *
     * @return OrderDetail
     */
    public function setShippedGroup($shippedGroup)
    {
        $this->shippedGroup = $shippedGroup;

        return $this;
    }

    /**
     * @return string
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param string $releaseDate
     *
     * @return OrderDetail
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param int $mode
     *
     * @return OrderDetail
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * @return int
     */
    public function getEsdArticle()
    {
        return $this->esdArticle;
    }

    /**
     * @param int $esdArticle
     *
     * @return OrderDetail
     */
    public function setEsdArticle($esdArticle)
    {
        $this->esdArticle = $esdArticle;

        return $this;
    }
}
