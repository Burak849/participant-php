<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bakkal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class='row text-center'>
    <?php
    require_once 'navbar.php';
    require_once 'background.php'; 
    require_once('connection.php');

    if(isset($_POST['name'])){
        ///////////////////////////////////////
        /////////////////////////////////////// GÜNCELLEME İŞLEMİ
        ///////////////////////////////////////
        // echo "<pre>"; print_r($_POST);
        // echo "<pre>"; print_r($_GET);

        $name  = $_POST['name'];
        $email = $_POST['email'];
        $id    = $_GET['id'];

        $sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
        $SORGU = $DB->prepare($sql);

        $SORGU->bindParam(':name',  $name);
        $SORGU->bindParam(':email', $email);
        $SORGU->bindParam(':id',    $id);

        // die(date("H:i:s"));
        $SORGU->execute();
        echo "User updated";
    }

    $id    = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = :id";
    $SORGU = $DB->prepare($sql);

    $SORGU->bindParam(':id', $id);

    $SORGU->execute();

    $users = $SORGU->fetchAll(PDO::FETCH_ASSOC);
    $user  = $users[0];

    // echo "<pre>"; print_r($users);
?>

<form style="text-align: center" method="post">
<div class="container mt-5">
    <div class="row justify-content-center ">
      <div class="col-md-6 ">
        <div class="card">
          <div class="card-body ">
            <br>
            <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
            KAYIT GÜNCELLEME
            </h1> 
            <form style="text-align:center" method='POST'>

<p>Kullanıcı Adı:   <input type='text' name='name' value='<?php echo $user['name'];?>'><a></p><br>
<p>Kullanıcı Eposta:<input type='text' name='email'value='<?php echo $user['name'];?>'></a></p><br>
<p><input type='submit' value='Kayıt Ekle'></p>

</form>
<br>
<p><a class="btn btn-primary" href='listing.php' role="button">Listeye Dön</a></p>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</div>  

</body>
</html>
