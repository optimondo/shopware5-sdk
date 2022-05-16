<?php
/*
 * **************************************************************************************
 *
 * Dateiname:                 ShopwareClient.php
 * Projekt:                   shopware5-sdk
 *
 * erstellt von:              Daniel Siekiera <ds@optimondo.de>
 * erstellt am:	              16.05.22, 13:04 Uhr
 * zu letzt bearbeitet:       13.05.22, 16:45 Uhr
 *
 * Copyright © 2022 - Optimondo GmbH
 *
 * **************************************************************************************
 */

namespace Optimondo\Shopware\SDK;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use Optimondo\Shopware\SDK\Query\AddressQuery;
use Optimondo\Shopware\SDK\Query\ArticleQuery;
use Optimondo\Shopware\SDK\Query\CacheQuery;
use Optimondo\Shopware\SDK\Query\CategoriesQuery;
use Optimondo\Shopware\SDK\Query\CountriesQuery;
use Optimondo\Shopware\SDK\Query\CustomerGroupsQuery;
use Optimondo\Shopware\SDK\Query\CustomerQuery;
use Optimondo\Shopware\SDK\Query\GenerateArticleImagesQuery;
use Optimondo\Shopware\SDK\Query\ManufacturersQuery;
use Optimondo\Shopware\SDK\Query\MediaQuery;
use Optimondo\Shopware\SDK\Query\OrdersQuery;
use Optimondo\Shopware\SDK\Query\PropertyGroupsQuery;
use Optimondo\Shopware\SDK\Query\ShopsQuery;
use Optimondo\Shopware\SDK\Query\TranslationsQuery;
use Optimondo\Shopware\SDK\Query\VariantsQuery;
use Optimondo\Shopware\SDK\Query\VersionQuery;
use \JsonMapper;

/**
 * Class ShopwareClient
 *
 * @author Alexander Mahrt <amahrt@leadcommerce.de>
 * @copyright 2016 Optimondo <amahrt@leadcommerce.de>
 *
 * @method AddressQuery getAddressQuery()
 * @method ArticleQuery getArticleQuery()
 * @method CacheQuery getCacheQuery()
 * @method CategoriesQuery getCategoriesQuery()
 * @method CountriesQuery getCountriesQuery()
 * @method CustomerGroupsQuery getCustomerGroupsQuery()
 * @method CustomerQuery getCustomerQuery()
 * @method GenerateArticleImagesQuery getGenerateArticleImageQuery()
 * @method MediaQuery getMediaQuery()
 * @method ManufacturersQuery getManufacturersQuery()
 * @method OrdersQuery getOrdersQuery()
 * @method PropertyGroupsQuery getPropertyGroupsQuery()
 * @method ShopsQuery getShopsQuery()
 * @method TranslationsQuery getTranslationsQuery()
 * @method VariantsQuery getVariantsQuery()
 * @method VersionQuery getVersionQuery()
 */
class ShopwareClient
{
    const VERSION = '0.1.0';

    /**
     * @var string|null
     */
    protected $baseUrl;

    /**
     * @var string|null
     */
    protected $username;

    /**
     * @var string|null
     */
    protected $apiKey;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var JsonMapper
     */
    protected $jsonMapper;
	
	/**
	 * ShopwareClient constructor.
	 *
	 * @param $baseUrl
	 * @param null $username
	 * @param null $apiKey
	 * @param array $guzzleOptions
	 */
    public function __construct($baseUrl, $username = null, $apiKey = null, array $guzzleOptions = [])
    {
        $this->baseUrl = $baseUrl;
        $this->username = $username;
        $this->apiKey = $apiKey;
        $curlHandler = new CurlHandler();
        $handlerStack = HandlerStack::create($curlHandler);

        $guzzleOptions = array_merge($guzzleOptions, [
            'base_uri' => $this->baseUrl,
            'handler'  => $handlerStack,
        ]);
        $this->client = new Client($guzzleOptions);
        $this->jsonMapper = new JsonMapper();
        $this->jsonMapper->bEnforceMapType = false;
        $this->jsonMapper->bStrictNullTypes = false;
    }
	
	/**
	 * Does a request.
	 *
	 * @param $uri
	 * @param string $method
	 * @param null $body
	 * @param array $headers
	 *
	 * @return mixed|\Psr\Http\Message\ResponseInterface
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
    public function request($uri, string $method = 'GET', $body = null, array $headers = [])
    {
        return $this->client->request($method, $uri, [
            'json'        => $body,
            'headers'     => $headers,
            'auth'        => [
                $this->username,
                $this->apiKey,
                'digest',
            ],
        ]);
    }

    /**
     * Magically get the query classes.
     *
     * @param $name
     * @param array $arguments
     *
     * @return bool
     */
    public function __call($name, array $arguments = [])
    {
        if (!preg_match('/^get([a-z]+Query)$/i', $name, $matches)) {
            return false;
        }

        $className = __NAMESPACE__ . '\\Query\\' . $matches[1];

        if (!class_exists($className)) {
            return false;
        }

        return new $className($this);
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Client $client
     *
     * @return ShopwareClient
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return JsonMapper
     */
    public function getJsonMapper(): JsonMapper
    {
        return $this->jsonMapper;
    }

    /**
     * @param JsonMapper $jsonMapper
     */
    public function setJsonMapper(JsonMapper $jsonMapper)
    {
        $this->jsonMapper = $jsonMapper;
    }

}
