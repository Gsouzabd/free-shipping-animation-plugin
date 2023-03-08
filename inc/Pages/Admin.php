<?php

namespace Inc\Pages;

class Admin{
    

    public function register(){
        add_action('admin_menu', array($this, 'add_admin_pages'));

    }
    
    public function add_admin_pages(){
        add_menu_page('Mailer Plugin', 'Mailer', 'manage_options', 'mailer_plugin',array($this, 'admin_index'), 'dashicons-email-alt2', null);
    }

    public function admin_index(){
        require_once MP_PATH . 'templates/admin.php';
    }

}