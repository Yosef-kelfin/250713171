<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Hasil Perhitungan</title>
</head>

<body>
    <h2>Hasil Perhitungan</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $a1 = trim($_POST['angka1']);
        $a2 = trim($_POST['angka2']);
        $op = $_POST['operasi'];

        if ($a1 === '' || $a2 === '' || !is_numeric($a1) || !is_numeric($a2)) {
            echo "<p style='color: red;'>Error: Pastikan semua kolom terisi angka dengan benar!</p>";
        } else {
            $num1 = floatval($a1);
            $num2 = floatval($a2);
            $hasil = 0;
            $valid = true;

            switch ($op) {
                case 'tambah':
                    $hasil = $num1 + $num2;
                    break;
                case 'kurang':
                    $hasil = $num1 - $num2;
                    break;
                case 'kali':
                    $hasil = $num1 * $num2;
                    break;
                case 'bagi':
                    if ($num2 == 0) {
                        echo "<p style='color: red;'>Error: Pembagian dengan nol tidak diperbolehkan!</p>";
                        $valid = false;
                    } else {
                        $hasil = $num1 / $num2;
                    }
                    break;
                default:
                    echo "<p style='color: red;'>Error: Operasi tidak valid!</p>";
                    $valid = false;
            }

            if ($valid) {
                echo "<p>Angka 1: $num1</p>";
                echo "<p>Angka 2: $num2</p>";
                echo "<p>Operasi: " . ucfirst($op) . "</p>";
                echo "<p><b>Hasil: $hasil</b></p>";
            }
        }
    } else {
        echo "<p>Silahkan akses melalui form.</p>";
    }
    ?>
    <p><a href="index.xhtml">Kembali</a></p>
</body>

</html>