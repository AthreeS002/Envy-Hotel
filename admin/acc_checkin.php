<?php
include '../koneksi.php';
    $id = $_GET['id'];
    $nama_kamar_query = mysqli_query($koneksi, "SELECT * FROM transaksi where id_transaksi = $id");
    while($item=mysqli_fetch_array($nama_kamar_query)){
        $nama_kamar = $item['nama_kamar'];
    };
    $nin = $_GET['nin'];
    // echo $nin.$id.$nama_kamar;

    $result = mysqli_query($koneksi, "UPDATE registrasi SET status='Checkin' WHERE nin = $nin");
    $result2 = mysqli_query($koneksi, "UPDATE transaksi SET status='Checkin' WHERE id_transaksi = $id");
    $result3 = mysqli_query($koneksi, "UPDATE kamar SET status='Checkin' WHERE nama_kamar = '$nama_kamar'");
        if ($result and $result2 and $result3){
            echo "<script>alert('berhasil')</script>";
            header("location: transaksi.php");
        }
?>