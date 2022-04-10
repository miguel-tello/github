<?php
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 05/03/2019
 * Time: 10:24
 */

namespace Project\main;


class quote
{
    public $id;
    public $autor;
    public $info;

    public function __contruct($id,$info,$autor){
        $this->id=$id;
        $this->info=$info;
        $this->autor=$autor;
    }
}
