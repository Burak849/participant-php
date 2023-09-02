
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kullaıcı Girişi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    
  <?php 
  require 'navbar.php';
  require 'background.php'; 

  ?>
    
  <div class="container mt-5">
    <div class="row justify-content-center ">
      <div class="col-md-6 ">
        <div class="card">
          <div class="card-body ">
            <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
              Giriş Yap
            </h1> 
            <form style="text-align:center" method='POST'>

<p>Eposta: <input type='text' name='email'><a></p><br>
<p>Sifre: <input type='text`' name='parola'></a></p><br>
<p><input type='submit' value='Giris Yap'></p>

            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>





  <?php
session_start();

if (isset($_POST['email']) && isset($_POST['parola'])) {
    require_once 'connection.php';

    $email  = $_POST['email'];
    $parola = $_POST['parola'];

    $sql = "SELECT * FROM users WHERE email = :email AND parola = :parola";
    $SORGU = $DB->prepare($sql);

    $SORGU->bindParam(':email', $email);
    $SORGU->bindParam(':parola', $parola);
    $SORGU->execute();

    $CEVAP = $SORGU->fetchAll(PDO::FETCH_ASSOC);

    if (count($CEVAP) == 1) {
        echo "<h1>Giriş Başarılı</h1>";
        $_SESSION['Giris_yapti'] = 1;
        $_SESSION['email'] = $CEVAP[0]['email'];
        $_SESSION['parola'] = $CEVAP[0]['parola'];
        header("location: home.php");
        die();
    } else {
        echo "<h1>Giriş Başarısız</h1>";
    }
}
?>


?>
<?php require_once 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>