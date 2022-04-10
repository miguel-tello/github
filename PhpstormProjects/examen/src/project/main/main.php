<?php
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 05/03/2019
 * Time: 10:24
 */

namespace Project\main;


class main
{
    public $id;
    public $info;
    public $mail;
    public $avaliblefor;

    public function __contruct($id,$info,$mail,$avaliblefor){
        $this->id=$id;
        $this->info=$info;
        $this->mail=$mail;
        $this->avaliblefor=$avaliblefor;
    }
}
