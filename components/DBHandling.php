<?php

    class DBHandling {
        private $host;
        private $db;
        private $user;
        private $pasword;
        private $charset;

        protected function connect (){
            $this->host = 'localhost';
            $this->db ='biblioschool';
            $this->user ='root';
            $this->pasword ='';
            $this->charset= "UTF8mb4";
            
            try{
                $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
                $pdo = new PDO($dsn, $this->user, $this->pasword);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            }
            catch (PDOException $e) {
                echo $e->getMessage();
            }
            
        }
    }
    
    

    

    
