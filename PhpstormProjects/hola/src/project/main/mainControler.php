<?php
namespace Project\main;

use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 05/03/2019
 * Time: 9:57
 */
class mainControler{
    private $dao;

    public function __construct(ContainerInterface $container)
    {
        $dbConnection = $container['projectDao'];

        $this->dao = new mainDao($dbConnection);
    }

    //contacts
    function getContacts(Request $request, Response $response, array $args)
    {
        $a = $this->dao->getContacts();
        return $response->withJson($a);
    }


    function updateContact(Request $request, Response $response, array $args)
    {
        $Id = $args['id'];
        $body = $request->getParsedBody();
        $a = $this->dao->updateContact($Id, $body);
        return $response->withJson($a);
    }


    function createContact(Request $request, Response $response, array $args)
    {
        $body = $request->getParsedBody();
        $a = $this->dao->createContact($body);
        return $response->withJson($a);
    }


    function deleteContact(Request $request, Response $response, array $args)
    {
        $aId = $args['id'];
        $this->dao->deleteContact($aId);
        return $response->withStatus(201);
    }

    //education
    function geteducation(Request $request, Response $response, array $args)
    {
        $a = $this->dao->geteducation();
        return $response->withJson($a);
    }


    function updateducation(Request $request, Response $response, array $args)
    {
        if ($requestaId = $request->getAttribute('token')->id) {
            $aId = $args['id'];
            if ($requestaId === $aId) {
                $body = $request->getParsedBody();
                $a = $this->dao->updateeducation($aId, $body);
                return $response->withJson($a);
            } else {
                return $response->withStatus(401);
            }
        } else {
            return $response->withStatus(404);
        }
    }

    function createeducation(Request $request, Response $response, array $args)
    {
        $body = $request->getParsedBody();
        $a = $this->dao->createeducation($body);
        return $response->withJson($a);
    }


    function deleteeducation(Request $request, Response $response, array $args)
    {
        $aId = $args['id'];
        $this->dao->deleteeducation($aId);
        return $response->withStatus(201);
    }

    //language
    function getlanguage(Request $request, Response $response, array $args)
    {
        $a = $this->dao->getlanguage();
        return $response->withJson($a);
    }


    function updatelanguage(Request $request, Response $response, array $args)
    {
        if ($requestaId = $request->getAttribute('token')->id) {
            $aId = $args['id'];
            if ($requestaId === $aId) {
                $body = $request->getParsedBody();
                $a = $this->dao->updatelanguage($aId, $body);
                return $response->withJson($a);
            } else {
                return $response->withStatus(401);
            }
        } else {
            return $response->withStatus(404);
        }
    }

    function createlanguage(Request $request, Response $response, array $args)
    {
        $body = $request->getParsedBody();
        $a = $this->dao->createlanguage($body);
        return $response->withJson($a);
    }


    function deletelanguage(Request $request, Response $response, array $args)
    {
        $aId = $args['id'];
        $this->dao->deletelanguage($aId);
        return $response->withStatus(201);
    }

    //main
    function getmain(Request $request, Response $response, array $args)
    {
        $a = $this->dao->getmain();
        return $response->withJson($a);
    }


    function updatemain(Request $request, Response $response, array $args)
    {
        if ($requestaId = $request->getAttribute('token')->id) {
            $aId = $args['id'];
            if ($requestaId === $aId) {
                $body = $request->getParsedBody();
                $a = $this->dao->updatemain($aId, $body);
                return $response->withJson($a);
            } else {
                return $response->withStatus(401);
            }
        } else {
            return $response->withStatus(404);
        }
    }

    //profesionalinfo
    function getprofesionalinfo(Request $request, Response $response, array $args)
    {
        $a = $this->dao->getprofesionalinfo();
        return $response->withJson($a);
    }


    function updateprofesionalinfo(Request $request, Response $response, array $args)
    {
        if ($requestaId = $request->getAttribute('token')->id) {
            $aId = $args['id'];
            if ($requestaId === $aId) {
                $body = $request->getParsedBody();
                $a = $this->dao->updateprofesionalinfo($aId, $body);
                return $response->withJson($a);
            } else {
                return $response->withStatus(401);
            }
        } else {
            return $response->withStatus(404);
        }
    }

    //projects
    function getprojects(Request $request, Response $response, array $args)
    {
        $a = $this->dao->getprojects();
        return $response->withJson($a);
    }


