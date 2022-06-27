<?php

namespace frontend\modules\education;

use yii\base\BootstrapInterface;
use yii\web\GroupUrlRule;

class Bootstrap implements BootstrapInterface
{
    public $urlRules = [
        'prefix' => 'education',
        'rules' => [
            'course' => 'course/index',
            'course/module' => 'module/index',
            'course/module/lesson' => 'lesson/index',
            'course/module/lesson/<id:\d+>' => 'lesson/item',

            'dz/<id:\d+>/<task:\d+>' => 'task/dz',
            'task/list' => 'task/index',
            'task/list/<id:\d+>' => 'task/view',
            'template/<id:\d+>' => 'task/template',
        ],
    ];

    public function bootstrap($app)
    {
        $app->get('urlManager')->rules[] = new GroupUrlRule($this->urlRules);
    }
}