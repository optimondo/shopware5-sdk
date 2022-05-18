<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 PropertyValue.php
 * Projekt:                   shopware5-sdk
 *
 * erstellt von:              Daniel Siekiera <ds@optimondo.de>
 * erstellt am:	              18.05.22, 11:18 Uhr
 * zu letzt bearbeitet:       16.05.22, 14:36 Uhr
 *
 * Copyright © 2022 - Optimondo GmbH
 *
 * **************************************************************************************
 */
namespace Optimondo\Shopware\SDK\Entity;

/**
 * Class PropertyValue
 */
class PropertyValue extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var float
     */
    protected $valueNumeric;
    /**
     * @var int
     */
    protected $position;
    /**
     * @var int
     */
    protected $optionId;
    /**
     * @var string
     */
    protected $value;

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
     * @return PropertyValue
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return float
     */
    public function getValueNumeric()
    {
        return $this->valueNumeric;
    }

    /**
     * @param float $valueNumeric
     *
     * @return PropertyValue
     */
    public function setValueNumeric($valueNumeric)
    {
        $this->valueNumeric = $valueNumeric;

        return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return PropertyValue
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return int
     */
    public function getOptionId()
    {
        return $this->optionId;
    }

    /**
     * @param int $optionId
     *
     * @return PropertyValue
     */
    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return PropertyValue
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
