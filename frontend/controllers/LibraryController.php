<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Library controller.
 * Module Library
 */
class LibraryController extends Controller
{
    public $layout = 'panel';

    public function actionIndex(){
        //Вернула модель
        $data = ['apple', 'ibm'];
        return $this->render('index', ['data' => $data]);
    }
}