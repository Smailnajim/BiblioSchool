<?php


    class Reservation_dta{
        private $bookReserv;
        private $appran;
        private $dateStartReserve;
        private $dateFineReserve;

        //                                                get
        public function getbookReserv( )
        {
            return $this->bookReserv;
        }

        public function getappran( )
        {
            return $this->appran;
        }

        public function getdateStartReserve( )
        {
            return $this->dateStartReserve;
        }

        public function getdateFineReserve( )
        {
            return $this->dateFineReserve;
        }


        //                                               set
        public function setbookReserv($bookReserv)
        {
            $this->bookReserv = $bookReserv;
        }
        
        public function setappran($appran)
        {
            $this->appran = $appran;
        }
        
        public function setdateStartReserve($dateStartReserve )
        {
            $this->dateStartReserve = $dateStartReserve;
        }
        
        public function setdateFineReserve($dateFineReserve)
        {
            $this->dateFineReserve = $dateFineReserve;
        }
    }