<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * Education controller.
 * Module Education
 */
class EducationController extends Controller
{
    public function actionIndex(){
        $listExamples = [
            [
                'id' => 41, //History object, view example_41.php
                'title' => 'History object',
                'description' => 'Для иллюстрации работы методов объекта «history»
                    рассмотрим следующую программу.',
            ],
            [
                'id' => 42, //Коллекция Frames., view example_42.php
                'title' => 'Коллекция Frames.',
                'description' => 'Для иллюстрации работы с коллекцией «window.
                    frames» рассмотрим следующую программу.',
            ],
            [
                'id' => 44, //Отображение дочерних елементов, view example_44.php
                'title' => 'Коллекции «childNodes»',
                'description' => 'Основным элементом модели является узел (node).
                    Дочерние узлы хранятся в его коллекции «childNodes»,
                    родительский узел доступен через свойство «parentNode».',
            ]
        ];
        return $this->render('index', ['listExamples' => $listExamples]);
    }

    public function actionExample($id){
        $page = 'example_'.$id;
        return $this->render($page);
    }
}
