<?php
require 'koneksi.php';


$id = $_GET['id'] ?? '';


if (empty($id) || !ctype_digit($id)) {
    die('<p style="color: red; text-align: center; margin-top: 50px;">!! ID TIDAK ADA !!</p>');
}

$delete = mysqli_prepare($conn, "DELETE FROM film WHERE id = ?");
mysqli_stmt_bind_param($delete, "i", $id);
mysqli_stmt_execute($delete);


if (mysqli_stmt_affected_rows($delete) == 1) {
    echo '<p style="color: green; text-align: center; margin-top: 50px;">data berhasil dihapus</p>';
} else {
    echo '<p style="color: red; text-align: center; margin-top: 50px;">data tidak ditemukan</p>';
}

echo '<p style="text-align: center; margin-top: 20px;"><a href="index.php">Kembali</a></p>';
?>