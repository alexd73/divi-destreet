$(document).ready(function() {
                                                //Буклет
	$("#form-booklet").submit(function() {
		$.ajax({
			type: "POST",
			url: "php/mail-booklet.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
			$("#form").trigger("reset");
		});
		return false;
	});
                                                    //Календарь
    $("#form-kalendar").submit(function() {
		$.ajax({
			type: "POST",
			url: "php/mail-kalendar.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
			$("#form").trigger("reset");
		});
		return false;
	});
                                                    //Реклама
    $("#form-reklam").submit(function() {
		$.ajax({
			type: "POST",
			url: "php/mail-reklam.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
			$("#form").trigger("reset");
		});
		return false;
	});
                                                    //Сайт
    $("#form-site").submit(function() {
		$.ajax({
			type: "POST",
			url: "php/mail-site.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
			$("#form").trigger("reset");
		});
		return false;
	});
    
                                                        //Клик
    //Сайт
        $('.form-block-site .next-btn').click(function(){ 
        $('.form-block-site .mine').css('marginTop','-530px');
    });
    //Буклет
        $('.form-block-book .next-btn').click(function(){ 
        $('.form-block-book .mine').css('marginTop','-530px');
    });
    //Календарь
        $('.form-block-kalendar .next-btn').click(function(){ 
        $('.form-block-kalendar .mine').css('marginTop','-530px');
    });
    //Реклама
        $('.form-block-reklama .next-btn').click(function(){ 
        $('.form-block-reklama .mine').css('marginTop','-530px');
    });
	
});