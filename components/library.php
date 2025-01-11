<?php 
    class library{
        private $id;
        private $booksInLibrary = [];


        public function getId ()
        {
            return $this->id;
        }

        public function setid($id)
        {
            $this->id = $id;
        }


        public function getbooksInLibrary ()
        {
            return $this->booksInLibrary;
        }
        
        // how to use arry of class
        public function setbooksInLibrary(array $books)
        {
            foreach($books as $book)
            {
                $this->booksInLibrary [] = $book;
            }
        }

        // public function setbooksInLibrary(Book $book)
        // {
        //         $this->booksInLibrary [] = $book;   
        // }

    }