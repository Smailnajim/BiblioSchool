<?php

// namespace CRUD;

    include "../components/connectingToMySql.php";

    
    class getFromDb extends DBHandling{
        protected function getUsersFromDb ()
        {
            $sql = 'SELECT * FROM users';
            $stm = $this->connect()->query($sql);
            $rows = $stm->fetchAll();
            return $rows;
        }

        protected function getUserBysId ($id)
        {
            $sql = "select * from users WHERE id = :id";
            $pdo = $this->connect();
            $stm = $pdo->prepare($sql);
            $stm->bindParam(':id', $id);
            $stm->execute();

            $name= $stm->fetch();
            return $name;
        }

    }