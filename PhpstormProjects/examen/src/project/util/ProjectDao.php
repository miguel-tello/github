<?php
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 19/03/2019
 * Time: 9:22
 */

namespace Project\util;


interface ProjectDao
{
    public function fetchAll($sql,$params=null);
    public function fetch($sql,$params=null);
    public function execute($sql,$params=null);
    public function insert($sql,$params=null);
    public function getconection();
}