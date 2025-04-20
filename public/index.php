<?php
    require_once __DIR__."/../system/config/config.php";
    require_once __DIR__."/../vendor/autoload.php";
    // require_once __DIR__."/../src/Core/App.php";
    use Src\Core\Database;
    use Src\Core\App;
    $newDataBase = new Database();
    spl_autoload_register(function($class){
        $path="../".str_replace("\\","/",$class)."php";
        if(file_exists($path)){
            require_once $path;
        }
    });
    // $newApp = new App();
    