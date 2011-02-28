<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/** 
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 **/

return array(
	'css_screen' => array(
		'//templates/default_site/css/screen/base.css',
		'//templates/default_site/css/screen/layout.css',
		'//templates/default_site/css/screen/typography.css',
		'//templates/default_site/css/screen/forms.css',
		'//templates/default_site/css/screen/tables.css',
		'//templates/default_site/css/screen/navigation.css',
		'//templates/default_site/css/screen/entries.css',
		'//templates/default_site/css/screen/comments.css',
		'//templates/default_site/css/screen/widgets.css',
		'//templates/default_site/css/screen/adverts.css',
	
	),
	'css_print' => array(
		'//templates/default_site/css/screen/base.css',
		'//templates/default_site/css/screen/typography.css',
	
	),
	'js' => array(
		'//templates/default_site/js/jquery.min.js',
		'//templates/default_site/js/behaviours.js'
	)
);