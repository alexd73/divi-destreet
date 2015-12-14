(function ($) {
    var forms = $('#form-booklet, #form-kalendar, #form-reklam, #form-site');
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
                $(this).find('input').val('');
                alert('Спасибо за заявку! Скоро мы с вами свяжемся.');
                $('#form').trigger('reset');
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
        $('#form-reklama .next-btn').click(function () {
            $('#form-reklama').css('marginTop', '-530px');
        });

    });
})(jQuery);
