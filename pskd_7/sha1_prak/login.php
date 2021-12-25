<?php
session_start();
require "ceklog.php";
if (isset($_SESSION["login"])) {
    header("Location: dashboard.php");
    exit;
  } 

?>

<!doctype html>
<html lang="en">
<form method="get">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <title>LOGIN</title>
    </head>

    <body>
        <div class="judul">
        <center><h1>Login</h1></center>
        </div>

    <style type="text/css">
    
    .login {
        margin-top: 50px;
        margin-left: 480px;
        width: 400px;
        padding: 10px;
        border: 1px solid #ccc;
        background: grey;
    }
    input[type=username], input[type=password] {
        margin: 5px auto;
        width: 100%;
        padding: 10px;
    }
    input[type=submit] {
        margin: 5px auto;
        float: right;
        padding: 5px;
        width: 90px;
        border: 1px solid #fff;
        color: #fff;
        background: red;
        cursor: pointer;
    }
</style>
    <div class="login">
        <div class="mb-3">
            <label for="masukemail" class="form-label">Username</label>
            <input type="text" class="form-control" id="mskuser" name="username" placeholder="masukkan username">
        </div>
        <div class="mb-3">
            <label for="mskpass" class="form-label">Password</label>
            <input type="password" class="form-control" id="mskpass" name="password" placeholder="masukkan password" >
        </div>
        <div class="form-group">
            <input type="submit" name="login" value="LOGIN" class="btn btn-primary btn-block">
        </div>
        <div class="card-footer text-center py-3">
            <div class="small"><a href="daftar.php">Need an account? Sign up!</a></div>
        </div>
    </div>
    <!-- <script language="javascript" src="./star.js"></script> -->
    </body>

</html>