<?php
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 05/03/2019
 * Time: 10:24
 */

namespace Project\main;


class workexperience
{
    public $id;
    public $info;
    public $initialdate;
    public $finaldate;

    public function __contruct($id,$info,$initialdate,$finaldate){
        $this->id=$id;
        $this->info=$info;
        $this->initialdate=$initialdate;
        $this->finaldate=$finaldate;
    }
}