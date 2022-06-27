<?php

namespace frontend\modules\education;

use Yii;
use yii\base\Module as BaseModule;
use yii\filters\AccessControl;

class Module extends BaseModule
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'frontend\modules\education\controllers';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    ['allow' => true],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        //инициализация модуля с помощью конфигурации, загруженной из config.php
        Yii::configure($this, require __DIR__ . '/config/main.php');

    }
}