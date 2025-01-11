<?php
    include "components/users.php";
    // include "components/classAccount.php";
    include "components/Administrateur.php";
    include "components/Apprenant.php";
    include "components/Gerant.php";
    include "components/Reservation.php";
    include "components/library.php";
    include "components/Reservation_dta.php";
    include "components/Book.php";
    include 'CRUD/viewUsers.php';

   
    $newClass = new viewUsers;
    $newClass->readUsers();
    $newClass->readuserById (4 );

    // $newClass->createIntoDb();
    // $newClass->getUsersFromDb();
    // $newClass->getUserById (4);

