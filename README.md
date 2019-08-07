Yii2 IsHome page checker
========================
Simple Yii2 component to check isHome no w or not. Or by url.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist xandrkat/yii2-check-ishome "@dev"
```

or add

```
"xandrkat/yii2-check-ishome": "@dev"
```

to the require section of your `composer.json` file.


Usage
-----

add to main.php backend/frontend/app to copmponents aray

```php
return [
    //....
    'components' => [
        'isHome' => [
            'class' => 'xandrkat\homepagecheker\isHome',
        ],
    ],
];
```

Then use any do you want) As Simple, currnet url:
 Return string 'home' or empty string

```php
<?php var_dump((bool)Yii::$app->isHome) ?> //- 'home'/'' will be returned

'home'/''


```php
<?php
use yii\helpers\Url;
?>
<?php var_dump((Yii::$app->isHome->check(Url::to('any'))); ?> //- true/false will be returned

bool(true/false)
```
