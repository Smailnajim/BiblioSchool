<?php

class Gerant extends users{
    private $allReservation;
    
    public function __construct($id, $Fname, $Lname, $Role, $email, $pasword )
    {
        parent:: __construct($id, $Fname, $Lname, $Role, $email, $pasword );
    }

    public function validReservation(Book $itemBook, $nameAppran)
    {
        if($itemBook->getStateBook() == "Pending")
        {
            $itemBook->setstateBook("Confirme");
            $this->allReservation->setReservasion($itemBook->getname(), $nameAppran, date("Y/m/d"), date_create("2013-03-15"));
        }
        
        
        return $itemBook->getId ();
    }

    public function FineReservation(Book $itemBook)
    {
        $itemBook->setstateBook("Termine");
        unset($allReservation[$itemBook->getId()]);
    }

    public function addNewBook($id, $tags, $photo, $author, $prix, $name)
    {
        return new Book($id, $tags, $photo, $author, $prix, $name);
    }
}
