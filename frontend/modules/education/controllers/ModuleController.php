<?php

namespace frontend\modules\education\controllers;

use yii\web\Controller;

class ModuleController extends Controller
{
    /**
     * This action show all modules by course
     * @return string
     */
    public function actionIndex(){
        return $this->render('index');
    }
}