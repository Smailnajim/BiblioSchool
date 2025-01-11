<?php
    class Reservation{
        private $allReservasion = [];

        public function showAllReservation()
        {
            return $this->allReservasion;
        }

        public function setReservasion($nameBook, $nameApprant, $date, $dateFine)
        {
            $r_dta = new Reservation_dta();
            $r_dta->setbookReserv($nameBook );
            $r_dta->setappran($nameApprant ) ;
            $r_dta->setdateStartReserve($date );
            $r_dta->setdateFineReserve($dateFine);
            $this->allReservasion [] = $r_dta;
        }
    }