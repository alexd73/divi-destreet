<?php

$recepient = "proevv1@yandex.ru";
$sitename = "Destreet";

$name = trim($_POST["name"]);
$phone = trim($_POST["telefon"]);
$address = trim($_POST["address"]); //Сайт
$selectt = trim($_POST["selectt"]); //Вид календаря
$fonn = trim($_POST["fonn"]); //Эмоциональный фон
$sfera = trim($_POST["sfera"]); //Сфера деятельности
$drawing = trim($_POST["drawing"]); //Рисованный
$fotos = trim($_POST["fotos"]); //Фотография
$graphics = trim($_POST["graphics"]); //3д графика
$corporate = trim($_POST["corporate"]); //Корпоративный
$consumer = trim($_POST["consumer"]); //Потребительский
$mixed = trim($_POST["mixed"]); //Смешанный
$nicephot = trim($_POST["nicephot"]); //Хорошие фото
$slogan = trim($_POST["slogan"]); //Хороший слоган
$nothing = trim($_POST["nothing"]); //Ничего нет

$message = "
---Заявка на Календарь--- \n
Имя: $name \n
Телефон: $phone \n
Сайт: $address \n
Вид календаря: $selectt \n
Эмоциональный фон: $fonn \n
Сфера деятельности: $sfera \n
---Возможная техника исполнения:--- \n
Рисованный: $drawing \n
Фотография: $fotos \n
3D графика: $graphics \n
---Для какого рынка нужен календарь:--- \n
Корпоративный: $corporate \n
Потребительский: $consumer \n
Смешанный: $mixed \n
---Какие материалы у Вас есть?--- \n
Хорошие фото: $nicephot \n
Хороший слоган: $slogan \n
Ничего нет: $nothing";


$pagetitle = "Новая заявка с сайта \"$sitename\" на Календарь";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");