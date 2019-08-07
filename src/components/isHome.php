<?php
namespace xandrkat\homepagecheker;

use yii\helpers\Url;
use yii\base\Component;
use yii\base\InvalidConfigException;

class isHome extends Component {
    public $url;

    public function init() {
        parent::init();
        $this->url = Url::current();
    }
    public function check($url = NULL) {
        return (Url::home() === (!is_null($url) ? $url : $this->url)) ? true : false;
    }
    public function __toString() {
        $controller         = Yii::$app->controller;
        $default_controller = Yii::$app->defaultRoute;
        return  (($controller->id === $default_controller) && ($controller->action->id === $controller->defaultAction)) ? 'home' : '';
    }
}
