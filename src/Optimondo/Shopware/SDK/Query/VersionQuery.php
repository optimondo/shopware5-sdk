<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 VersionQuery.php
 * Projekt:                   shopware5-sdk
 *
 * erstellt von:              Daniel Siekiera <ds@optimondo.de>
 * erstellt am:	              18.05.22, 15:10 Uhr
 * zu letzt bearbeitet:       18.05.22, 15:09 Uhr
 *
 * Copyright © 2022 - Optimondo GmbH
 *
 * **************************************************************************************
 */

namespace Optimondo\Shopware\SDK\Query;

use Optimondo\Shopware\SDK\Util\Constants;

/**
 * Class VersionQuery
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 Optimondo <amahrt@leadcommerce.de>
 */
class VersionQuery extends Base
{
    /**
     * @var array
     */
    protected $methodsAllowed = [
        Constants::METHOD_GET_BATCH,
    ];

    /**
     * @return false|\stdClass
     */
    public function getVersion()
    {
        return $this->fetchJson('/version');
    }

    /**
     * @return mixed
     */
    protected function getClass(): string
    {
        return 'stdClass';
    }

    /**
     * @return string
     */
    protected function getQueryPath(): string
    {
        return 'version';
    }
}
