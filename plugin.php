<?php
/**
 * Plugin Name: PluginReplace - skeleton-plugin-blocks-gutenberg
 * Description: Skeleton plugin blocks gutenberg
 * Author: Thomas Deneulin
 * Author URI: https://essential-dev-skills.com
 * Version: {VERSION}
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 */

 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once dirname(__FILE__) . "/vendor/autoload.php";

use PluginReplaceGutenberg\PluginReplaceEnqueue;

define("PLUGIN_REPLACE", "pluginname");
define("PLUGIN_REPLACE_VERSION", "{VERSION}");
define("PLUGIN_REPLACE_BASE_FILE", plugin_basename( __FILE__ ));
define("PLUGIN_REPLACE_PATH", plugin_dir_path( __FILE__ ));
define("PLUGIN_REPLACE_URL", plugin_dir_url(__FILE__) );

$actions = array(
	new PluginReplaceEnqueue()
);


foreach($actions as $action){
	if(!method_exists($action, "hooks")){
		continue;
	}

	$action->hooks();
}

