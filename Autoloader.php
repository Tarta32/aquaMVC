<?php

class Autoloader
{

    static function start()
    {
        spl_autoload_register([__CLASS__, "autoload"]);
    }

    static function autoload($nomClasse)
    {
        $file = str_replace("\\","/",$nomClasse) . ".php";
        
        if (file_exists($file)) {
            
            include($file);
        }
    }
}
