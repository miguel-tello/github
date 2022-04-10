<?php
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 19/03/2019
 * Time: 9:24
 */

namespace Project\util;


class MySqlProjectDao implements ProjectDao
{

    private $connection;
    public function __construct(\PDO $connection)
    {
        $this->connection=$connection;
    }


    public function fetchAll($sql, $params = null)
    {
        // TODO: Implement fetchAll() method.
        $stm=$this->connection->prepare($sql);
        $stm->execute($params);
        return $stm->fetchAll();
    }

    public function fetch($sql, $params = null)
    {
        // TODO: Implement fetch() method.
        $stm=$this->connection->prepare($sql);
        $stm->execute($params);
        return $stm->fetch();
    }

    public function execute($sql, $params = null)
    {
        // TODO: Implement execute() method.
        $stm=$this->connection->prepare($sql);
        $stm->execute($params);
    }

    public function insert($sql, $params = null)
    {
        // TODO: Implement insert() method.
        $stm=$this->connection->prepare($sql);
        $stm->execute($params);
        return $this->connection->lastInsertId();
    }

    public function getconection()
    {
        // TODO: Implement getconection() method.
        return $this->connection;
    }
}


