<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Pendaftaran Akun</title>
</head>

<body>
    <h2>Pendaftaran Akun</h2>
    <form method="POST" action="">
        <label>Nama:</label><br />
        <input type="text" name="nama"
            value="<?php echo isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : ''; ?>" /><br /><br />
        <label>Telepon:</label><br />
        <input type="text" name="telepon"
            value="<?php echo isset($_POST['telepon']) ? htmlspecialchars($_POST['telepon']) : ''; ?>" /><br /><br />
        <label>Verifikasi:</label><br />
        <select name="verifikasi">
            <option value="">--Pilih Verifikasi--</option>
            <option value="WhatsApp" <?php echo (isset($_POST['verifikasi']) && $_POST['verifikasi'] == 'WhatsApp') ? 'selected' : ''; ?>>WhatsApp</option>
            <option value="SMS" <?php echo (isset($_POST['verifikasi']) && $_POST['verifikasi'] == 'SMS') ? 'selected' : ''; ?>>SMS</option>
        </select><br /><br />
        <input type="submit" name="submit" value="Submit" />
    </form>
    <br />
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = trim($_POST['nama']);
        $tlp = trim($_POST['telepon']);
        $verif = isset($_POST['verifikasi']) ? trim($_POST['verifikasi']) : '';

        $errors = [];

        if (empty($nama) || empty($tlp) || empty($verif)) {
            $errors[] = "Semua kolom (nama, telepon, verifikasi) harus diisi.";
        } else {
            if (!preg_match("/^[a-zA-Z\s]+$/", $nama)) {
                $errors[] = "Nama hanya boleh mengandung huruf dan spasi.";
            }
            if (!preg_match("/^(\+62|08)[0-9]{9,11}$/", $tlp)) {
                $errors[] = "Telepon harus diawali +62 atau 08, hanya angka, dan 9 sampai 11 digit setelah prefix.";
            }
        }

        if (!empty($errors)) {
            echo "<div style='color: red;'>";
            foreach ($errors as $err) {
                echo "<p>$err</p>";
            }
            echo "</div>";
        } else {
            $lokasi = ($verif === 'WhatsApp') ? "WhatsApp" : "SMS";
            echo "<h3>Informasi Pendaftaran</h3>";
            echo "Nama: " . htmlspecialchars($nama) . "<br/>";
            echo "Telepon: " . htmlspecialchars($tlp) . "<br/>";
            echo "Verifikasi Kode OTP: " . htmlspecialchars($verif) . "<br/>";
            echo "<p>Pendaftaran akun Anda terkirim. Silahkan mengecek " . htmlspecialchars($lokasi) . " " . htmlspecialchars($tlp) . " untuk mendapatkan kode OTP verifikasi.</p>";
        }
    } else {
        echo "<p>Silahkan lengkapi formulir di atas.</p>";
    }
    ?>
    <p><a href="index.php">Kembali ke Menu</a></p>
</body>

</html>