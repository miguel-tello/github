<?php
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 05/03/2019
 * Time: 10:24
 */

namespace Project\users;


class users
{
    public $id;
    public $name;
    public $mail;
    public $age;

    public function __construct($id,$name,$mail,$age){
        $this->id=$id;
        $this->name=$name;
        $this->mail=$mail;
        $this->age=$age;
    }
}