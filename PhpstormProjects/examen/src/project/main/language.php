<?php
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 05/03/2019
 * Time: 10:24
 */

namespace Project\main;


class language
{
    public $id;
    public $name;

    public function __contruct($id,$info){
        $this->id=$id;
        $this->name=$info;
    }
}