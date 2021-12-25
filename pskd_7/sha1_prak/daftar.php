<?php
require 'inputdata.php';
?>
<!doctype html>
<html lang="en">
<form method="post">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <title>WEBSITE</title>
    </head>

    <body>
        <center> <h1>REGISTER</h1></center>
               
        <style type="text/css">
            .daftar {
                margin-top: 50px;
                margin-left: 480px;
                width: 400px;
                padding: 10px;
                border: 1px bold #ccc;
                background: grey;
            }

            input[type=email],
            input[type=password] {
                margin: 5px auto;
                width: 100%;
                padding: 10px;
            }

            input[type=submit] {
                margin: 5px auto;
                float: right;
                padding: 5px;
                width: 90px;
                border: 1px bold #fff;
                color: #fff;
                background: red;
                cursor: pointer;
            }
            input[type=reset] {
                margin: 5px auto;
                float: right;
                padding: 5px;
                width: 90px;
                border: 1px bold #fff;
                color: #fff;
                background: blue;
                cursor: pointer;
            }
        </style>
        <div class="daftar">
            <div class="mb-3">
                <label for="mskuser" class="form-label">Username</label>
                <input type="text" class="form-control" id="mskuser" name="username" placeholder="masukkan username">
            </div>
            <div class="mb-3">
                <label for="masukpw" class="form-label">Password</label>
                <input type="password" class="form-control" id="masukpw" name="password" placeholder="masukkan password">
            </div>
            <div class="form-group">
                <label for="masukemail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="masukkan email">
            </div>
            <div class="form-group">
                <label for="masuknama" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="masukkan nama lengkap">
            </div>
            <div class="form-group">
                <input type="submit" name="daftar" value="DAFTAR" class="btn btn-primary btn-block">
            </div>
            <div class="form-group">
                <input type="reset" name="reset" value="RESET" class="btn btn-primary btn-block">
            </div>
            <div class="card-footer text-center py-3">
            <div class="small"><a href="login.php">Have an account? Login</a></div>
        </div>
        </div>
    </body>
</html>