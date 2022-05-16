<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 Version.php
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
 * Class Version
 */
class Version extends Base
{
    /**
     * @var string
     */
    protected $version;
    /**
     * @var string
     */
    protected $revision;

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return Version
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * @param string $revision
     *
     * @return Version
     */
    public function setRevision($revision)
    {
        $this->revision = $revision;

        return $this;
    }
}
