<?php

namespace frontend\modules\education\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex(){
        $this->redirect('course/index');
    }
}