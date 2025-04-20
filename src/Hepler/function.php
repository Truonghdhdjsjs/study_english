<?php
    namespace Src\Hepler;
    function display($array){
        echo "<pre>";
        var_dump($array);
        echo "</pre>";
    }

    function display_error()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
    }