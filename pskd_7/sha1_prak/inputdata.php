<?php
require 'koneksi.php';
global $conn;
if(isset($_POST['daftar'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_sha1 = sha1($password);
    $email = $_POST["email"];
    $nama = $_POST["nama"];

    $user_name = mysqli_query($conn, "SELECT username FROM prak7
                            WHERE username = '$username'");
    if (mysqli_fetch_assoc($user_name)) {
        echo "
        <script>
            alert('username sudah terdaftar');
        </script>
        ";
        return false;
    }
    mysqli_query($conn, "INSERT INTO prak7 VALUES ('$username', 
    '$email', '$password_sha1', '$nama')");
    
}

?>