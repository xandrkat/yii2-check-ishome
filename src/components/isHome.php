<?php
namespace xandrkat\homepagecheker;

use yii\helpers\Url;
use yii\base\Component;
use yii\base\InvalidConfigException;

class isHome extends Component {
    public $url;

    public function init() {
        parent::init();
        $this->url = \Yii::$app->homeUrl;
    }
    public function check($url) {
        return Url::home() === ($url ? $url : $this->url) ? true : false;
    }
    public function __toString() {
        return  ((Url::home() === \Yii::$app->homeUrl) && (Url::home() === Url::toRoute(\Yii::$app->controller->id.DIRECTORY_SEPARATOR.\Yii::$app->controller->action->id))) ? '1' : '0';
    }
}