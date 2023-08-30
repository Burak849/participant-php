<h1>giris ekrani</h1>


<form method='POST'>

<p>Eposta <input type='text' name='email'><a></p><br>
<p>Sifre <input type='password' name='parola'></a></p><br>
<p><input type='submit' value='Giris Yap'></p>

</form>
<?php

if (isset($_POST['email']))
{
    
require_once 'connection.php';

    $sql = "SELECT * FROM users WHERE email = :email AND parola = :parola";
    $SORGU = $DB->prepare($sql);    

    $SORGU->bindParam(':email', $_POST['email']);
    $SORGU->bindParam(':parola', $_POST['parola']);
    $SORGU->execute();

    $CEVAP = $SORGU->fetchAll(PDO::FETCH_ASSOC);
    var_dump($CEVAP);
    echo "Gelen Cevap". count($CEVAP). "adet satirdan olusuyor";

    if (count($CEVAP) == 1){
        
        echo "<h1>Giris Basarili</h1>";
        @session_start();
        $_SESSION['Giris yapti'] = 1;
        $_SESSION['adi'] = $CEVAP[0]['name'];
        $_SESSION['id'] = $CEVAP[0]['id'];
        header("location: index.php");
        die();

    }
else{
    echo "<h1>Giris Basarisiz</h1>";
    //header("location: hata.php");
}
}
?>