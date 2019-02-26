<?php

namespace ayaalkaplin\multilang;

use Yii;
use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface{

    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules([
            'multilang' => 'multilang/back-lang/index',
        ], false);

        $app->setModule('multilang', 'ayaalkaplin\multilang\Module');

        $config = yii\helpers\ArrayHelper::merge(
            require Yii::getAlias('@app').'/../common/config/main.php',
            require Yii::getAlias('@app').'/../common/config/main-local.php',
            require Yii::getAlias('@app').'/config/main.php',
            require Yii::getAlias('@app').'/config/main-local.php'
        );
        
        $pameters = yii\helpers\ArrayHelper::merge(
            $config['components']['request'],
            [
                'class' => \ayaalkaplin\multilang\components\LangRequest::class,
            ]
        );
        $app->set('request', $pameters);
    }
}