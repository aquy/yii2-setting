Yii2 Setting
============
Настройки, хранящиеся в базе данных

Установка
---------

Предпочтительный способ установить это расширение через [composer](http://getcomposer.org/download/).

Запустить

```
php composer.phar require --prefer-dist aquy/yii2-setting "*"
```

или добавить

```
"aquy/yii2-setting": "*"
```

в раздел require ващего `composer.json`.

После установки выполнить миграцию

```php
./yii migrate/up --migrationPath=@vendor/aquy/yii2-setting/migrations
```

для того, чтобы создать таблицу параметров в базе данных, если вы удалили данное расширение, то стоит удалять и миграцию, для этого выполните
 
```php
./yii migrate/down --migrationPath=@vendor/aquy/yii2-setting/migrations
```

а уже после этого удалите строку 

```
"aquy/yii2-setting": "*"
```

из раздела require ващего `composer.json` и выполните

```
php composer.phar update
```