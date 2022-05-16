<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 CacheQuery.php
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

namespace Optimondo\Shopware\SDK\Query;

use Optimondo\Shopware\SDK\Util\Constants;

/**
 * Class CacheQuery
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 Optimondo <amahrt@leadcommerce.de>
 */
class CacheQuery extends Base
{
    /**
     * @var array
     */
    protected $methodsAllowed = [
        Constants::METHOD_GET,
        Constants::METHOD_GET_BATCH,
        Constants::METHOD_DELETE,
        Constants::METHOD_DELETE_BATCH,
    ];

    /**
     * @return mixed
     */
    protected function getClass()
    {
        return 'Optimondo\\Shopware\\SDK\\Entity\\Cache';
    }

    /**
     * @return string
     */
    protected function getQueryPath()
    {
        return 'caches';
    }
}
