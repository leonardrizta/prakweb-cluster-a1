<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1 Praktikum Pemrograman Web - PHP - 118140062 - Leonard Rizta Anugerah Perdana</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="ml-4 mt-2 mb-4 mr-4">
        <h2>Menghitung Operasi Operator</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="value1">Variabel pertama :</label>
                <input name="value1" id="value1" type="number" class="form-control" step="any" required>
            </div>
            <div class="form-group">
                <label for="value2">Variabel kedua :</label>
                <input name="value2" id="value2" type="number" class="form-control" step="any" required>
            </div>
            <input type="submit" name="submit" value="Hitung" class="btn btn-primary mb-2"/>
        </form>

        <?php
            if(isset($_POST['submit'])){
                $value1 = $_POST['value1'];
                $value2 = $_POST['value2'];
                echo "bilangan 1 = " . $value1 . "<br>";
                echo "bilangan 2 = " . $value2 . "<br><br>";
                echo "Berikut merupakan hasil dari setiap operasi" . "<br><br>";

                echo "PENJUMLAHAN" . "<br>";
                echo "Operator : +" . "<br>";
                echo "Hasil : " . ($value1 + $value2) . "<br><br>";

                echo "PENGURANGAN" . "<br>";
                echo "Operator : -" . "<br>";
                echo "Hasil : " . ($value1 - $value2) . "<br><br>";

                echo "PERKALIAN" . "<br>";
                echo "Operator : *" . "<br>";
                echo "Hasil : " . ($value1 * $value2) . "<br><br>";

                echo "PEMBAGIAN" . "<br>";
                echo "Operator : /" . "<br>";
                echo "Hasil : " . ($value1 / $value2) . "<br><br>";

                echo "MODULUS" . "<br>";
                echo "Operator : %" . "<br>";
                echo "Hasil : " . ($value1 % $value2) . "<br><br>";
            }
        ?>
    </div>
</body>
</html>