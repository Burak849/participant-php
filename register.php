<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KAYIT OLMA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
  <?php 
  require 'navbar.php';
  require_once 'background.php' ;


  ?>

  <div class="container mt-5">
    <div class="row justify-content-center ">
      <div class="col-md-6 ">
        <div class="card">
          <div class="card-body ">
            <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
              Hesap Oluştur
            </h1> 
            <form method="POST" class="text-center space-y-4 md:space-y-6">
              <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Resim yükle</label>
              <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" aria-describedby="file_input_help" id="file_input" type="file"/>
              <p class="mt-1 text-sm text-gray-500" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
              <div>
                <label htmlFor="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input type="email" name="email_form" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="E-mailinizi giriniz" required="" />
              </div>
              <div>
                <label htmlFor="text" class="block mb-2 text-sm font-medium text-gray-900">Kullanıcı Adı</label>
                <input type="text" name="username" id="username" placeholder="Kullanıcı Adınızı giriniz" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="" />
              </div>
              <div>
                <label htmlFor="text" class="block mb-2 text-sm font-medium text-gray-900">Şifre</label>
                <input type="text" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Parolanızı giriniz" required="" />
              </div>
              <div>
                <label htmlFor="text" class="block mb-2 text-sm font-medium text-gray-900">Şifre tekrarı</label>
                <input type="text" name="password_confirmation" id="confirm-password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Parola Tekrarı" required="" />
              </div>
              <button type="submit" class="w-full text-dark font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-sky-400 mb-5"><strong>Kayıt Ol</strong></button>
              <a class="text-xs pt-5" href="login.php">Hesabınız varsa giriş yapın</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  if (isset($_POST['email_form'])) {
    //! KAYIT EKLEME
    require "connection.php";
    $sql = "INSERT INTO users (name, parola, parolatekrari, email) VALUES (:username, :password, :password_confirmation, :email_form)";
    $SORGU = $DB->prepare($sql);
    $SORGU->bindParam(':username', $_POST['username']);
    $SORGU->bindParam(':password', $_POST['password']);
    $SORGU->bindParam(':password_confirmation', $_POST['password_confirmation']);
    $SORGU->bindParam(':email_form',  $_POST['email_form']);
    $SORGU->execute();
    echo "Kullaıcı Eklendi"; 
  }
  ?>
<?php require_once 'footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
