<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 ConfiguratorSet.php
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
 * Class ConfiguratorSet
 */
class ConfiguratorSet extends Base
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
     * @var bool
     */
    protected $public;
    /**
     * @var int
     */
    protected $type;
    /**
     * @var ConfiguratorGroup[]
     */
    protected $groups;

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
     * @return ConfiguratorSet
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
     * @return ConfiguratorSet
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPublic()
    {
        return $this->public;
    }

    /**
     * @param bool $public
     *
     * @return ConfiguratorSet
     */
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     *
     * @return ConfiguratorSet
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return ConfiguratorGroup[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param ConfiguratorGroup[] $groups
     *
     * @return ConfiguratorSet
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;

        return $this;
    }
}
