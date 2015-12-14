<?php

$recepient = "proevv1@yandex.ru";
$sitename = "Destreet";

$name = trim($_POST["name"]);
$phone = trim($_POST["telefon"]);
$address = trim($_POST["address"]); //Сайт
$book = trim($_POST["book"]); //Целевой рынок
$age = trim($_POST["age"]); //Возраст
$soc = trim($_POST["soc"]); //Социальный статус
$internet = trim($_POST["internet"]); //Интернет
$media = trim($_POST["media"]); //СМИ
$outdoor = trim($_POST["outdoor"]); //Наружная реклама
$lowprice = trim($_POST["lowprice"]); //Низкая цена
$novelty = trim($_POST["novelty"]); //Новизна предложения
$more = trim($_POST["more"]); //Другое
$goodphoto = trim($_POST["goodphoto"]); //Хорошие фото
$slogann = trim($_POST["slogann"]); //Хороший слоган
$none = trim($_POST["none"]); //Ничего нет
$message = "
---Заявка на Рекламу--- \n
Имя: $name \n
Телефон: $phone \n
Сайт: $address \n
Целевой рынок: $book \n
Возраст: $age \n
Социальный статус: $soc \n
---Какие носители будут задействованы?--- \n
Интернет: $internet \n
СМИ: $media \n
Наружная реклама: $outdoor \n
---Что будет главным мативатором?--- \n
Низкая цена: $lowprice \n
Новизна предложения: $novelty \n
Другое: $more \n
---Какие материалы у Вас есть?--- \n
Хорошие фото: $goodphoto \n
Хороший слоган: $slogann \n
Ничего нет: $none";

$pagetitle = "Новая заявка с сайта \"$sitename\" на Рекламу";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");