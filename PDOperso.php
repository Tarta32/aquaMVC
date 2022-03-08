<?php

class PDOperso extends PDO
{

    function __construct(
        $host = 'localhost', 
        $dbname = 'aqua', 
        $user = 'root', 
        $pwd = '',
        $port = 3306) 
    {
        parent::__construct(
            "mysql:host=$host:$port;dbname=$dbname;charset=UTF8",
            $user,
            $pwd
        );


        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


}
