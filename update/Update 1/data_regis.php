<?php
include 'koneksi.php';

    if(isset($_POST['submit'])){
        // $id_user = $_POST['id_user'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $nin = $_POST['nin'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $tanggallahir = $_POST['tanggallahir'];
        $gender = $_POST['gender'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $status = 'Unbooked Yet';

        $upper = preg_match('@[A-Z]@', $password);
        $lower = preg_match('@[a-z]@', $password);
        $angka = preg_match('@[A-Z]@', $password);

        if(!$upper || !$lower || !$angka || strlen($password) < 8){
            echo("<script> alert('Password harus diberi huruf kapital dan angka! (8 digit)'); </script>");
        }

        else{
            if($password != $password2){
                echo "<script> alert('password tidak sama'); </script>";
            }
            else{
                $user = mysqli_query($koneksi, "SELECT * FROM registrasi WHERE nin = '$nin'");

                if (mysqli_num_rows($user) == 0){
                    $targetFoto = 'images/foto/' . $_FILES['foto']['name'];
                    // $targetIjazah = 'img/' . $_FILES['ijazah']['name'];
                    
                    $tempFoto = $_FILES['foto']['tmp_name'];
                    // $tempIjazah = $_FILES['ijazah']['tmp_name'];

                    move_uploaded_file($tempFoto, $targetFoto);
                    // move_uploaded_file($tempIjazah, $targetIjazah);

                    $query = mysqli_query($koneksi, "INSERT INTO registrasi VALUES ('$username', '$email', '$nama', '$nin','$password', '$tanggallahir', '$gender', '$alamat', '$telepon', '$targetFoto', '$status')");

                    if ($query) {
                        echo "Data Added";
                        header("location: login.php");
                    }
                    else{
                        echo "error";
                    }
                }
                else{
                    echo "<script>alert('Maaf username : " .$username ." telah terdaftar')</script>";
                }
            }
        }

        }
   

   
?>