<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 ArticleQuery.php
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

namespace Optimondo\Shopware\SDK\Query;

/**
 * Class ArticleQuery
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 Optimondo <amahrt@leadcommerce.de>
 */
class ArticleQuery extends Base
{
    /**
     * @return mixed
     */
    protected function getClass(): string
    {
        return 'Optimondo\\Shopware\\SDK\\Entity\\Article';
    }

    /**
     * @return string
     */
    protected function getQueryPath(): string
	{
        return 'articles';
    }
}
