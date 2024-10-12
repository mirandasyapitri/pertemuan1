<?php

$angka1 = $_POST['angka1']??0;
$angka2 = $_POST['angka2']??0;
$operator = $_POST['operator']??NULL;

$hasil = 0;

if(isset($_POST)) {

    if($operator == "+"){
        $hasil = $angka1 + $angka2;
    }

    if($operator == "-"){
        $hasil = $angka1 - $angka2;
    }

    if($operator == "*"){
        $hasil = $angka1 * $angka2;
    }

    if($operator == "/"){
        $hasil = $angka1 / $angka2;
    }



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <form action="kalkulator.php" method="post">
        <label for="angka1">Angka 1:</label>
        <input type="text" name="angka1" value="<?= $angka1 ?>">
        <br>
        <label for="angka2">Angka 2:</label>
        <input type="text" name="angka2" value="<?= $angka2 ?>">
        <br>
        <label for="operator">Operator:</label>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        <input type="submit" value="Hitung">
    </form>

    <h5>Hasil : <?php echo $hasil; ?></h5>
</body>
</html>