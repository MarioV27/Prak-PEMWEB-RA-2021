<?php
    $bil1 = @$_POST['bil1'];
    $bil2 = @$_POST['bil2'];
    $hasil = @$_POST['hasil'];
    $hasil1 = @$_POST['hasil1'];
    $hasil2 = @$_POST['hasil2'];
    $hasil3 = @$_POST['hasil3'];
    $hasil4 = @$_POST['hasil4'];
    //jika tombol + di klik
    if(isset($_POST['output']))
    {
        $hasil = $bil1 + $bil2;
        $hasil1 = $bil1 - $bil2;
        $hasil2 = $bil1 * $bil2;
        $hasil3 = $bil1 / $bil2;
        $hasil4 = $bil1 % $bil2;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>No1</title>
</head>

<body>
    <form method="post">
    <label>Bilangan 1</label>
    <input type="number" name="bil1" value="<?=$bil1?>"><br>
    <label>Bilangan 2</label>
    <input type="number" name="bil2" value="<?=$bil2?>"><br>
    <input type="submit" name="output"><br>
    <?php
    echo "Penjumlahan [+]<br>", "Hasil : ", $hasil;
    echo "<br><br>Pengurangan [-]<br>", "Hasil : ", $hasil1;
    echo "<br><br>Perkalian [*]<br>", "Hasil : ", $hasil2;
    echo "<br><br>Pembagian [/]<br>", "Hasil : ", $hasil3;
    echo "<br><br>Modulus [%]<br>", "Hasil : ", $hasil4;
    ?>
    </form>
</body>
</html>