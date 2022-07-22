<?php

namespace APP\Model\DAO;

use APP\Model\Connection;
use PDO;

class UserDAO{
    public function findUser($login)
    {
        $connectiom = Connection::getConnection();
        $stmt = $connectiom->query("select * from user where login = '$login';");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}