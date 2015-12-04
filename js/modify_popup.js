// Инструкции для модификации всплывающего окна на странице Услуги дизайна
// 2015-12-04

var $j = jQuery.noConflict();

$j(document).ready(function(){
	var fldText = $j("#ninja_forms_field_238_div_wrap")
	var form = $j("#ninja_forms_form_54");
	var btn = $j(".post-3181 .et_pb_promo_button");
	form.before(fldText);

	btn.click(function (e) {
		e.preventDefault();
		$j("#ninja_forms_field_236").val($j(this).text());
	});
	
});