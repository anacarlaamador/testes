<?php 

include 'autoloader.php';

foreach (new DirectoryIterator(path:__DIR__) as $file){

   if(substr($file->getfilename(), start:-8) !== 'Test.php'){
    continue;
   }

   $className = substr($file->getFilename(), start:0, length:-4);
   $testClass = new $className();

   $methods = get_class_methods($testClass);
   foreach ($methods as $methods){

    if (substr($methods, start:-4) !== 'Test'){
        continue;
    }
    $testClass->$methods();
   }
    
}