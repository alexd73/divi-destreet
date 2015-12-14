<?php

 
/**
* Вывод блоков 
*/
class feedback_shortcode
{
	static $add_script;
	function init()
	{
	    add_shortcode('feedback', array(__CLASS__, 'feedback_func'));
	    add_action('init', array(__CLASS__, 'register_script_style'));
	    add_action('wp_footer', array(__CLASS__, 'print_script'));
	    add_action('wp_head', array(__CLASS__, 'print_styles'));
    }
	function feedback_func($attrs)
	{
		wp_enqueue_style('formstyler');
		wp_enqueue_style('feedback');
		self::$add_script = true; 
		extract( shortcode_atts( array(
	      'tab' => 'book',
	    ), $attrs ) );
        include 'feedback_forms.php';
        return ${$tab . '_form'};

	}

	static function register_script_style() {
      wp_register_script( 'feedback_send', get_stylesheet_directory_uri() . '/js/feedback_send.js');
      wp_register_script( 'formstyler', get_stylesheet_directory_uri() . '/js/jquery.formstyler.min.js', array('jquery'));
      wp_register_script( 'form-func', get_stylesheet_directory_uri() . '/js/form-func.js');

      wp_register_style('feedback', get_stylesheet_directory_uri() . '/css/feedback.css');
      wp_register_style('formstyler', get_stylesheet_directory_uri() . '/css/jquery.formstyler.css');
  	}
 
	static function print_script () {
		if ( !self::$add_script ) return;
		wp_enqueue_script('feedback_send');
		wp_enqueue_script('formstyler');
		wp_enqueue_script('form-func');
	}

	static function print_styles () {
		if ( !self::$add_script ) return;
	}
} 
feedback_shortcode::init();
