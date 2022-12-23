<?php
include 'koneksi.php';
    $nin = $_GET['nin'];
    $id = $_GET['id'];
    $result = mysqli_query($koneksi, "UPDATE registrasi SET status='Req Checkin' WHERE nin = $nin");
    $result2 = mysqli_query($koneksi, "UPDATE transaksi SET status='Req Checkin' WHERE id_transaksi = $id");
        if ($result and $result2){
            echo "<script>alert('berhasil')</script>";
            header("location: reservation.php");
        }
?>