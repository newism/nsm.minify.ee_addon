<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * NSM Minify
 * 
 * Minifys JS and CSS
 *
 * @package NsmMinify
 * @author Leevi Graham <http://leevigraham.com>
 * @copyright Copyright (c) 2007-2010 Newism
 * @license Commercial - please see LICENSE file included with this distribution
 * @see http://expressionengine.com/public_beta/docs/development/plugins.html
 *
 **/

$plugin_info = array(
	'pi_name' => 'NSM Minify',
	'pi_version' => '1.0.0',
	'pi_author' => 'Leevi Graham',
	'pi_author_url' => 'http://leevigraham.com/',
	'pi_description' => 'Minify JS & CSS',
	'pi_usage' => "http://expressionengine-addons.com/nsm-minify"
);

set_include_path($_SERVER['DOCUMENT_ROOT'] . '/min/lib');
require_once $_SERVER['DOCUMENT_ROOT'] . '/min/utils.php';

class Nsm_minify{

	var $return_data = "";

	function group_url()
	{
		$EE = get_instance();
		$group = $EE->TMPL->fetch_param('group');
		$debug = ($EE->TMPL->fetch_param('debug') == 'yes') ? '&amp;debug=1' : FALSE;
		return Minify_groupUri($group) . $debug;
	}
}
