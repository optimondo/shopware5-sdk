<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 Category.php
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
 * Class Category
 */
class Category extends Base
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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Category
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
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
