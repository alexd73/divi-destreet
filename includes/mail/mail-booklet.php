<?php

$recepient = "proevv1@yandex.ru";
//$recepient = "alexey@dyomin.ru";
$sitename = "Destreet";

$name = trim($_POST["name"]);
$phone = trim($_POST["telefon"]);
$address = trim($_POST["address"]);//Сайт
$book = trim($_POST["book"]); //Вид буклета
$formatt = trim($_POST["formatt"]); //Формат
$colstr = trim($_POST["colstr"]); //Кол-во страниц
$formyla = trim($_POST["formyla"]); //Формула
$foto = trim($_POST["foto"]); //Фото
$draft = trim($_POST["draft"]); //Чертежи
$chart = trim($_POST["chart"]); //Таблицы
$company = trim($_POST["company"]); //Компания
$services = trim($_POST["services"]); //Услугах
$Products = trim($_POST["Products"]); //Продукции
$Projects = trim($_POST["Projects"]); //Проектах
$good = trim($_POST["good"]); //Хорошее
$medium = trim($_POST["medium"]); //Среднее
$bad = trim($_POST["bad"]); //Плохое
$nofoto = trim($_POST["nofoto"]); //У нас нет фото

$message = "
---Заявка на Буклет--- \n
Имя: $name \n
Телефон: $phone \n
Сайт: $address \n  
Вид буклета: $book\n  
Формат: $formatt\n  
Кол-во страниц: $colstr\n  
---В издании будут размещены:---\n
Формула: $formyla\n  
Фото: $foto\n  
Чертежи: $draft\n  
Таблицы: $chart\n  
---Издание будет рассказывать о:---\n
Компании: $company\n  
Услугах: $services\n  
Продукции: $Products\n  
Проектах: $Projects\n 
---Какого качества фото у Вас есть для издания?---\n
Хорошее: $good\n  
Среднее: $medium\n  
Плохое: $bad\n  
У нас нет фото: $nofoto";

$pagetitle = "Новая заявка с сайта \"$sitename\" на Буклет1";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");