<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Deneme</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="index.php"><strong><i>KULLANICI LİSTESİ</i></strong></a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24">  

  </a>
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<div class="container text-center">
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Güncelle</th>
        <th>Sil</th>
      </tr>
    </thead>
    <tbody>
      <?php
      require 'connection.php';
      
      $query = $DB->prepare("SELECT id, name, email FROM users");
      $query->execute();
      $users = $query->fetchAll(PDO::FETCH_ASSOC);
      
      foreach ($users as $user) {
        echo "<tr>";
        echo "<td>{$user['id']}</td>";
        echo "<td>{$user['name']}</td>";
        echo "<td>{$user['email']}</td>";
        echo "<td><a class='btn btn-success' href='update.php?id={$user['id']}'>Güncelle</a></td>";
        echo "<td><a class='btn btn-danger' href='delete.php?id={$user['id']}'>Sil</a></td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
  <a class="btn btn-primary bg-primary" href="index.php"><strong>ANASAYFAYA DÖN</strong></a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
