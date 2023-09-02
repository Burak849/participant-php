<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Deneme</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<?php 
require_once 'navbar.php';

?>
<br>
<div class="container text-center">
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Unvan</th>
        <th>Email</th>
        <th>Iletisim</th>
      </tr>
    </thead>
    <tbody>
      <?php
      require 'connection.php';
      
      $query = $DB->prepare("SELECT name, email, telefon, unvan FROM users");
      $query->execute();
      $users = $query->fetchAll(PDO::FETCH_ASSOC);
      
      foreach ($users as $user) {
        echo "<tr>";
        echo "<td>{$user['name']}</td>";
        echo "<td>{$user['unvan']}</td>";
        echo "<td>{$user['email']}</td>";
        echo "<td>{$user['telefon']}</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>