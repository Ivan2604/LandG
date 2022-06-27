<?php

namespace frontend\modules\education\controllers;

use yii\web\Controller;

class LectureController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}