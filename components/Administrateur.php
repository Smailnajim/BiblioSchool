<?php

class Administrateur extends users{

    public function __construct($id, $Fname, $Lname, $Role, $email, $pasword )
    {
        parent:: __construct($id, $Fname, $Lname, $Role, $email, $pasword );
    }

    public function createRole(users $user, $rolee)
    {
        $user->setRole ($rolee);
    }
    public function deleteRole(users $user)
    {
        $user->setRole ('');
    }
}