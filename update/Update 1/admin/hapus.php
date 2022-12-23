<?php
include '../koneksi.php';

$nin = $_GET['nin'];
$query =  mysqli_query($koneksi, "DELETE FROM registrasi WHERE nin='$nin'");
if ($query) {
?>
  <script>
    alert("Data Berhasil Dihapus");
    document.location = "tamu.php";
  </script>
<?php
} else {
?>
  <script>
    alert("Data Gagal Dihapus");
    history.back(self);
  </script>
<?php
}
?>