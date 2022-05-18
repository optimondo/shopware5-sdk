<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 Constants.php
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
namespace Optimondo\Shopware\SDK\Util;

class Constants
{
    const METHOD_GET = 'GET';
    const METHOD_GET_BATCH = 'GET (BATCH)';
    const METHOD_CREATE = 'CREATE';
    const METHOD_UPDATE = 'UPDATE';
    const METHOD_UPDATE_BATCH = 'UPDATE (BATCH)';
    const METHOD_DELETE = 'DELETE';
    const METHOD_DELETE_BATCH = 'DELETE (BATCH)';

    const ORDER_ASC = 'ASC';
    const ORDER_DESC = 'DESC';
}