    function updateprojects(Request $request, Response $response, array $args)
    {
        if ($requestaId = $request->getAttribute('token')->id) {
            $aId = $args['id'];
            if ($requestaId === $aId) {
                $body = $request->getParsedBody();
                $a = $this->dao->updateprojects($aId, $body);
                return $response->withJson($a);
            } else {
                return $response->withStatus(401);
            }
        } else {
            return $response->withStatus(404);
        }
    }

    function createprojects(Request $request, Response $response, array $args)
    {
        $body = $request->getParsedBody();
        $a = $this->dao->createprojects($body);
        return $response->withJson($a);
    }


    function deleteprojects(Request $request, Response $response, array $args)
    {
        $aId = $args['id'];
        $this->dao->deleteprojects($aId);
        return $response->withStatus(201);
    }

    //quote
    function getquote(Request $request, Response $response, array $args)
    {
        $a = $this->dao->getquote();
        return $response->withJson($a);
    }


    function updatequote(Request $request, Response $response, array $args)
    {
        if ($requestaId = $request->getAttribute('token')->id) {
            $aId = $args['id'];
            if ($requestaId === $aId) {
                $body = $request->getParsedBody();
                $a = $this->dao->updatequote($aId, $body);
                return $response->withJson($a);
            } else {
                return $response->withStatus(401);
            }
        } else {
            return $response->withStatus(404);
        }
    }

    //skill
    function getskill(Request $request, Response $response, array $args)
    {
        $a = $this->dao->getskill();
        return $response->withJson($a);
    }


    function updateskill(Request $request, Response $response, array $args)
    {
        if ($requestaId = $request->getAttribute('token')->id) {
            $aId = $args['id'];
            if ($requestaId === $aId) {
                $body = $request->getParsedBody();
                $a = $this->dao->updateskill($aId, $body);
                return $response->withJson($a);
            } else {
                return $response->withStatus(401);
            }
        } else {
            return $response->withStatus(404);
        }
    }

    function createskill(Request $request, Response $response, array $args)
    {
        $body = $request->getParsedBody();
        $a = $this->dao->createskill($body);
        return $response->withJson($a);
    }


    function deleteskill(Request $request, Response $response, array $args)
    {
        $aId = $args['id'];
        $this->dao->deleteskill($aId);
        return $response->withStatus(201);
    }

    //testimonial
    function gettestimonial(Request $request, Response $response, array $args)
    {
        $a = $this->dao->gettestimonial();
        return $response->withJson($a);
    }


    function updatetestimonial(Request $request, Response $response, array $args)
    {
        if ($requestaId = $request->getAttribute('token')->id) {
            $aId = $args['id'];
            if ($requestaId === $aId) {
                $body = $request->getParsedBody();
                $a = $this->dao->updatetestimonial($aId, $body);
                return $response->withJson($a);
            } else {
                return $response->withStatus(401);
            }
        } else {
            return $response->withStatus(404);
        }
    }

    function createtestimonial(Request $request, Response $response, array $args)
    {
        $body = $request->getParsedBody();
        $a = $this->dao->createtestimonial($body);
        return $response->withJson($a);
    }


    function deletetestimonial(Request $request, Response $response, array $args)
    {
        $aId = $args['id'];
        $this->dao->deletetestimonial($aId);
        return $response->withStatus(201);
    }

    //workexperience
    function getworkexperience(Request $request, Response $response, array $args)
    {
        $a = $this->dao->getworkexperience();
        return $response->withJson($a);
    }


    function updateworkexperience(Request $request, Response $response, array $args)
    {
        if ($requestaId = $request->getAttribute('token')->id) {
            $aId = $args['id'];
            if ($requestaId === $aId) {
                $body = $request->getParsedBody();
                $a = $this->dao->updateworkexperience($aId, $body);
                return $response->withJson($a);
            } else {
                return $response->withStatus(401);
            }
        } else {
            return $response->withStatus(404);
        }
    }

    function createworkexperience(Request $request, Response $response, array $args)
    {
        $body = $request->getParsedBody();
        $a = $this->dao->createworkexperience($body);
        return $response->withJson($a);
    }


    function deleteworkexperience(Request $request, Response $response, array $args)
    {
        $aId = $args['id'];
        $this->dao->deleteworkexperience($aId);
        return $response->withStatus(201);
    }
}

