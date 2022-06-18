## Установка Yii2 framework advanced - расширенная версия
[Install advanced](https://www.yiiframework.com/extension/yiisoft/yii2-app-advanced/doc/guide/2.0/en/start-installation)

### Шаг 1. Установка с помощью composer

```
composer create-project --prefer-dist yiisoft/yii2-app-advanced yii-application
```

### Шаг 2. Копируем проект с директории yii-application в корень проекта, затем удаляем директорию yii-application за ненадобностью
- если Вы на linux
```
cp -rf yii-application/. . && rm -rf yii-application
```

- если на windows
```
Копируем все файлы с yii-application в корень проекта
```

### Шаг 3. В терминале выполняем скрипт init с коммандами по установке и выбираем dev среду окружения

```
php init
```
или

```
/path/to/php-bin/php /path/to/yii-application/init
```

### Шаг 4. Создаем локальную базу данных и в файле /путь/к/проекту/common/config/main-local.php устанавливаем настроки подключения к базе данных

Необходимо поменять значения: `localhost` на свой host, `yii2advance` на название своей базы данных, `root` на своего пользователя базы данных,
` ` установить пароль для подключения к базе данных, если он есть. Данные настройки конфигурации подключения к баазе даных относятся к серверу mysql.

```
'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
```

### Шаг 5. Делаем миграцию таблиц в базу данных выполнив следующую команду

```
php yii migrate
```
или

```
/path/to/php-bin/php /path/to/yii-application/yii migrate
```

### Шаг 6. Для того чтобы у нас был красивый внутренний адрес вместо domain/frontend/web на необходимо настроить .htaccess файлы, если у нас сервер apache2

#### Шаг 6.1. В корень (`@app`) проекта добавляем `.htaccess` со следующим содержанием:
[Настройка .htaccess](https://xn--d1acnqm.xn--j1amh/%D0%B7%D0%B0%D0%BF%D0%B8%D1%81%D0%B8/htaccess-%D0%B4%D0%BB%D1%8F-yii-2-advanced)

```
<IfModule mod_rewrite.c>
    Options +FollowSymlinks
    RewriteEngine On
</IfModule>
 
<IfModule mod_rewrite.c>
    # если /admin, то в backend
    RewriteCond %{REQUEST_URI} ^/(admin)
    RewriteRule ^admin/assets/(.*)$ backend/web/assets/$1 [L]
    RewriteRule ^admin/css/(.*)$ backend/web/css/$1 [L]
    RewriteRule ^admin/js/(.*)$ backend/web/js/$1 [L]
    RewriteCond %{REQUEST_URI} !^/backend/web/(assets|js|css|js)/
    RewriteCond %{REQUEST_URI} ^/(admin)
    RewriteRule ^.*$ backend/web/index.php [L]
    RewriteCond %{REQUEST_URI} ^/(assets|css|js|images)
    RewriteRule ^assets/(.*)$ frontend/web/assets/$1 [L]
    RewriteRule ^css/(.*)$ frontend/web/css/$1 [L]
    RewriteRule ^js/(.*)$ frontend/web/js/$1 [L]
    RewriteRule ^images/(.*)$ frontend/web/images/$1 [L]
    RewriteRule ^(.*)$ frontend/web/$1 [L]
    RewriteCond %{REQUEST_URI} !^/(frontend|backend)/web/(assets|css|js)/
    RewriteCond %{REQUEST_URI} !index.php
    RewriteCond %{REQUEST_FILENAME} !-f [OR]
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^.*$ frontend/web/index.php
</IfModule>
```

Где **admin** - путь к **@backend/web**, его можно заменить на то, что вам больше нравится, например: **administrator**, **cms-admin** или **ya-admin**)

### Шаг 6.2. В папку `@frontend/web` добавляем файл `.htaccess` со следующим содержанием:

```
RewriteEngine on
 
# если это папка или файл, открываем его
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
 
# в противном случае перенаправляем на index.php
RewriteRule . index.php
```

### Шаг 6.3. В файле `@frontend/config/main.php` в элемент `components` массива добавляем:

```
'request' => [
    'baseUrl' => '',
],
'urlManager' => [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '' => 'site/index',                                
        '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
    ],
],
```
Получится что-то вроде (более подробный пример):

```
<?php
 
//...
return [
    //...
    'components' => [
        //...
        'request' => [
            'baseUrl' => '',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/index',                                
                '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
            ],
        ],
        //...
    ],
    //...
];
```

### Шаг 6.4. В папку `@backend/web` добавляем файл `.htaccess` со следующим содержанием:

```
RewriteEngine on
 
# если это папка или файл, открываем его
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
 
# в противном случае перенаправляем на index.php
RewriteRule . index.php
```

### Шаг 6.5. В файле `@backend/config/main.php` в элемент `components` массива добавляем:

```
'request' => [
    'baseUrl' => '/admin',
],
'urlManager' => [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '' => 'site/index',                                
        '<controller:\w+>/<action:\w+>/' => '<controller>/<action>',
    ],
],
```

### Шаг 7. Иницилизируем пусто локальный репозиторий Git

```
git init
```

### Шаг 8. Настраиваем файл `.gitignore`, перечисляем те файлы и папки которые не следует отслеживать.
Можно использовать настроки файла по умолчанию.

### Шаг 9. Делаем первый коммит с поменкой об установке чистого проекта на yii2 framework

```
git add .
```

затем

```
git commit -m "Installed empty project Yii2 framework"
```