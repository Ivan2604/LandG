<?php

namespace frontend\modules\education\controllers;

use yii\web\Controller;

class CourseController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}