<?php
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 05/03/2019
 * Time: 10:24
 */

namespace Project\main;


class contact
{
    public $id;
    public $email;
    public $facebook;
    public $mobil;
    public $github;

    public function __contruct($id,$facebook,$mail,$mobil,$github){
        $this->id=$id;
        $this->facebook=$facebook;
        $this->email=$mail;
        $this->mobil=$mobil;
        $this->github=$github;
    }
}