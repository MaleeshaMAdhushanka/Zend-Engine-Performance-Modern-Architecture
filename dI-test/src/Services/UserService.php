<?php

namespace App\Services;

class UserService {


//using the constructor injection to inject the Logger dependency
   
  public function __construct(private Logger $logger){}

   public function createUser(string $name) {

    $this->logger->log("User {$name} created successfully!");

   }

}


?>