<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Yemekhane</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
 
    .bg-image {
      background-image: url('https://e1.pxfuel.com/desktop-wallpaper/395/382/desktop-wallpaper-lycee-anime-school-lunchroom.jpg');
      background-size: cover;
      background-position: center;
      height: 100vh; 
    }
    .center-card {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #a0a0a0;
      backdrop-filter: blur(10px); /* Arka planı bulanıklaştırmak için */
      border-radius: 40px;
    }
  </style>
</head>
<?php require_once 'navbar.php';
  ?>
  <body>
    
  <div class="center-card">
    <div class="card" style="width: 30rem;">
      <img src="https://w0.peakpx.com/wallpaper/834/689/HD-wallpaper-yemek-bonfile-coffee-food-good-morning-scenes.jpg" class="card-img-top" alt="Card Image">
      <div class="card-body text-center">
        <h5 class="card-title "><strong>Yemekhane Üyeliği</strong></h5>
        <p class="card-text ">Yemekhanemize kayıtlı olan üyeliğiniz ile giriş yaparak yemek listeleri ve birçok erişimi sağlayabilirsiniz.</p>
        <a href="login.php" class="btn btn-primary">Giriş Yap</a>
        <a href="register.php" class="btn btn-primary">Kayıt Ol</a>
      </div>
    </div>
  </div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
