<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>PHP Basic 1 - Input &amp; Output</title>
</head>

<body>
    <h2>Form Input Informasi</h2>
    <form method="POST" action="">
        <label>Nama:</label><br />
        <input type="text" name="nama" required /><br /><br />
        <label>Email:</label><br />
        <input type="text" name="email" required /><br /><br />
        <input type="submit" name="submit" value="Submit" />
    </form>
    <br />
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        echo "<h3>Informasi yang dimasukkan:</h3>";
        echo "Nama: " . $nama . "<br/>";
        echo "Email: " . $email . "<br/>";
    }
    ?>
</body>

</html>