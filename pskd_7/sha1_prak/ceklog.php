<?php
require 'koneksi.php';
if (isset($_GET['login'])){
    $username = $_GET["username"];
    $password = $_GET["password"];
    $password_sha1 = sha1($password);

    $result = mysqli_query($conn,"SELECT `username`, `email`, `password`, `nama` FROM `prak7` WHERE username = '$username' and password = '$password_sha1'");
    
    if (mysqli_num_rows($result)>0){
       
        echo'
        <script>
            alert("Selamat Datang");
            window.location.href="dashboard.php";
        </script>';
    }else{
           
            echo'
            <script>
                alert("Anda Belum Punya Akun");
                window.location.href="daftar.php";
            </script>';
     }
    }
?>