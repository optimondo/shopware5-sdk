<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 PropertyGroup.php
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
 * Class PropertyGroup
 */
class PropertyGroup extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $position;
    /**
     * @var bool
     */
    protected $comparable;
    /**
     * @var int
     */
    protected $sortMode;

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
     * @return PropertyGroup
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * @return PropertyGroup
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * @return PropertyGroup
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return bool
     */
    public function isComparable()
    {
        return $this->comparable;
    }

    /**
     * @param bool $comparable
     *
     * @return PropertyGroup
     */
    public function setComparable($comparable)
    {
        $this->comparable = $comparable;

        return $this;
    }

    /**
     * @return int
     */
    public function getSortMode()
    {
        return $this->sortMode;
    }

    /**
     * @param int $sortMode
     *
     * @return PropertyGroup
     */
    public function setSortMode($sortMode)
    {
        $this->sortMode = $sortMode;

        return $this;
    }
}
