<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KAYIT OLMA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    


<?php require_once 'navbar.php';
require_once 'background.php'; 
?>

<form style="text-align: center" method="post">
<div class="container mt-5">
    <div class="row justify-content-center ">
      <div class="col-md-6 ">
        <div class="card">
          <div class="card-body ">
            <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
              Kayıt Sil
            </h1> 
            <form style="text-align:center" method='POST'>

<p>Silinecek ID:   <input type='text' name='sil_id'><a></p><br>
<p>Eposta:         <input type='password' name='parola'></a></p><br>
<p><input type='submit' value='Sil'></p>

</form>


<?php
//!KAYIT SILME
if ( isset($_POST['sil_id'])){
require "connection.php";    
$id    = $_POST['sil_id'];

$sql = "DELETE FROM users WHERE id = :id";
$SORGU = $DB->prepare($sql);

$SORGU->bindParam(':id', $id);

$SORGU->execute();
echo "Kullanıcı Silindi";}
?>
<a href="index.php"></a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
