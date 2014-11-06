<?php
    class database
    {
        var $link;
        public function __construct()
        {
            $dbHost     = "www.kinrally.com";
            $dbPassword = "utsa";
            $dbUserName = "Dealer";
            $this->link = mysql_connect($dbHost,$dbUserName,$dbPassword);
        }
        public function getDBStatus()
        {
            if (!$this->link)
            {
                echo 'No database connection';
            }
            else
            {
                echo 'Connected successfully to database';
            }
        }
        public function query($query)
        {
            mysql_select_db("JimsCarDealerShip",$this->link);
            $reply = mysql_query($query,$this->link);
            $errorno = mysql_errno($this -> link);
            //$error = mysql_error($this -> link);
            //print $error." : ".$query;
            return $reply;
        }
        public function getErrorNumber()
        {
            return mysql_errno($this -> link);
        }
        public function getError()
        {
            return mysql_error($this -> link);
        }
        public function getLastID()
		  {
				$result = mysql_insert_id();
		  		return $result;
		  }
	}
?>