LeadCommerce Shopware SDK
-----------------

A PHP SDK for the Shopware 5 REST API.


## Installing

```bash
composer require optimondo/shopware5-sdk
```


## Examples
```php
<?php
    require 'vendor/autoload.php';
    
    // Create a new client
    $client = new ShopwareClient('http://shopware.dev/api/', 'user', 'api_key');

    /**
     * set custom options for guzzle
     * the official guzzle documentation contains a list of valid options (http://docs.guzzlephp.org/en/latest/request-options.html) 
     */  
    //$client = new ShopwareClient('http://shopware.dev/api/', 'user', 'api_key', ['cert' => ['/path/server.pem']]);
    
    // Fetch all articles
    $articles = $client->getArticleQuery()->findAll();
    
    // Fetch one article by id
    $article = $client->getArticleQuery()->findOne(1);
    
    // Create an article
    $article = new Article();
    $article->setName("John product doe");
    $article->setDescription("Lorem ipsum");
    // ... <- more setters are required
    $client->getArticleQuery()->create($article);
   
    
    // Update article
    $article->setName("John product doe");
    $updatedArticle = $client->getArticleQuery()->update($article);
    
    // Set mainDetails
    $articleDetails = new ArticleDetail();
    $articleDetails->setActive(true);
    $articleDetails->setWeight(1.69);
    
    // Set Attributes
    $articleAttributes = new ArticleAttribute();
    
    // From attr1 > attr20
    $articleAttributes->setAttr4('ipsum');
    
    // Individual attributes ($key, $value)
    $articleAttributes->setOwnAttribute('lorem', 'ipsum');
    
    // Merge them together
    $article->setMainDetail($articleDetails);
    $article->setAttributes($articleAttributes);
    
    // Update multiple articles
    $articleOne = $client->getArticleQuery()->findOne(1);
    $articleOne->setName("John product doe");
    $articleTwo = $client->getArticleQuery()->findOne(2);
    $articleTwo->setName("John product doe 2");
        
    $articles = $client->getArticleQuery()->updateBatch([$articleOne, $articleTwo]);
    
    
    // Delete an article
    $client->getArticleQuery()->delete(1);
    
    // Delete multiple articles at once
    $client->getArticleQuery()->deleteBatch([1, 2, 3]);
    
    // Find article by parameters
    $client->getArticleQuery()->findByParams([
        'limit' => 10,
        'start' => 20,
        'sort' => [
            [
                'property' => 'name',
                'direction' => \Optimondo\Shopware\SDK\Util\Constants::ORDER_ASC
            ]
        ],
        'filter' => [
            [
                'property' => 'name',
                'expression' => 'LIKE',
                'value' => '%' . $term . '%'
            ],
            [
                'operator' => 'AND',
                'property' => 'number',
                'expression' => '>',
                'value' => '500'
            ]
        ]
    ]);
```

## Issues/Features proposals

[Here](https://github.com/optimondo/shopware-sdk/issues) is the issue tracker.


## License

[MIT](MIT-LICENSE)

## based on these great authors

- [Alexander Mahrt](https://github.com/cyruxx)
- [Jochen Niebuhr](https://github.com/jniebuhr)
