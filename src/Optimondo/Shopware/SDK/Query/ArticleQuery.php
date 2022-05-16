<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 ArticleQuery.php
 * Projekt:                   shopware5-sdk
 *
 * erstellt von:              Daniel Siekiera <ds@optimondo.de>
 * erstellt am:	              16.05.22, 13:04 Uhr
 * zu letzt bearbeitet:       13.05.22, 17:01 Uhr
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
