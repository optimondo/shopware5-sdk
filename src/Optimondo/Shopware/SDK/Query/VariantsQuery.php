<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 VariantsQuery.php
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
 * Class VariantsQuery
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 Optimondo <amahrt@leadcommerce.de>
 */
class VariantsQuery extends Base
{
    /**
     * @var array
     */
    protected $methodsAllowed = [
        Constants::METHOD_CREATE,
        Constants::METHOD_GET,
        Constants::METHOD_UPDATE,
        Constants::METHOD_UPDATE_BATCH,
        Constants::METHOD_DELETE,
        Constants::METHOD_DELETE_BATCH,
    ];

    /**
     * @return mixed
     */
    protected function getClass(): string
    {
        return 'Optimondo\\Shopware\\SDK\\Entity\\ArticleDetail';
    }

    /**
     * @return string
     */
    protected function getQueryPath(): string
    {
        return 'variants';
    }
}
