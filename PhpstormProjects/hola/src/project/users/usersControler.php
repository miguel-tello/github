<?php


namespace Project\users;

use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 05/03/2019
 * Time: 9:57
 */
class usersControler{
    private $dao;

    public function __construct(ContainerInterface $container)
    {
        $dbConnection = $container['projectDao'];

        $this->dao = new userDao($dbConnection);
    }

    function getAll(Request $request, Response $response, array $args)
    {
        $users = $this->dao->getAll();
        return $response->withJson($users);
    }

    function getUserById(Request $request, Response $response, array $args)
    {
        $user = $this->dao->getById($args['id']);
        return $response->withJson($user);
    }

    function updateUser(Request $request, Response $response, array $args)
    {
            $userId = $args['id'];
        $body = $request->getParsedBody();
        $usermodel = new users($body['id'],$body['name'],$body['mail'],$body['age']);
        $user = $this->dao->updateUser($userId, $usermodel);
        return $response->withJson($user);
    }

    function createUser(Request $request, Response $response, array $args)
    {
        $body = $request->getParsedBody();
        $user = $this->dao->createUser($body["id"],$body["name"],$body["mail"],$body["age"]);
        return $response->withJson($user);
    }

    function loginUser(Request $request, Response $response, array $args)
    {
        $body = $request->getParsedBody();
        if ($user = $this->dao->loginUser($body)) {
            return $response->withJson($user);
        } else {
            return $response->withStatus(401);
        }
    }

    function deleteUser(Request $request, Response $response, array $args)
    {
        $userId = $args['id'];
        $this->dao->delete($userId);
        return $response->withStatus(201);
    }
}
