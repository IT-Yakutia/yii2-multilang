<?php

namespace ayaalkaplin\multilang\widgets\lang;

use ayaalkaplin\multilang\models\Lang;

/**
 * This is just an example.
 */
class Change extends \yii\base\Widget
{
    public function init(){}

    public function run() {
        return $this->render('index', [
            'current' => Lang::getCurrent(),
            'langs' => Lang::find()->where('id != :current_id', [':current_id' => Lang::getCurrent()->id])->all(),
        ]);
    }
}
