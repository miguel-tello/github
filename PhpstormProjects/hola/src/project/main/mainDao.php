<?php

namespace Project\main;

use DateTime;

use Firebase\JWT\JWT;
use PDO;
use Project\util\ProjectDao;

class mainDao
{
    private $dbConnection;

    public function __construct(ProjectDao $dbConnection)
    {
        $this->dbConnection = $dbConnection;
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

    //contacts
    public function getContacts()
    {
        $sql = "SELECT * FROM CONTACTS";
        return $this->dbConnection->fetchAll($sql);
    }

    public function getContactsById($id)
    {
        $sql = "SELECT * FROM CONTACTS WHERE id = ?";
        return $this->dbConnection->fetch($sql, array($id));
    }

    public function updateContact($aId, $a)
    {
        $sql = "UPDATE CONTACTS SET facebook = ?,email = ?, mobil = ?, github = ? WHERE id = ?";
        $this->dbConnection->execute($sql, array($a['facebook'], $a['email'],$a['mobil'], $a['github'], $aId));
        return $this->getContactsById($aId);
    }

    public function createContact($a)
    {
        $sql = "INSERT INTO CONTACTS (id, email, facebook, mobil, github) VALUES (?, ?, ?, ?, ?)";
        $id = $this->dbConnection->insert($sql, array( $a['id'],$a['email'], $a['facebook'], $a['mobil'], $a['github']));

        $a = $this->getContactsById($id);
        return $a;
    }


    public function deleteContact($id)
    {
        $sql = "DELETE FROM CONTACTS WHERE id = ?";
        $this->dbConnection->execute($sql, array($id));
    }


    //education
    public function geteducation()
    {
        $sql = "SELECT * FROM EDUCATIONS";
        return $this->dbConnection->fetchAll($sql);
    }

    public function geteducationById($id)
    {
        $sql = "SELECT * FROM EDUCATIONS WHERE id = ?";
        return $this->dbConnection->fetch($sql, array($id));
    }

    public function updateeducation($aId, $a)
    {
        $sql = "UPDATE EDUCATIONS SET  info = ?, initialdate = ?, finaldate = ?, token = ? WHERE id = ?";
        $this->dbConnection->execute($sql, array($a['info'], $a['initialdate'], $a['finaldate'], $a['token'], $aId));

        return $this->geteducationById($aId);
    }

    public function createeducation($a)
    {
        $sql = "INSERT INTO EDUCATIONS (info, initialdate, finaldate) VALUES (?, ?, ?)";
        $id = $this->dbConnection->insert($sql, array( $a['info'], $a['initialdate'], $a['finaldate']));

        $a = $this->geteducationById($id);
        $a->token = $this->generateToken($a->id);
        return $a;
    }


    public function deleteeducation($id)
    {
        $sql = "DELETE FROM EDUCATIONS WHERE id = ?";
        $this->dbConnection->execute($sql, array($id));
    }

    //language
    public function getlanguage()
    {
        $sql = "SELECT * FROM LANGUAGES ";
        return $this->dbConnection->fetchAll($sql);
    }

    public function getlanguageById($id)
    {
        $sql = "SELECT * FROM LANGUAGES WHERE id = ?";
        return $this->dbConnection->fetch($sql, array($id));
    }

    public function updatelanguage($aId, $a)
    {
        $sql = "UPDATE LANGUAGES SET name = ?, token = ? WHERE id = ?";
        $this->dbConnection->execute($sql, array($a['name'], $a['token'], $aId));

        return $this->getlanguageById($aId);
    }

    public function createlanguage($a)
    {
        $sql = "INSERT INTO LANGUAGES (name) VALUES (?)";
        $id = $this->dbConnection->insert($sql, array($a['name']));

        $a = $this->getlanguageById($id);
        $a->token = $this->generateToken($a->id);
        return $a;
    }


    public function deletelanguage($id)
    {
        $sql = "DELETE FROM LANGUAGES WHERE id = ?";
        $this->dbConnection->execute($sql, array($id));
    }

    //main
    public function getmain()
    {
        $sql = "SELECT * FROM MAIN ";
        return $this->dbConnection->fetchAll($sql);
    }

    public function getmainById($id)
    {
        $sql = "SELECT * FROM MAIN WHERE id = ?";
        return $this->dbConnection->fetch($sql, array($id));
    }

    public function updatemain($aId, $a)
    {
        $sql = "UPDATE MAIN SET  info = ?,mail = ?,avaliblefor = ?, token = ? WHERE id = ?";
        $this->dbConnection->execute($sql, array($a['info'], $a['mail'], $a['avaliblefor'], $a['token'], $aId));

        return $this->getmainById($aId);
    }

    //profesionalinfo
    public function getprofesionalinfo()
    {
        $sql = "SELECT * FROM PROFESIONALINFO ";
        return $this->dbConnection->fetchAll($sql);
    }

    public function getprofesionalinfoById($id)
    {
        $sql = "SELECT * FROM PROFESIONALINFO WHERE id = ?";
        return $this->dbConnection->fetch($sql, array($id));
    }

    public function updateprofesionalinfo($aId, $a)
    {
        $sql = "UPDATE PROFESIONALINFO SET info = ?, token = ? WHERE id = ?";
        $this->dbConnection->execute($sql, array($a['info'], $a['token'], $aId));

        return $this->getprofesionalinfoById($aId);
    }

    //projects
    public function getprojects()
    {
        $sql = "SELECT * FROM PROJECTS ";
        return $this->dbConnection->fetchAll($sql);
    }

    public function getprojectsById($id)
    {
        $sql = "SELECT * FROM PROJECTS WHERE id = ?";
        return $this->dbConnection->fetch($sql, array($id));
    }

    public function updateprojects($aId, $a)
    {
        $sql = "UPDATE PROJECTS SET info = ?, token = ? WHERE id = ?";
        $this->dbConnection->execute($sql, array($a['info'], $a['token'], $aId));

        return $this->getprojectsById($aId);
    }

    public function createprojects($a)
    {
        $sql = "INSERT INTO PROJECTS (id, info) VALUES (?, ?)";
        $id = $this->dbConnection->insert($sql, array($a['id'], $a['info']));

        $a = $this->getprojectsById($id);
        $a->token = $this->generateToken($a->id);
        return $a;
    }


    public function deleteprojects($id)
    {
        $sql = "DELETE FROM PROJECTS WHERE id = ?";
        $this->dbConnection->execute($sql, array($id));
    }

    //quote
    public function getquote()
    {
        $sql = "SELECT * FROM QUOTES ";
        return $this->dbConnection->fetchAll($sql);
    }

    public function getquoteById($id)
    {
        $sql = "SELECT * FROM QUOTES WHERE id = ?";
        return $this->dbConnection->fetch($sql, array($id));
    }

    public function updatequote($aId, $a)
    {
        $sql = "UPDATE QUOTES SET autor = ?, info = ?, token = ? WHERE id = ?";
        $this->dbConnection->execute($sql, array($a['autor'],$a['info'], $a['token'], $aId));

        return $this->getquoteById($aId);
    }

    //skill
    public function getskill()
    {
        $sql = "SELECT * FROM SKILLS ";
        return $this->dbConnection->fetchAll($sql);
    }

    public function getskillById($id)
    {
        $sql = "SELECT * FROM SKILLS WHERE id = ?";
        return $this->dbConnection->fetch($sql, array($id));
    }

    public function updateskill($aId, $a)
    {
        $sql = "UPDATE SKILLS SET info = ?, token = ? WHERE id = ?";
        $this->dbConnection->execute($sql, array($a['info'], $a['token'], $aId));

        return $this->getskillById($aId);
    }

    public function createskill($a)
    {
        $sql = "INSERT INTO SKILLS (id,info) VALUES (?,?)";
        $id = $this->dbConnection->insert($sql, array($a['id'],$a['info']));

        $a = $this->getskillById($id);
        $a->token = $this->generateToken($a->id);
        return $a;
    }


    public function deleteskill($id)
    {
        $sql = "DELETE FROM SKILLS WHERE id = ?";
        $this->dbConnection->execute($sql, array($id));
    }

    //testimonial
    public function gettestimonial()
    {
        $sql = "SELECT * FROM TESTIMONIALS ";
        return $this->dbConnection->fetchAll($sql);
    }

    public function gettestimonialById($id)
    {
        $sql = "SELECT * FROM TESTIMONIALS WHERE id = ?";
        return $this->dbConnection->fetch($sql, array($id));
    }

    public function updatetestimonial($aId, $a)
    {
        $sql = "UPDATE TESTIMONIALS SET username = ?,info = ? token = ? WHERE id = ?";
        $this->dbConnection->execute($sql, array($a['username'], $a['info'],$a['token'], $aId));

        return $this->getskillById($aId);
    }

    public function createtestimonial($a)
    {
        $sql = "INSERT INTO TESTIMONIALS (username, info) VALUES (?, ?)";
        $id = $this->dbConnection->insert($sql, array($a['username'], $a['info']));

        $a = $this->getskillById($id);
        $a->token = $this->generateToken($a->id);
        return $a;
    }


    public function deletetestimonial($id)
    {
        $sql = "DELETE FROM TESTIMONIALS WHERE id = ?";
        $this->dbConnection->execute($sql, array($id));
    }

    //workexperience
    public function getworkexperience()
    {
        $sql = "SELECT * FROM WORKEXPERIENCES";
        return $this->dbConnection->fetchAll($sql);
    }

    public function getworkexperienceById($id)
    {
        $sql = "SELECT * FROM WORKEXPERIENCES WHERE id = ?";
        return $this->dbConnection->fetch($sql, array($id));
    }

    public function updateworkexperience($aId, $a)
    {
        $sql = "UPDATE WORKEXPERIENCES SET  info = ?, initialdate = ?, finaldate = ?, token = ? WHERE id = ?";
        $this->dbConnection->execute($sql, array($a['info'], $a['initialdate'], $a['finaldate'], $a['token'], $aId));

        return $this->getworkexperienceById($aId);
    }

    public function createworkexperience($a)
    {
        $sql = "INSERT INTO WORKEXPERIENCES (info, initialdate, finaldate) VALUES (?, ?, ?, ?)";
        $id = $this->dbConnection->insert($sql, array($a['info'], $a['initialdate'], $a['finaldate']));

        $a = $this->getworkexperienceById($id);
        $a->token = $this->generateToken($a->id);
        return $a;
    }


    public function deleteworkexperience($id)
    {
        $sql = "DELETE FROM WORKEXPERIENCES WHERE id = ?";
        $this->dbConnection->execute($sql, array($id));
    }
}