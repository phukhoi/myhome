<?php
namespace max_themes\components\frontend;

class enqueue
{
	public function __construct()
	{
		add_action('wp_enqueue_scripts', array($this, 'addStyles'));
		add_action('wp_enqueue_scripts', array($this, 'addScripts'));
	}
	public function addStyles()
	{
		wp_enqueue_style('Calibri-Bold', MAXTHEMES_URI_ASSET . 'fonts/Calibri-Bold/styles.css');
		wp_enqueue_style('Calibri', MAXTHEMES_URI_ASSET . 'fonts/Calibri/styles.css');
		wp_enqueue_style('bootstrap', MAXTHEMES_URI_ASSET . 'bootstrap/css/bootstrap.min.css');
		wp_enqueue_style('rev-slider-settings', MAXTHEMES_URI_ASSET . 'css/rev_slider/settings.css');
		wp_enqueue_style('rev-slider-layers', MAXTHEMES_URI_ASSET . 'css/rev_slider/layers.css');
		wp_enqueue_style('rev-slider-navigation', MAXTHEMES_URI_ASSET . 'css/rev_slider/navigation.css');
		wp_enqueue_style('font-awesome', MAXTHEMES_URI_ASSET . 'css/font-awesome.min.css');
		wp_enqueue_style('css-lineicon', MAXTHEMES_URI_ASSET . 'css/lineicon.css');
		wp_enqueue_style('flaticon-lineicon', MAXTHEMES_URI_ASSET . 'flaticon/flaticon.css');
		wp_enqueue_style('lightbox', MAXTHEMES_URI_ASSET . 'css/lightbox.css');
		wp_enqueue_style('jquery-ui', MAXTHEMES_URI_ASSET . 'css/jquery-ui.min.css');
		wp_enqueue_style('owl-carousel', MAXTHEMES_URI_ASSET . 'css/owl.carousel.css');
		wp_enqueue_style('owl-theme', MAXTHEMES_URI_ASSET . 'css/owl.theme.css');
		wp_enqueue_style('owl-transitions', MAXTHEMES_URI_ASSET . 'css/owl.transitions.css');
		wp_enqueue_style('slick', MAXTHEMES_URI_ASSET . 'slick/slick.css');
		wp_enqueue_style('slick-theme', MAXTHEMES_URI_ASSET . 'slick/slick-theme.css');
		wp_enqueue_style('style', MAXTHEMES_URI_ASSET . 'css/style.css?v=1.2');
		wp_enqueue_style('responsive', MAXTHEMES_URI_ASSET . 'css/responsive.css?v=1.2');
		wp_enqueue_style('myhome', MAXTHEMES_URI_ASSET . 'css/myhome.css');
		wp_enqueue_style( 'custom-css', MAXTHEMES_URI_ASSET . 'css/custom-css.css?v=1.2',false,'1.1','all');
	}
	public function addScripts()
	{
		//wp_enqueue_script('jquery-3.1.1', MAXTHEMES_URI_ASSET . 'js/jquery-3.1.1.min.js', array(), '', true);
		wp_enqueue_script('bootstrap', MAXTHEMES_URI_ASSET .'bootstrap/js/bootstrap.min.js', array(), '', true);
		wp_enqueue_script('rev-slider-1', MAXTHEMES_URI_ASSET .'js/rev_slider/jquery.themepunch.tools.min.js', array(), '', true);
		wp_enqueue_script('rev-slider-2',MAXTHEMES_URI_ASSET . 'js/rev_slider/jquery.themepunch.revolution.min.js', array(), '', true);
		wp_enqueue_script('rev-slider-3', MAXTHEMES_URI_ASSET .'js/rev_slider/extensions/revolution.extension.actions.min.js', array(), '', true);
		wp_enqueue_script('rev-slider-4', MAXTHEMES_URI_ASSET .'js/rev_slider/extensions/revolution.extension.carousel.min.js', array(), '', true);
		wp_enqueue_script('rev-slider-5', MAXTHEMES_URI_ASSET .'js/rev_slider/extensions/revolution.extension.kenburn.min.js', array(), '', true);
		wp_enqueue_script('rev-slider-6',MAXTHEMES_URI_ASSET . 'js/rev_slider/extensions/revolution.extension.layeranimation.min.js', array(), '', true);
		wp_enqueue_script('rev-slider-7', MAXTHEMES_URI_ASSET .'js/rev_slider/extensions/revolution.extension.migration.min.js', array(), '', true);
		wp_enqueue_script('rev-slider-8', MAXTHEMES_URI_ASSET .'js/rev_slider/extensions/revolution.extension.navigation.min.js', array(), '', true);
		wp_enqueue_script('rev-slider-9', MAXTHEMES_URI_ASSET .'js/rev_slider/extensions/revolution.extension.parallax.min.js', array(), '', true);
		wp_enqueue_script('rev-slider-10', MAXTHEMES_URI_ASSET .'js/rev_slider/extensions/revolution.extension.slideanims.min.js', array(), '', true);
		wp_enqueue_script('rev-slider-11', MAXTHEMES_URI_ASSET .'js/rev_slider/extensions/revolution.extension.video.min.js', array(), '', true);
		wp_enqueue_script('jquery-appear', MAXTHEMES_URI_ASSET .'js/jquery.appear.js', array(), '', true);
		wp_enqueue_script('slick', MAXTHEMES_URI_ASSET .'slick/slick.min.js', array(), '', true);
		wp_enqueue_script('jquery-countTo', MAXTHEMES_URI_ASSET .'js/jquery.countTo.js', array(), '', true);
		wp_enqueue_script('jquery-isotope', MAXTHEMES_URI_ASSET .'js/jquery.isotope.min.js', array(), '', true);
		wp_enqueue_script('lightbox', MAXTHEMES_URI_ASSET .'js/lightbox.js', array(), '', true);
		wp_enqueue_script('owl-carousel', MAXTHEMES_URI_ASSET .'js/owl.carousel.js', array(), '', true);
		wp_enqueue_script('jquery-easypiechart', MAXTHEMES_URI_ASSET .'js/jquery.easypiechart.js', array(), '', true);
		wp_enqueue_script('jquery-YTPlayer', MAXTHEMES_URI_ASSET .'js/jquery.mb.YTPlayer.js', array(), '', true);
		//wp_enqueue_script('jquery-core', MAXTHEMES_URI_ASSET .'js/jquery.ui.core.min.js', array(), '', true);
		wp_enqueue_script('jquery-datepicker',MAXTHEMES_URI_ASSET . 'js/jquery-ui-1.9.2.datepicker.min.js', array(), '', true);
		wp_enqueue_script('jquery-main', MAXTHEMES_URI_ASSET .'js/main.js', array(), '', true);
		wp_enqueue_script('myhome', MAXTHEMES_URI_ASSET .'js/myhome.js', array(), '', true);
	}
}					