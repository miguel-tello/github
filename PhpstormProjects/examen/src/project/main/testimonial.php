<?php
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 05/03/2019
 * Time: 10:24
 */

namespace Project\main;


class testimonial
{
    public $id;
    public $info;
    public $username;

    public function __contruct($id,$info,$username){
        $this->id=$id;
        $this->info=$info;
        $this->username=$username;
    }
}
