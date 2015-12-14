(function ($) {
    var forms = $('#form-booklet, #form-kalendar, #form-ad, #form-site');
    $(function () {
        $('input, select').styler();
    });
    $(document).ready(function () {
        //Оптимизированный код. :)
        //Отправка сообщения
        forms.submit(function () {
            id = ($(this).attr('id'));
            phpfile = 'http://destreet.com/wp-content/themes/divi-destreet/includes/mail/' + id.replace('form', 'mail') + '.php'; //Надо заменить на относительный путь.
            $.ajax({
                type: 'POST',
                url: phpfile,
                data: $(this).serialize()
            }).done(function () {
                divNext = $('#' + id + ' .next');
                divNext.children().fadeOut(1000);
                divNext.append('<p>Спасибо за заявку! Скоро мы с вами свяжемся.</p>').css('font-size', '14pt');
                divNext.append('<p><a class="et_pb_button et_pb_promo_button" href="/">Перейти на главную страницу.</a></p>');
            });
            return false;
        });

        //Клик

        //Сайт
        $('#form-site .next-btn').click(function () {
            $('#form-site').css('marginTop', '-530px');
        });
        //Буклет
        $('#form-booklet .next-btn').click(function () {
            $('#form-booklet').css('marginTop', '-530px');
        });
        //Календарь
        $('#form-kalendar .next-btn').click(function () {
            $('#form-kalendar').css('marginTop', '-530px');
        });
        //Реклама
        $('#form-ad .next-btn').click(function () {
            $('#form-ad').css('marginTop', '-530px');
        });

    });
})(jQuery);
