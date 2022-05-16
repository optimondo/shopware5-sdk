<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 VersionQuery.php
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
    protected function getClass()
    {
        return 'stdClass';
    }

    /**
     * @return string
     */
    protected function getQueryPath()
    {
        return 'version';
    }
}
