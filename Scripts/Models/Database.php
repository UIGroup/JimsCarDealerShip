<?php
class Database
{
    
    private $host = "www.kinrally.com";
    private $password = "utsa";
    private $username = "Dealer";
    private $dbName = "JimsCarDealerShip";
    private $link;
    public function __construct()
    {
        $link = mysql_connect($host, $username, $password);
    }
    public function query()
    {
        
    }
    public function getError()
    {
        
    }
    public function getErrorNo()
    {
        
    }
    public function printStatus()
    {
        if($link)
        {
            print 'Connection Made';
        }
        else
        {
            print 'Error in Connection';
        }
    }
}
?>