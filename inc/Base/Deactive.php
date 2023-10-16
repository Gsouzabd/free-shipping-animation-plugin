<?php
namespace Inc_FSA\Base;


class Deactive{
    public static function deactivate(){

        flush_rewrite_rules();
    }


}