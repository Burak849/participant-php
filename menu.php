<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yemek Menusu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }
        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }
        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }
        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }
        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
        .textarea {
            width: 100%;
            height: 200px; /* Textarea boyutunu artırabilirsiniz */
        }
    </style>
</head>
<body>
    <?php
    require 'login.control.php';
    require 'navbar.php';
    require_once 'connection.php';
    require_once 'background.php';

    if (isset($_POST['gun1_form'])) {
        $sql = "UPDATE yemekmenusu SET 
            gun1 = :gun1_form,
            gun2 = :gun2_form,
            gun3 = :gun3_form,
            gun4 = :gun4_form,
            gun5 = :gun5_form,
            gun6 = :gun6_form,
            gun7 = :gun7_form
            WHERE id = 1";
        $SORGU = $DB->prepare($sql);

        $SORGU->bindParam(':gun1_form',  $_POST['gun1_form']);
        $SORGU->bindParam(':gun2_form',  $_POST['gun2_form']);
        $SORGU->bindParam(':gun3_form',  $_POST['gun3_form']);
        $SORGU->bindParam(':gun4_form',  $_POST['gun4_form']);
        $SORGU->bindParam(':gun5_form',  $_POST['gun5_form']);
        $SORGU->bindParam(':gun6_form',  $_POST['gun6_form']);
        $SORGU->bindParam(':gun7_form',  $_POST['gun7_form']);

        $SORGU->execute();
    }

    $SORGU = $DB->prepare("SELECT * FROM yemekmenusu WHERE id = 1");
    $SORGU->execute();
    $MENU = $SORGU->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <br><br>
    <form method="POST">
        <table class="styled-table table-striped mx-auto">
            <thead>
                <tr class="text-center">
                    <th>Pazartesi</th>
                    <th>Salı</th>
                    <th>Çarşamba</th>
                    <th>Perşembe</th>
                    <th>Cuma</th>
                    <th>Cumartesi</th>
                    <th>Pazar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><textarea name='gun1_form' class="textarea text-center"><?php echo $MENU[0]['gun1'] ?></textarea></td>
                    <td><textarea name='gun2_form' class="textarea text-center"><?php echo $MENU[0]['gun2'] ?></textarea></td>
                    <td><textarea name='gun3_form' class="textarea text-center"><?php echo $MENU[0]['gun3'] ?></textarea></td>
                    <td><textarea name='gun4_form' class="textarea text-center"><?php echo $MENU[0]['gun4'] ?></textarea></td>
                    <td><textarea name='gun5_form' class="textarea text-center"><?php echo $MENU[0]['gun5'] ?></textarea></td>
                    <td><textarea name='gun6_form' class="textarea text-center"><?php echo $MENU[0]['gun6'] ?></textarea></td>
                    <td><textarea name='gun7_form' class="textarea text-center"><?php echo $MENU[0]['gun7'] ?></textarea></td>
                </tr>
            </tbody>
        </table>
        
    </form>

    <div class='text-center'>
        <input type="submit" class="btn btn-warning" value="Kaydet">
    </div>

    <?php require_once 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
