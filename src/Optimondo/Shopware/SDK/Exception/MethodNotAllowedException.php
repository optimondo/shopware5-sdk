<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 MethodNotAllowedException.php
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
namespace Optimondo\Shopware\SDK\Exception;

/**
 * Class MethodNotAllowedException
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 Optimondo <amahrt@leadcommerce.de>
 */
class MethodNotAllowedException extends \Exception
{
    /**
     * MethodNotAllowedException constructor.
     *
     * @param string     $message
     * @param int        $code
     * @param \Exception $previous
     */
    public function __construct($message = 'Method is not allowed.', $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
