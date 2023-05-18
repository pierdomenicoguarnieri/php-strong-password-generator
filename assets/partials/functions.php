<?php

function getPassword($form, $letters, $specialCharacters){

  $password = "";

  if (isset($_GET["passLen"])){
    $passLen = intval($_GET["passLen"]);
    while(strlen($password) < $passLen){
      
      $randCase = rand(1,4);
  
      switch ($randCase) {
        case 1:
          $password .= $letters[rand(0, strlen($letters) - 1)];
          break;
  
        case 2:
          $password .= strtoupper($letters[rand(0, strlen($letters) - 1)]);
          break;
        
        case 3:
          $password .= $specialCharacters[rand(0, strlen($specialCharacters) - 1)];
          break;
  
        case 4:
          $password .= rand(0,9);
          break;
        
        default:
          break;
      }
    }
  }

  return $password;
  
}