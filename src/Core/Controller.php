<?php
    namespace  Src\Core;
    class Controller{
        public function model($model)
        {
            $path_model = __DIR__."/../Model/{$model}.php";
            if(file_exists($path_model))
            {
                require_once $path_model;
                $classname = "Src\\Model\\".$model;
                if(class_exists($classname))
                {
                    return new $classname;
                }
                else
                {
                    throw new \Exception("Class {$className} not found in model file.");
                }
            }
            else
            {
                throw new \Exception("Model file {$model}.php not found.");
                
            }
        }
        public function view($folder,$view, $data=[])
        {
            $path_view = __DIR__."/../View/{$folder}/{$view}.php";
            if(file_exists($path_view))
            {
                extract($data);
                require_once $path_view;
            }
            else
            {
                echo "View {$folder}/{$view}.php not found!";
            }
        }
    }