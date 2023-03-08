<?php
/*
    **Plugin Name: Mlovi Plugin
    **Description: Mlovi mailer plugin for woocommerce
    **Version: 1.0.0
    **Text Tomain: mailer_plugin
*/


/*ALWAYS SET PREFIX WITH PLUGIN NAME FIRST LETTERS OF EACH WORD. (ex.: MLOVI PLUGIN = MP   ->   mp_path, mp_url) */

defined('ABSPATH') or die("You can't acess directly");

if(file_exists((dirname(__FILE__) . '/vendor/autoload.php'))){
    require_once((dirname(__FILE__) . '/vendor/autoload.php'));
}

/*
**Define main path and url
*/
define( 'MP_BASENAME', plugin_basename(__FILE__));
define( 'MP_PATH', plugin_dir_path((__FILE__)));
define( 'MP_URL', plugin_dir_url(__FILE__));


use Inc\Base\Activate;
use Inc\Base\Deactivate;
use Inc\Base\Deactive;

function activate_mp_plugin(){
    Activate::activate();
}

function deactivate_mp_plugin(){
    Deactive::deactivate();
}

register_activation_hook(__FILE__, 'activate_mp_plugin');
register_deactivation_hook(__FILE__, 'deactivate_mp_plugin');




if(class_exists('Inc\\Init')){
    Inc\Init::register_services();
}