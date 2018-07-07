<?php
	/*
		* Template Name:TTP Index
	* */
	get_header();
?>
<?php
    get_template_part('inc/ttp', 'slider');
    get_template_part('inc/ttp', 'project');
    get_template_part('inc/ttp', 'news');
    get_template_part('inc/ttp', 'parterer');
?>
<?php get_footer(); ?>