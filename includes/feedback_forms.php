<?php
$book_form = '<form id="form-booklet">
    <div class="first">
        <h1>Узнай цену. Сравни. Оцените разницу.</h1>
        <div class="col-md-4 md-offset-90">
            <select name="book" class="book">
                <option value="volvo">Вид буклета</option>
                <option value="saab">Представительский</option>
                <option value="opel">Информационный</option>
                <option value="audi">Рекламный</option>
            </select>
            <p>В издании будут размещены:</p>
            <div class="check">
                <input id="formyla" type="checkbox" name="formyla">
                <label for="formyla">Формула</label>
            </div>
            <div class="check">
                <input id="foto" type="checkbox" name="foto">
                <label for="foto">Фото</label>
            </div>
            <div class="check">
                <input id="draft" type="checkbox" name="draft">
                <label for="draft">Чертежи</label>
            </div>
            <div class="check">
                <input id="chart" type="checkbox" name="chart">
                <label for="chart">Таблицы</label>
            </div>
        </div>
        <div class="col-md-4">
            <input class="selectf arrows" type="text" name="formatt" placeholder="Формат (А4, 99х210мм)">
            <p>Издание будет рассказывать о:</p>
            <div class="check">
                <input id="company" type="checkbox" name="company">
                <label for="company">Компании</label>
            </div>
            <div class="check">
                <input id="services" type="checkbox" name="services">
                <label for="services">Услугах</label>
            </div>
            <div class="check">
                <input id="Products" type="checkbox" name="Products">
                <label for="Products">Продукции</label>
            </div>
            <div class="check">
                <input id="Projects" type="checkbox" name="Projects">
                <label for="Projects">Проектах</label>
            </div>
        </div>
        <div class="col-md-4">
            <input class="selectf tel" type="text" name="colstr" placeholder="Количество страниц">
            <p>Какого качества фото у Вас есть для издания?</p>
            <div class="check">
                <input id="good" type="checkbox" name="good">
                <label for="good">Хорошие</label>
            </div>
            <div class="check">
                <input id="medium" type="checkbox" name="medium">
                <label for="medium">Средние</label>
            </div>
            <div class="check">
                <input id="bad" type="checkbox" name="bad">
                <label for="bad">Плохие</label>
            </div>
            <div class="check">
                <input id="nofoto" type="checkbox" name="nofoto">
                <label for="nofoto">У меня нет фото</label>
            </div>
        </div>
        <input class="next-btn btn-form" type="button" value="Расчитать проект">
    </div>
    <div class="next">
        <h1>Перезвоним сразу</h1>
        <p>Сообщим Вам стоимость Вашего проекта, сроки исполнения работы,
            <br>порекомендуем оптимальный вариант решения</p>
        <div class="contact">
            <input class="phone selectf" type="text" name="telefon" placeholder="Ваш телефон" required>
            <input class="name selectf" type="text" name="name" placeholder="Вашe имя" required>
            <input class="address bl-centr selectf" type="text" name="address" placeholder="Адрес Вашего сайта">
        </div>
        <input class="btn-form" type="submit" value="Узнать цену и сроки">
    </div>
</form>';

