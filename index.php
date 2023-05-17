<?php 

$arrayLetter = ["abcdefghijklmnopqrstuvwxyz"];
$arraySpecialCharacters = ["!?&%$<>^+-*/()[]{}@#_="];

$passLen = intval($_GET["passLen"]) ?? 0;

var_dump($passLen);

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
          <label for="passLen" class="text-white text-start">Lunghezza della password</label>
          <div class="pg-input-container d-flex mt-3">
            <input type="number" class="form-control w-25 me-3 bg-transparent text-white" min="5" max="20" name="passLen" id="passLen" placeholder="5">
            <button type="submit" class="btn btn-success">Genera</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>