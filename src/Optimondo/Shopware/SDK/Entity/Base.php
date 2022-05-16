<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 Base.php
 * Projekt:                   shopware5-sdk
 *
 * erstellt von:              Daniel Siekiera <ds@optimondo.de>
 * erstellt am:	              16.05.22, 13:04 Uhr
 * zu letzt bearbeitet:       13.05.22, 17:00 Uhr
 *
 * Copyright © 2022 - Optimondo GmbH
 *
 * **************************************************************************************
 */

namespace Optimondo\Shopware\SDK\Entity;

/**
 * Class Base
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 Optimondo <amahrt@leadcommerce.de>
 */
class Base
{
    /**
     * @var int
     */
    protected $id;

    /**
     * Gets the attributes of this entity.
     *
     * @return array
     */
    public function getArrayCopy(): array
	{
        $array = get_object_vars($this);

        foreach ($array as $key => &$value)
		{
            if ($value instanceof Base)
			{
                $array[$key] = $value->getArrayCopy();
            }
			else if (is_array($value))
			{
                foreach ($value as $k => $v)
				{
                    if ($v instanceof Base)
					{
                        $value[$k] = $v->getArrayCopy();
                    }
                }
            }
        }
	
		return array_filter($array, function ($value) {
            return $value !== null;
        });
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

	
    /**
     * @param int $id
     *
     * @return Base
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