$cal_form = '<form id="form-kalendar">
    <div class="first">
        <h1>Узнай цену. Сравни. Оцените разницу.</h1>
        <div class="col-md-4 md-offset-90">
            <select name="selectt" class="book">
                <option value="volvo">Вид календаря</option>
                <option value="saab">Представительский</option>
                <option value="opel">Информационный</option>
                <option value="audi">Рекламный</option>
            </select>
            <p>Возможная техника исполнения:</p>
            <div class="check">
                <input id="drawing" type="checkbox" name="drawing">
                <label for="drawing">Рисованный</label>
            </div>
            <div class="check">
                <input id="fotos" type="checkbox" name="fotos">
                <label for="fotos">Фотографии</label>
            </div>
            <div class="check">
                <input id="graphics" type="checkbox" name="graphics">
                <label for="graphics">3D-графика</label>
            </div>
        </div>
        <div class="col-md-4">
            <input class="selectf arrows" type="text" name="fonn" placeholder="Эмоциональный фон">
            <p>Для какого рынка нужен календарь:</p>
            <div class="check">
                <input id="corporate" type="checkbox" name="corporate">
                <label for="corporate">Корпоративный (b2b)</label>
            </div>
            <div class="check">
                <input id="consumer" type="checkbox" name="consumer">
                <label for="consumer">Потребительский (b2c)</label>
            </div>
            <div class="check">
                <input id="mixed" type="checkbox" name="mixed">
                <label for="mixed">Смешанный</label>
            </div>
        </div>
        <div class="col-md-4">
            <input class="selectf tel" type="text" name="sfera" placeholder="Сфера деятельности">
            <p>Какие материалы у Вас есть?</p>
            <div class="check">
                <input id="nicephot" type="checkbox" name="nicephot">
                <label for="nicephot">Хорошие фотографии</label>
            </div>
            <div class="check">
                <input id="slogan" type="checkbox" name="slogan">
                <label for="slogan">Хороший слоган</label>
            </div>
            <div class="check">
                <input id="nothing" type="checkbox" name="nothing">
                <label for="nothing">Ничего нет</label>
            </div>
        </div>
        <input class="next-btn btn-form" type="button" value="Расчитать проект">
    </div>
    <div class="next">
        <h1>Перезвоним сразу</h1>
        <p>Сообщим Вам стоимость Вашего проекта, сроки исполнения работы,
            <br>порекомендуем оптимальный вариант решения</p>
        <div class="contact">
            <input class="phone selectf" type="text" name="telefon" placeholder="Ваш телефон" required>
            <input class="name selectf" type="text" name="name" placeholder="Вашe имя" required>
            <input class="address bl-centr selectf" type="text" name="address" placeholder="Адрес Вашего сайта">
        </div>
        <input class="btn-form" type="submit" value="Узнать цену и сроки">
    </div>
</form>';

$ad_form = '
<form id="form-reklam">
    <div class="first">
        <h1>Узнай цену. Сравни. Оцените разницу.</h1>
        <div class="col-md-4 md-offset-90">
            <select name="book" class="book">
                <option value="volvo">Целевой рынок</option>
                <option value="saab">Представительский</option>
                <option value="opel">Информационный</option>
                <option value="audi">Рекламный</option>
            </select>
            <p>Какие носители будут задействованы?</p>
            <div class="check">
                <input id="internet" type="checkbox" name="internet">
                <label for="internet">Интернет</label>
            </div>
            <div class="check">
                <input id="media" type="checkbox" name="media">
                <label for="media">СМИ</label>
            </div>
            <div class="check">
                <input id="outdoor" type="checkbox" name="outdoor">
                <label for="outdoor">Наружная реклама</label>
            </div>
        </div>
        <div class="col-md-4">
            <input class="selectf arrows" type="text" name="age" placeholder="Возраст аудитории">
            <p>Что будет главным мативатором?</p>
            <div class="check">
                <input id="lowprice" type="checkbox" name="lowprice">
                <label for="lowprice">Низкая цена</label>
            </div>
            <div class="check">
                <input id="novelty" type="checkbox" name="novelty">
                <label for="novelty">Новизна предложения</label>
            </div>
            <div class="check">
                <input id="more" type="checkbox" name="more">
                <label for="more">Другое</label>
            </div>
        </div>
        <div class="col-md-4">
            <input class="selectf tel" type="text" name="soc" placeholder="Социальный статус">
            <p>Какие материалы у Вас есть?</p>
            <div class="check">
                <input id="goodphoto" type="checkbox" name="goodphoto">
                <label for="goodphoto">Хорошие фотографии</label>
            </div>
            <div class="check">
                <input id="slogann" type="checkbox" name="slogann">
                <label for="slogann">Хороший слоган</label>
            </div>
            <div class="check">
                <input id="none" type="checkbox" name="none">
                <label for="none">Ничего нет</label>
            </div>
        </div>
        <input class="next-btn btn-form" type="button" value="Расчитать проект">
    </div>
    <div class="next">
        <h1>Перезвоним сразу</h1>
        <p>Сообщим Вам стоимость Вашего проекта, сроки исполнения работы,
            <br>порекомендуем оптимальный вариант решения</p>
        <div class="contact">
            <input class="phone selectf" type="text" name="telefon" placeholder="Ваш телефон" required>
            <input class="name selectf" type="text" name="name" placeholder="Вашe имя" required>
            <input class="address bl-centr selectf" type="text" name="address" placeholder="Адрес Вашего сайта">
        </div>
        <input class="btn-form" type="submit" value="Узнать цену и сроки">
    </div>
