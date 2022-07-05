<?php

namespace frontend\modules\education\controllers;

use yii\web\Controller;
use yii\helpers\Url;
use Yii;
use DOMDocument;
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
                'title' => 'Основы JavaScript',
                'description' => 'Давайте изучим основы создания скриптов.',
            ],
            1 => [
                'title' => 'Обработка событий, BOM, DOM',
                'description' => 'Объекты модели DOM. Иерархия узлов. Изменение дерева DOM. Поиск элементов. Управление ссылками: объекты Link и Links. Управление выделением и текстовым диапазоном: объекты Range, Selection и TextRange. Обобщение сведений об объекте Document',
            ],
            2 => [
                'title' => 'Формы',
                'description' => 'Создание элементов формы. Программирование элементов формы.',
            ],
            3 => [
                'title' => 'JSON, Ajax',
                'description' => 'JSON (JavaScript Object Notation) — текстовый формат для хранения и передачи данных по сети. Ajax — технология для взаимодействия с сервером без перезагрузки страницы',
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
                0 => [],
                1 => [],
                2 => 'Основы JavaScript',
            ],
            1 => [
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
                        'title' => 'Дополните приведенную страницу еще несколькими блоками с различными комбинациями тегов, имен, классов, атрибутов и идентификаторов. (урок id-53.)',
                        'parrentTask' => 53,
                    ],
                    4 => [
                        'title' => 'Добавьте в созданную программу кнопку, отменяющую выделение. (урок id-56.)',
                        'parrentTask' => 56,
                    ],
                    5 => [
                        'title' => 'Улучшить программу вставки авторского права. (урок id-57.)',
                        'parrentTask' => 57,
                    ],
                    6 => [
                        'title' => 'Улучшить программу вставки авторского права. (урок id-58.)',
                        'parrentTask' => 58,
                    ],
                ],
                2 => 'Обработка событий, BOM, DOM',
            ],
            2 => [
                0 => [
                    59 => 'Обобщение сведений об объекте Document.',
                    60 => 'Добавление новой записи (контакта) в телефонную книгу.',
                    61 => 'Форма авторизации Logbook, упрощенная версия.',
                    62 => 'Организация проверки форм.',
                    63 => 'Объект RegExp. Правила записи регулярных выражений.',
                    64 => 'Методы объектов String и RegExp для работы с регулярными выражениями.',
                    65 => 'создадим форму-анкету, предназначенную для добавления нового пользователя в некоторую систему.',
                    66 => 'Создание использование и удаление Cookie.',
                    67 => 'Простейшая система, имитирующуя авторизацию пользователей.',
                ],
                1 => [
                    7 => [
                        'title' => 'Домашнее задание. (урок id-61.)',
                        'parrentTask' => 61,
                    ],
                    8 => [
                        'title' => 'Домашнее задание. (урок id-60.)',
                        'parrentTask' => 60,
                    ],
                    9 => [
                        'title' => 'Домашнее задание. (урок id-65.)',
                        'parrentTask' => 65,
                    ],
                    10 => [
                        'title' => 'Домашнее задание. (урок id-65.)',
                        'parrentTask' => 65,
                    ],
                    11 => [
                        'title' => 'Домашнее задание. (урок id-65.)',
                        'parrentTask' => 65,
                    ],

                ],
                2 => 'Формы',
            ],
            3 => [
                0 => [
                    68 => 'Формат JSON.',
                    69 => 'Синтаксис JSON.',
                    70 => 'Функция stringify().',
                    71 => 'Функция parse().',
                    72 => 'Метод toJSON().',
                    73 => 'AJAX. Синхронные и асинхронные запросы.',
                    74 => 'Объект XMLHttpRequest.',
                    75 => 'События onload, onloadend, onerror.',
                    76 => 'Запросы на удаленный сервер.',
                    77 => 'Методы GET и POST.',
                    78 => 'Объект FormData.',
                ],
                1 => [
                    12 => [
                        'title' => 'Домашнее задание. (урок id-68.)',
                        'parrentTask' => 65,
                    ]
                ],
                2 => 'JSON, Ajax',
            ],

        ];

        if(array_key_exists($id, $taskList)) {
            return $this->render('list', [
                'id' => $id,
                'taskList' => $taskList[$id][0],
                'dzList' => $taskList[$id][1],
                'lessonTitle' => $taskList[$id][2],
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
//        if(!empty($_POST)){
//            echo '<pre>';
//            print_r(Yii::$app->request->post());
//            echo '<pre>';
//        }

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

    public function actionAjax(){
        //1. format json или text
//        return '{"firstName": "Andrey", "lastName": "Ivanov", "age": 20, "isStudent": true, "сontactInfo": { "phone": "098-556-33-41", "email": "AndreyIvanov@gmail.com" }, "disciplines": [ "Programming", "Machine engineering", "English" ] }';

        // 2. format xml
//        $dom = new DOMDocument("1.0", "utf-8"); // Создаём XML-документ версии 1.0 с кодировкой utf-8
//        $root = $dom->createElement("users"); // Создаём корневой элемент
//        $dom->appendChild($root);
//        $logins = array("User1", "User2", "User3"); // Логины пользователей
//        $passwords = array("Pass1", "Pass2", "Pass3"); // Пароли пользователей
//        for ($i = 0; $i < count($logins); $i++) {
//            $id = $i + 1; // id-пользователя
//            $user = $dom->createElement("user"); // Создаём узел "user"
//            $user->setAttribute("id", $id); // Устанавливаем атрибут "id" у узла "user"
//            $login = $dom->createElement("login", $logins[$i]); // Создаём узел "login" с текстом внутри
//            $password = $dom->createElement("password", $passwords[$i]); // Создаём узел "password" с текстом внутри
//            $user->appendChild($login); // Добавляем в узел "user" узел "login"
//            $user->appendChild($password);// Добавляем в узел "user" узел "password"
//            $root->appendChild($user); // Добавляем в корневой узел "users" узел "user"
//        }
//        return $dom->saveXML();

        // 3. Пример с методом Post
//        a) приняли данные от пользователя

//        б) записали новый запрос в crm

//        в) дали ответ, есть ли свободный менеджер для связи
        return true;
    }
}
