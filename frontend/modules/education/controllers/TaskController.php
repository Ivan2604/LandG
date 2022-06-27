<?php

namespace frontend\modules\education\controllers;

use yii\web\Controller;
use yii\helpers\Url;
use Yii;
/**
 * Education controller.
 * Module Education
 */
class TaskController extends Controller
{
    /**
     * Show a default view of lessons with a task for study
     * @param $id
     * @return string
     */
    public function actionIndex(){
        $listTask = [
            0 => [
                'title' => 'Обработка событий, BOM, DOM',
                'description' => 'Объекты модели DOM. Иерархия узлов. Изменение дерева DOM. Поиск элементов. Управление ссылками: объекты Link и Links. Управление выделением и текстовым диапазоном: объекты Range, Selection и TextRange. Обобщение сведений об объекте Document',
            ],
            1 => [
                'title' => 'Основы JavaScript',
                'description' => 'Давайте изучим основы создания скриптов.',
            ],
        ];

        return $this->render('index', ['listTask' => $listTask]);
    }

    /**
     * Show a lesson with a task for study
     * @param $id
     * @return string
     */
    public function actionView($id=0){
        $id = intval($id);

        $taskList = [
            0 => [
                0 => [
                    44 => 'Вывод дочерних элементов тега html.',
                    45 => 'Вывод дочерних элементов тегов head и body.',
                    46 => 'Вывод дочерних элементов тегоа html (3 уровня вложености).',
                    47 => 'Два пособо подключения обработчика собитий.',
                    48 => 'Передача объекта события в фунцию при возникновении события.',
                    49 => 'Эффект всплытия событий.',
                    50 => 'Технологию «Drag-and-Drop» — перемещения элементов при помощи мыши.',
                    51 => 'Изменение дерева DOM.',
                    52 => 'Изменять порядок элементов при помощи технологии Drag-and-Drop.',
                    53 => 'Поиск элементов.',
                    54 => 'Управление ссылками: объекты Link и Links.',
                    55 => 'Управление выделением и текстовым диапазоном: объекты Range, Selection и TextRange.',
                    56 => 'Управление выделением и текстовым диапазоном: дополнительный пример.',
                    57 => 'Как можно добавить заметку об авторских правах к копируемому тексту.',
                    58 => 'Обобщение сведений об объекте Document.',
                ],
                1 => [
                    1 => [
                        'title' => 'Вставить элемент в центр списка (урок id-51. Изменение дерева DOM)',
                        'parrentTask' => 51,
                    ],
                    2 => [
                        'title' => 'Улучшить пример списка «Drag-and-Drop» (урок id-52. Изменять порядок элементов при помощи технологии Drag-and-Drop.)',
                        'parrentTask' => 52,
                    ],
                    3 => [
                        'title' => 'Дополните приведенную страницу еще несколькими блоками с различными комбинациями тегов, имен, классов, атрибутов и идентификаторов. (урок id-53. Поиск элементов.)',
                        'parrentTask' => 53,
                    ],
                    4 => [
                        'title' => 'Добавьте в созданную программу кнопку, отменяющую выделение. (урок id-56. Управление выделением и текстовым диапазоном: дополнительный пример.)',
                        'parrentTask' => 56,
                    ],
                    5 => [
                        'title' => 'Улучшить программу вставки авторского права. (урок id-57. Как можно добавить заметку об авторских правах к копируемому тексту.)',
                        'parrentTask' => 57,
                    ],
                    6 => [
                        'title' => 'Улучшить программу вставки авторского права. (урок id-58. Как можно добавить заметку об авторских правах к копируемому тексту.)',
                        'parrentTask' => 58,
                    ],
                ]

            ],

        ];

        if(array_key_exists($id, $taskList)) {
            return $this->render('list', [
                'taskList' => $taskList[$id][0],
                'dzList' => $taskList[$id][1],
            ]);
        }
        $this->redirect(['/education/task/index']);
    }

    /**
     * Examples of work that we analyze in lesson
     * @param $id
     * @return string
     */
    public function actionTemplate($id = 0){
        $this->layout = false;
        $id = intval($id);
        return $this->render('templates/template_'.$id);
    }

    /**
     * Homework for study
     * @param $id
     * @param $task
     * @return string
     */
    public function actionDz($id = 0, $task = 0){
        $id = intval($id);
        $task = intval($task);
        return $this->render('dz/dz_'.$id, ['task' => $task]);
    }
}