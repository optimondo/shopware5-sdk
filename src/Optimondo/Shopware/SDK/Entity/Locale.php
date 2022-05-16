<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 Locale.php
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
 * Class Locale
 */
class Locale extends Base
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $locale;
    /**
     * @var string
     */
    protected $language;
    /**
     * @var string
     */
    protected $territory;

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
     * @return Locale
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     *
     * @return Locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @return Locale
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return string
     */
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * @param string $territory
     *
     * @return Locale
     */
    public function setTerritory($territory)
    {
        $this->territory = $territory;

        return $this;
    }
}
