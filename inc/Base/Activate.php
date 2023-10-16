<?php
namespace Inc_FSA\Base;


class Activate{
    public static function activate(){

        flush_rewrite_rules();
    }


}