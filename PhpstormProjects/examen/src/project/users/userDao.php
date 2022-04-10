<?php
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 05/03/2019
 * Time: 9:56
 */
namespace project\users;
use DateTime;

use Firebase\JWT\JWT;
use PDO;
use Project\util\ProjectDao;

class userDao{

    private $dbConnection;
    public function __construct(ProjectDao $c){
        $this->dbConnection=$c;
    }


    public function getall(){
        $sql="SELECT * FROM USERS";
        return $this->dbConnection->fetchAll($sql);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM USERS WHERE id = ?";
        return $this->dbConnection->fetch($sql, array($id));
    }

    public function updateUser($userId, $user)
    {
        $sql = "UPDATE USERS SET name = ?, mail = ? WHERE id = ?";
        $this->dbConnection->execute($sql, array($user->name, $user->name, $userId));

        return $this->getById($userId);
    }

    public function postLOGIN($name,$password){
        $sql="UPDATE LOGIN SET name=$name,password = $password";

        return $this->dbConnection->insert($sql,array($name,$password));
    }
    public function createUser($id,$name,$mail,$age){
        $inserted=false;
            $query=$this->dbConnection->getconection()->prepare("INSERT INTO users (id, name, mail, age) VALUES (?,?,?,?)");
            $query->bindValue(1, $id);
            $query->bindValue(2, $name);
            $query->bindValue(3, $mail);
            $query->bindValue(4, $age);
            $inserted=$query->execute();
    }


    public function loginUser($body)
    {
        $mail = $body['mail'];
        $password = $body['password'];
        $sql = "SELECT * FROM USERS WHERE mail = ?";
        $user = $this->dbConnection->fetch($sql, array($mail));
        if ($user->password === $password) {
            $user->token = $this->generateToken($user->id);
            return $user;
        } else {
            return false;
        }
    }


    public function delete($id){
        $sql="DELETE FROM USERS WHERE id = ?";
        return $this->dbConnection->execute($sql,array($id));
    }

    public function generateToken($username)
    {
        $now = new DateTime();
        $future = new DateTime("now +1 year");

        $payload = [
            "iat" => $now->getTimeStamp(),
            "exp" => $future->getTimeStamp(),
            "jti" => base64_encode(random_bytes(16)),
            'iss' => 'localhost:80',  // Issuer
            "id" => $username,
        ];

        $secret = 'mysecret';
        $token = JWT::encode($payload, $secret, "HS256");

        return $token;
    }
}


