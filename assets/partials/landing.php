<?php 

session_start();
if(isset($_SESSION['password'])){
  $password = $_SESSION['password'];
}else{
  header('Location: ../../index.php');
}

if(isset($_POST['newPass'])){
  header('Location: ./destroySession.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>  
    <title>Strong Password Generator Output</title>
  </head>
  <body>
    <div class="pg-main-wrapper vh-100 w-100 bg-dark py-5 text-center text-white">
      <div class="container mt-5">
        <h1>La tua password è:</h1>
        <span><?php echo $password; ?></span>

        <form action="./landing.php" class="form-control bg-transparent border-0 mt-4" method="POST">
          <button type="submit" class="btn btn-danger" name="newPass">Genera una nuova password</button>
        </form>
      </div>
    </div>
  </body>
</html>