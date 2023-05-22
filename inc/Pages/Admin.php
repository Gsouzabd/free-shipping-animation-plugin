<?php

namespace Inc\Pages;

class Admin{
    

    public function register(){
        add_action('admin_menu', array($this, 'add_admin_pages'));

    }
    
    public function add_admin_pages(){
        add_submenu_page(
            'woocommerce',
            'Free Shipping Animation',
            'Free Shipping Animation',
            'manage_options',
            'free_shipping_animation',
            array($this, 'admin_index'),
            'dashicons-money-alt',
            null
        );
    }

    public function admin_index(){
        require_once FSA_PATH . 'templates/admin.php';
    }

}