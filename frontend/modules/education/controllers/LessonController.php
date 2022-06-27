<?php

namespace frontend\modules\education\controllers;

use yii\web\Controller;

class LessonController extends Controller
{
    /**
     * action by default
     * @return string
     */
    public function actionIndex(){
        $listLessons = [
            1 => 'Введение',
            2 => 'Основы JavaScript',
//            3 => 'Качество кода',
//            4 => 'Объекты: основы',
//            5 => 'Типы данных',
//            6 => 'Продвинутая работа с функциями',
//            7 => 'Свойства объекта, их конфигурация',
//            8 => 'Прототипы, наследование',
//            9 => 'Классы',
//            10 => 'Обработка ошибок',
//            11 => 'Промисы, async/await',
//            12 => 'Генераторы, продвинутая итерация',
//            13 => 'Модули',
//            14 => 'Разное',
            15 => 'Document Object Model',

        ];
        return $this->render('index');
    }



    /**
     * This action show all lessons of course
     * @return string
     */
    public function actionList(){
        return $this->render('listLessons');
    }

    /**
     * This action show a current lesson
     * @return string
     */
    public function actionItem($id = 0){
        return $this->render('lesson');
    }

    public function actionView($id = 0)
    {
        $id = intval($id);

        $listLessons = [
            1 => [
                'Введение в JavaScript',
                'Справочники и спецификации',
                'Редакторы кода',
                'Консоль разработчика',
            ],
            2 => [
                'Привет, мир!',
                'Структура кода',
                'Строгий режим — "use strict"',
                'Переменные',
                'Типы данных',
                'Взаимодействие: alert, prompt, confirm',
            ],
            15 => [
                'Представление HTML-документа в виде дерева',
                'Объекты модели DOM. Иерархия узлов',
                'Свойства и методы модели DOM. Модель событий DOM',
                'Изменение дерева DOM',
                'Поиск элементов',
                'Управление ссылками: объекты Link и Links',
                'Управление выделением и текстовым диапазоном: объекты Range, Selection и TextRange',
                'Обобщение сведений об объекте Document',
            ],
        ];
        if(array_key_exists($id, $listLessons)){
            return $this->render('lessons', ['listLessons' => $listLessons[$id]]);
        }
        $this->redirect(['index']);
    }
}