</form>';

$site_form = '
<form id="form-site">
    <div class="first">
        <h1>Узнай цену. Сравни. Оцените разницу.</h1>
        <div class="col-md-4 md-offset-90">
            <select name="book" class="book">
                <option value="volvo">Назначение сайта</option>
                <option value="saab">Представительский</option>
                <option value="opel">Информационный</option>
                <option value="audi">Рекламный</option>
            </select>
            <p>Какие инфоблоки будут на сайте?</p>
            <div class="check">
                <input id="news" type="checkbox" name="news">
                <label for="news">Новости</label>
            </div>
            <div class="check">
                <input id="fotogaleria" type="checkbox" name="fotogaleria">
                <label for="fotogaleria">Фотогалерея</label>
            </div>
            <div class="check">
                <input id="projectss" type="checkbox" name="projectss">
                <label for="projectss">Проекты</label>
            </div>
            <div class="check">
                <input id="directory" type="checkbox" name="directory">
                <label for="directory">Каталог</label>
            </div>
        </div>
        <div class="col-md-4">
            <input class="selectf arrows" type="text" name="market" placeholder="Ваш рынок">
            <p>Какие интерактивные блоки будут на сайте?</p>
            <div class="check">
                <input id="feedback" type="checkbox" name="feedback">
                <label for="feedback">Обратная связь</label>
            </div>
            <div class="check">
                <input id="calculators" type="checkbox" name="calculators">
                <label for="calculators">Калькуляторы</label>
            </div>
            <div class="check">
                <input id="polls" type="checkbox" name="polls">
                <label for="polls">Анкеты, опросы</label>
            </div>
            <div class="check">
                <input id="newsletter" type="checkbox" name="newsletter">
                <label for="newsletter">Рассылки</label>
            </div>
        </div>
        <div class="col-md-4">
            <input class="selectf tel" type="text" name="kolstr" placeholder="Количество страниц">
            <p>Какого качества фото у Вас есть для сайта?</p>
            <div class="check">
                <input id="gooddm" type="checkbox" name="gooddm">
                <label for="gooddm">Хорошие</label>
            </div>
            <div class="check">
                <input id="mediumm" type="checkbox" name="mediumm">
                <label for="mediumm">Средние</label>
            </div>
            <div class="check">
                <input id="badd" type="checkbox" name="badd">
                <label for="badd">Плохие</label>
            </div>
            <div class="check">
                <input id="nofotoo" type="checkbox" name="nofotoo">
                <label for="nofotoo">У меня нет фото</label>
            </div>
        </div>
        <input class="next-btn btn-form" type="button" value="Расчитать проект">
    </div>
    <div class="next">
        <h1>Перезвоним сразу</h1>
        <p>Сообщим Вам стоимость Вашего проекта, сроки исполнения работы,
            <br>порекомендуем оптимальный вариант решения</p>
        <div class="contact-site">
            <input class="name selectf" type="text" name="name" placeholder="Вашe имя" required>
            <input class="phone selectf" type="text" name="telefon" placeholder="Ваш телефон" required>
        </div>
        <input class="btn-form" type="submit" value="Узнать цену и сроки">
    </div>
</form>';