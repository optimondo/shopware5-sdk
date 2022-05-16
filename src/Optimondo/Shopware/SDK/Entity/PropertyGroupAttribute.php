<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 PropertyGroupAttribute.php
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
 * Class PropertyGroupAttribute
 */
class PropertyGroupAttribute extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $propertyGroupId;

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
     * @return PropertyGroupAttribute
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getPropertyGroupId()
    {
        return $this->propertyGroupId;
    }

    /**
     * @param int $propertyGroupId
     *
     * @return PropertyGroupAttribute
     */
    public function setPropertyGroupId($propertyGroupId)
    {
        $this->propertyGroupId = $propertyGroupId;

        return $this;
    }
}
