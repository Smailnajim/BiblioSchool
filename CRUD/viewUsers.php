<?php
    include "getFromDb.php";

    class viewUsers extends getFromDb{
        public function readUsers()
        {
            foreach($this->getUsersFromDb() as $row)
            {
                echo $row['Fname'] . "</br>";
            }
        }

        public function readuserById ($id )
        {
            echo $this->getUserBysId ($id )['Lname'] . ": hhh</br>";
        }
        
    }