<?php

$recepient = "proevv1@yandex.ru";
$sitename = "Destreet";

$name = trim($_POST["name"]);
$phone = trim($_POST["telefon"]);
$book = trim($_POST["book"]); //Назначение сайта
$market = trim($_POST["market"]); //Ваш рынок
$kolstr = trim($_POST["kolstr"]); //Кол-во страниц
$news = trim($_POST["news"]); //Новости
$fotogaleria = trim($_POST["fotogaleria"]); //Фотогалерея
$projectss = trim($_POST["projectss"]); //Проекты
$directory = trim($_POST["directory"]); //Каталог
$feedback = trim($_POST["feedback"]); //Обратная связь
$calculators = trim($_POST["calculators"]); //Калькуляторы
$polls = trim($_POST["polls"]); //Анкеты, опросы
$newsletter = trim($_POST["newsletter"]); //Рассылка
$gooddm = trim($_POST["gooddm"]); //Хорошие
$mediumm = trim($_POST["mediumm"]); //Средние
$badd = trim($_POST["badd"]); //Плохие
$nofotoo = trim($_POST["nofotoo"]); //Нет фото
$message = "
---Заявка на Сайт--- \n
Имя: $name \n
Телефон: $phone \n
Назначение сайта: $book \n
Ваш рынок: $market \n
Кол-во страниц: $kolstr \n
---Какие инфоблоки будут на сайте?--- \n
Новости: $news \n
Фотогалерея: $fotogaleria \n
Проекты: $projectss \n
Каталог: $directory \n
---Какие интерактивные блоки будут на сайте?--- \n
Обратная связь: $feedback \n
Калькуляторы: $calculators \n
Анкеты, опросы: $polls \n
Рассылка: $newsletter \n
---Какого качества фото у Вас есть для сайта?--- \n
Хорошие: $gooddm \n
Средние: $mediumm \n
Плохие: $badd \n
Нет фото: $nofotoo";

$pagetitle = "Новая заявка с сайта \"$sitename\" на Сайт";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");