<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 ShopsQuery.php
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

class ShopsQuery extends Base
{
    /**
     * @var array
     */
    protected $methodsAllowed = [
        Constants::METHOD_CREATE,
        Constants::METHOD_GET,
        Constants::METHOD_GET_BATCH,
        Constants::METHOD_UPDATE,
        Constants::METHOD_DELETE,
    ];

    /**
     * @return mixed
     */
    protected function getClass(): string
    {
        return 'Optimondo\\Shopware\\SDK\\Entity\\Shop';
    }

    /**
     * @return string
     */
    protected function getQueryPath(): string
    {
        return 'shops';
    }
}
