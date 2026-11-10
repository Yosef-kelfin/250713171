<?php
function infoKuota($kuota)
{
    if ($kuota === '1 GB / 3 hari') {
        return "1GB / 3 hari";
    } elseif ($kuota === '2 GB / 5 hari') {
        return "2GB / 5 hari";
    } elseif ($kuota === '5 GB / 7 hari') {
        return "5GB / 7 hari";
    }
    return $kuota;
}

function dapatDiskon($totalBayar)
{
    if ($totalBayar >= 25000) {
        return 0.20;
    }
    return 0;
}

function totalHarga($diskon, $totalBayar)
{
    return $totalBayar - ($totalBayar * $diskon);
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Belanja Pulsa dan Paket Data</title>
</head>

<body>
    <h2>Belanja Pulsa dan Paket Data</h2>
    <h3>Tersedia</h3>
    <form method="POST" action="">
        <label>Pulsa:</label><br />
        <select name="pulsa">
            <option value="">--Pilih Pulsa--</option>
            <option value="5000" <?php echo (isset($_POST['pulsa']) && $_POST['pulsa'] == '5000') ? 'selected' : ''; ?>>
                5000</option>
            <option value="10000" <?php echo (isset($_POST['pulsa']) && $_POST['pulsa'] == '10000') ? 'selected' : ''; ?>>
                10000</option>
            <option value="20000" <?php echo (isset($_POST['pulsa']) && $_POST['pulsa'] == '20000') ? 'selected' : ''; ?>>
                20000</option>
        </select><br /><br />

        <label>Paket Data:</label><br />
        <select name="paket">
            <option value="">--Pilih Paket Data--</option>
            <option value="1 GB / 3 hari" <?php echo (isset($_POST['paket']) && $_POST['paket'] == '1 GB / 3 hari') ? 'selected' : ''; ?>>1 GB / 3 hari</option>
            <option value="2 GB / 5 hari" <?php echo (isset($_POST['paket']) && $_POST['paket'] == '2 GB / 5 hari') ? 'selected' : ''; ?>>2 GB / 5 hari</option>
            <option value="5 GB / 7 hari" <?php echo (isset($_POST['paket']) && $_POST['paket'] == '5 GB / 7 hari') ? 'selected' : ''; ?>>5 GB / 7 hari</option>
        </select><br /><br />

        <input type="submit" name="submit" value="Beli" />
    </form>
    <br />
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pulsa = isset($_POST['pulsa']) ? trim($_POST['pulsa']) : '';
        $paket = isset($_POST['paket']) ? trim($_POST['paket']) : '';

        $errors = [];
        if (empty($pulsa) || empty($paket)) {
            $errors[] = "Pulsa dan paket data tidak boleh kosong.";
        }

        if (!empty($errors)) {
            echo "<div style='color: red;'>";
            foreach ($errors as $err) {
                echo "<p>$err</p>";
            }
            echo "</div>";
        } else {
            $hargaPulsa = 0;
            if ($pulsa == '5000')
                $hargaPulsa = 6000;
            elseif ($pulsa == '10000')
                $hargaPulsa = 11000;
            elseif ($pulsa == '20000')
                $hargaPulsa = 21000;

            $hargaPaket = 0;
            if ($paket == '1 GB / 3 hari')
                $hargaPaket = 10000;
            elseif ($paket == '2 GB / 5 hari')
                $hargaPaket = 15000;
            elseif ($paket == '5 GB / 7 hari')
                $hargaPaket = 20000;

            $totalBayar = $hargaPulsa + $hargaPaket;
            $diskon = dapatDiskon($totalBayar);
            $total = totalHarga($diskon, $totalBayar);
            $kuotaText = infoKuota($paket);

            echo "<h3>Informasi Belanja</h3>";
            echo "Pulsa: " . htmlspecialchars($pulsa) . " (Harga: Rp " . number_format($hargaPulsa, 0, ',', '.') . ")<br/>";
            echo "Paket Data: " . htmlspecialchars($kuotaText) . " (Harga: Rp " . number_format($hargaPaket, 0, ',', '.') . ")<br/>";
            echo "Total Harga: Rp " . number_format($total, 0, ',', '.') . "<br/>";
            echo "Diskon: " . ($diskon * 100) . "%<br/>";

            if ($diskon == 0) {
                echo "<p>Maaf tidak ada diskon yang diberikan.</p>";
            } else {
                echo "<p>Selamat! Anda mendapatkan diskon " . htmlspecialchars($diskon * 100) . "%.</p>";
            }
        }
    } else {
        echo "<p>Silahkan pilih produk yang ingin dibeli.</p>";
    }
    ?>
    <p><a href="index.php">Kembali ke Menu</a></p>
</body>

</html>