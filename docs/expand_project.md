## Установка Yii2 framework advanced - расширенная версия
[Install advanced](https://www.yiiframework.com/extension/yiisoft/yii2-app-advanced/doc/guide/2.0/en/start-installation)

### Шаг 1. Установить проект с GitHub репозитория c корень проекта
```
git clone https://github.com/QuStyle/LandG.git
```

### Шаг 2. Устанавливаем зависимости
```
composer install
```

### Шаг 3. В терминале выполняем скрипт init

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

### Разрабатываем в своей ветке devSurname

```
git checkout -b devSurname
```