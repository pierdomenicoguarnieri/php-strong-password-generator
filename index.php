<?php 

include __DIR__ . "/assets/partials/functions.php";

$letters = "abcdefghijklmnopqrstuvwxyz";
$specialCharacters = "!?&%$<>^+-*/()[]{}@#_=";

if(isset($_GET['passLen'])){
  session_start();
  // Valorizzo all'interno della session una variabile password con il valore $password
  $_SESSION['password'] = getPassword($_GET['passLen'], $letters, $specialCharacters);
  // L'header rimanda alla pagina di landing, invece il form mi riporta all'index stesso.
  header('Location: ./assets/partials/landing.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>  
    <title>Strong Password Generator</title>
  </head>
  <body>
    <div class="pg-main-wrapper vh-100 w-100 bg-dark py-5 text-center">
      <h1 class="text-white">Benvenuto in Password Generator!</h1>
      <div class="container mt-5">
        <form action="./index.php" method="GET" class="form-control d-flex flex-column bg-transparent shadow">
          <label for="passLen" class="text-white text-start">Lunghezza della password (da 5 a 30 caratteri)</label>
          <div class="pg-input-container d-flex mt-3">
            <input type="number" class="form-control w-25 me-3 bg-transparent text-white" min="5" max="30" name="passLen" id="passLen" placeholder="5">
            <button type="submit" class="btn btn-success">Genera</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>