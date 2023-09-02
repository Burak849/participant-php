<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Bootstrap Footer</title>
</head>
<body>
<style>
        /* Özel CSS stilleri */
        body {
            background-color: #f8f9fa;
            padding-bottom: 70px; /* Footer'in içeriğin üzerine gelmemesi için sayfa altına bir yedek boşluk bırakır */
        }

        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
        }

        .footer a {
            color: #ffffff;
        }
    </style>
  <br><br><br>
    <footer class="footer">
        <div class="container">
            
            <div class="row">
                <div class="col-md-6">
                    <h3>İletişim Bilgileri</h3><hr>
                    <p>Adres: 1234 Örnek Sokak, Örnek Şehir</p>
                    <p>Telefon: (123) 456-7890</p>
                    <p>E-posta: info@example.com</p>
                </div>
                    <div class="col-md-6">
                        <h3>Hızlı Linkler</h3>
                        <hr>
                        <ul class="list-unstyled">
                        <li><a href="about.php" >Hakkımızda</a></li>
                        <li><a href="contact.php">İletişim</a></li>
                    </ul>
                    </div>
                    <a class="navbar-brand mx-auto">
                        <a class="navbar-brand text-end" href="index.php"><strong>BreadHane</strong>
                        <img src="media/icon.png" alt="Bootstrap" width="35" height="35"></a>
    </a>
            </div>
        </div>
    </footer>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
