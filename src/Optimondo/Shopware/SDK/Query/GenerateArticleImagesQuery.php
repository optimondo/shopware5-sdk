<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 GenerateArticleImagesQuery.php
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

class GenerateArticleImagesQuery extends Base
{
    /**
     * @var array
     */
    protected $methodsAllowed = [
        Constants::METHOD_UPDATE,
    ];

    /**
     * Gets the class for the entities.
     *
     * @return string
     */
    protected function getClass()
    {
        return 'stdClass';
    }

    /**
     * Gets the query path to look for entities.
     * E.G: 'variants' or 'articles'
     *
     * @return string
     */
    protected function getQueryPath()
    {
        return 'generateArticleImages';
    }
}