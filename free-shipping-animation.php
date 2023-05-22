<?php
/*
* Plugin Name:          Free shipping Animation
* Description:          Plugin para Woocommerce. Animação para o valor necessário do frete grátis.
* Author:               Gabriel Souza | Flow Digital Creative Ecommerce
* Author URI:           https://goflow.digital
* Version:              1.0.1
* License: 						 GPLv3
* License URI: 				 http://www.gnu.org/licenses/gpl-3.0.html
* Text Domain:          free_shipping_animation
* WC requires at least: 3.0.0
* WC tested up to:      3.5.0
*/



/*ALWAYS SET PREFIX WITH PLUGIN NAME FIRST LETTERS OF EACH WORD. (ex.: Free Shipping Animation = FSA   ->   fsa_path, fsa_url) */

defined('ABSPATH') or die("You can't acess directly");

if(file_exists((dirname(__FILE__) . '/vendor/autoload.php'))){
    require_once((dirname(__FILE__) . '/vendor/autoload.php'));
}

/*
**Define main path and url
*/
define( 'FSA_BASENAME', plugin_basename(__FILE__));
define( 'FSA_PATH', plugin_dir_path((__FILE__)));
define( 'FSA_URL', plugin_dir_url(__FILE__));


use Inc\Base\Activate;
use Inc\Base\Deactive;

function activate_fsa_plugin(){
    Activate::activate();
}

function deactivate_fsa_plugin(){
    Deactive::deactivate();
}

register_activation_hook(__FILE__, 'activate_fsa_plugin');
register_deactivation_hook(__FILE__, 'deactivate_fsa_plugin');




if(class_exists('Inc\\Init')){
    Inc\Init::register_services();
}