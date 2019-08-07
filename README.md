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
 !!!!Atention!!! without (bool) or (int) we give ups are string ('1/'0')!!!!!!:

```php
<?php var_dump((bool)Yii::$app->isHome) ?> //- true/false will be returned

bool(true/false)

<?php var_dump((int)Yii::$app->isHome)?> //-  1/0 will be returned
int(1/0)
```
As url(returned bool(true/false)):

```php
<?php
use yii\helpers\Url;
?>
<?php var_dump((Yii::$app->isHome->check(Url::to('any'))); ?> //- true/false will be returned

bool(true/false)
```
