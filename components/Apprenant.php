<?php


    class Apprenant extends users
    {
        private $booksReserv;
        private $library;

        public function __construct($id, $Fname, $Lname, $Role, $email, $pasword )
        {
            parent:: __construct($id, $Fname, $Lname, $Role, $email, $pasword );
        }
        
        public function search ($nameBook, library $library )
        {
            $this->setLibrary($library );

            foreach ($this->library->getbooksInLibrary() as $book )
            {
                if($book->getname() == $nameBook )
                {
                    return $book->getId ();
                } 
            }
            return false;
        }
        
        public function getBook($nameBook, library $library )
        {
            $this->setLibrary($library );

            if($this->search($nameBook, $library ) )
            {
                $this->library->getbooksInLibrary() [$this->search($nameBook, $library ) ]->setStateBook ('Pending');
            }
            else{
                echo 'book not finde!\n';
            }
        }

        public function setLibrary(library $library )
        {
            $this->library = $library;
        }
    }