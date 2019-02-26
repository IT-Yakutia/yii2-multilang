<?php

namespace ayaalkaplin\multilang;

use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'ayaalkaplin\multilang\controllers';
    
    public function init(){
        parent::init();

        //$this->layout = '@vandor/ayaalkaplin/multilang/src/views/layouts/main';
    }
}