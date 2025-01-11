<?php
include "Account.php";
include "DBHandling.php";

class users extends DBHandling{
    private $id;
    private $Fname;
    private $Lname;
    private $Role;
    private $email;
    private $pasword;

    

    public function __construct ($Fname, $Lname, $Role, $email, $pasword )
    {
        $this->Fname = $Fname;
        $this->Lname = $Lname;
        $this->Role = $Role;
        $this->email = $email;
        $this->pasword = $pasword;
    }
    

    //  seters                                             
    public function setEmail($email )
    {
        $this->email = $email;
    }

    public function setPasword($pasword )
    {
        $this->pasword = $pasword;
    }

    public function setRole($Role )
    {
        $this->Role = $Role;
    }

    public function setLname($Lname)
    {
        $this->Lname = $Lname;
    }

    public function setFname($Fname)
    {
        $this->Fname = $Fname;
    }




    //                                           Geters

    public function getId ()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPasword()
    {
        return $this->pasword;
    }

    public function getRole()
    {
        return $this->Role;
    }

    public function getLname()
    {
        return $this->Lname;
    }

    public function getFname()
    {
        return $this->Fname;
    }


    protected function setIntoDb() 
    {
        // declare connection with PDO
       $pd = $this->connect();
        // prepare queryfor insert INSERT INTO....
        $sql = "INSERT INTO users (Fname, Lname, Role, email, pasword ) VALUES  (:Fname, :Lname, :Role, :email, :pasword )";
        $stm = $pd->prepare($sql);

        $stm->bindParam(':Fname', $this->Fname);
        $stm->bindParam(':Lname', $this->Lname);
        $stm->bindParam(':email', $this->email);
        $stm->bindParam(':Role', $this->Role);
        $stm->bindParam(':pasword', $this->pasword);
        // execute the query
        $stm->execute();
    }


}