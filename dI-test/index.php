<?php


require_once __DIR__ . '/vendor/autoload.php';


use App\Services\Logger;
use App\Services\UserService;


//simple container class (use for Autowiring and Reflection)

class SimpleContainer{
    public function get($className){
        $reflector = new ReflectionClass($className);
        $constructor = $reflector->getConstructor();

        if(!$constructor){
            return new $className();


        }

        $parameters = $constructor->getParameters();
        $dependencies = [];

        foreach($parameters as $param){
          $dependencyClass =  $param->getType()->getName();

          //Recursive 
         $dependencies[] = $this->get($dependencyClass);


        }
     
        return $reflector->newInstanceArgs($dependencies);

    }



}


//use the container 

$container = new SimpleContainer();

//Not using the Manual example new logger , Using container its automatic injection 

$userService = $container->get(UserService::class);
$userService->createUser("Zeej");



?>