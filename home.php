<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bakkal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <?php 
    require 'navbar.php'; 
    require 'background.php';
    ?>
    <br>
  <div class='row text-center'>
<p><a class="btn btn-primary" href="listing.php" role="button">Kayıtları Listele </a></p>
<p><a class="btn btn-primary" href="insert.php" role="button">Yeni Kullanıcı Ekle</a></p>
<p><a class="btn btn-primary" href="delete.php" role="button">Kullanıcı Sil</a></p>
<p><a class="btn btn-primary" href="update.php" role="button">Kullanıcı Güncelle</a></p>
<p><a class="btn btn-primary" href="index.php" role="button">CIKIS YAP</a></p>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</div>  
<br><br><br>



<?php require_once 'footer.php'; ?>
</body>
</html>





