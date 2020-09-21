Развернуть и настроить Yii2 advanced проект.
Написание функционала в ООП стиле.
Создать модели автора (Author), книги (Book), и жанр (Genre). Все в  свою очередь реализуют работу с базой данных.
У каждого автора имеються свой набор полей: имя, фамилия, дата рождения, телефон.
У каждой книги имеется свое название, описание, автор, изображение, дата выпуска и набор жанров.

Yii2 backend

Создать страницу администнрирования на которой будет выводиться таблица через виджет GridView. В таблице должны присутствовать: название книги, дата выпуска в формате "20 июня, 2020", автор в формате "Фамилия Имя", и набор жанров через запятую "Драма, Роман, Миф". Также должна присутствовать возможность создавать, редактировать, просматривать и удалять каждую запись.
Для созданой ранее таблицы добавить фильтрацию по названию, автору, дате выпуска и жанру.
Фильтрация должна быть реализована без перезагрузки страницы.

Yii2 frontend

Создать страницу с выводом книг по 16  на страницу в 4 колонки и 4 ряда. Ниже добавить dropdown c кол-вом записей 16, 32, 48. При выборе кол-ва записей должно загрузиться соответствующее кол-во книг без перезагрузки страницы.
Рядом добавить пагинацию которая также работает без перезагрузки страницы.
При нажатии на кнопку каждой книги переходим на неё. На странице отдельной книги вывести всю информацию о ней, её жанры и автора.
 
Пример вывода книги. Если название больше чем 25 символов, тогда обрезать его и добавить троеточие в конце.
 
Структура вывода книг.
Визуальная часть не имеет значения, потому не нужно уделять особое внимание.
Создать миграции в которых будет реализовано создание всех необходимых таблиц.


<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <br>
</p>

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Build Status](https://travis-ci.com/yiisoft/yii2-app-advanced.svg?branch=master)](https://travis-ci.com/yiisoft/yii2-app-advanced)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
