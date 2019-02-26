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

        $app->set('request', [
            'class' => \ayaalkaplin\multilang\components\LangRequest::class,
            'csrfParam' => '_csrf',
            'baseUrl' => '',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
            'cookieValidationKey' => md5('js234AS'),
        ]);
    }
}