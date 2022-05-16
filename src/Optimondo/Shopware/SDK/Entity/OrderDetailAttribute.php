<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 OrderDetailAttribute.php
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
 * Class OrderDetailAttribute
 */
class OrderDetailAttribute extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $orderDetailId;
    /**
     * @var string
     */
    protected $attribute1;
    /**
     * @var string
     */
    protected $attribute2;
    /**
     * @var string
     */
    protected $attribute3;
    /**
     * @var string
     */
    protected $attribute4;
    /**
     * @var string
     */
    protected $attribute5;
    /**
     * @var string
     */
    protected $attribute6;

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
     * @return OrderDetailAttribute
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrderDetailId()
    {
        return $this->orderDetailId;
    }

    /**
     * @param int $orderDetailId
     *
     * @return OrderDetailAttribute
     */
    public function setOrderDetailId($orderDetailId)
    {
        $this->orderDetailId = $orderDetailId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttribute1()
    {
        return $this->attribute1;
    }

    /**
     * @param string $attribute1
     *
     * @return OrderDetailAttribute
     */
    public function setAttribute1($attribute1)
    {
        $this->attribute1 = $attribute1;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttribute2()
    {
        return $this->attribute2;
    }

    /**
     * @param string $attribute2
     *
     * @return OrderDetailAttribute
     */
    public function setAttribute2($attribute2)
    {
        $this->attribute2 = $attribute2;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttribute3()
    {
        return $this->attribute3;
    }

    /**
     * @param string $attribute3
     *
     * @return OrderDetailAttribute
     */
    public function setAttribute3($attribute3)
    {
        $this->attribute3 = $attribute3;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttribute4()
    {
        return $this->attribute4;
    }

    /**
     * @param string $attribute4
     *
     * @return OrderDetailAttribute
     */
    public function setAttribute4($attribute4)
    {
        $this->attribute4 = $attribute4;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttribute5()
    {
        return $this->attribute5;
    }

    /**
     * @param string $attribute5
     *
     * @return OrderDetailAttribute
     */
    public function setAttribute5($attribute5)
    {
        $this->attribute5 = $attribute5;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttribute6()
    {
        return $this->attribute6;
    }

    /**
     * @param string $attribute6
     *
     * @return OrderDetailAttribute
     */
    public function setAttribute6($attribute6)
    {
        $this->attribute6 = $attribute6;

        return $this;
    }
}
