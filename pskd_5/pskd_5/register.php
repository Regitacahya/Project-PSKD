<?php
	require 'koneksi.php';
    if (isset($_POST["registrasi"]))
	{
        if(daftar($_POST)>0)
		{
            echo "
            <script>
                alert('Registrasi success');
            </script>
             ";
             echo '<script>window.location="index.php"</script>';
        }
        else {
            echo mysqli_error($conn);
        }   
        
    }
    
	//untuk menampilkan hasil validasi jika ada input yang salah
    if(isset($_GET['error_msg'])){
		echo $_GET['error_msg'];
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
	<title>Register Mahasiswa</title>
</head>
<body>
	<h1>Formulir Register Akun</h1>
	<div style="color: dark grey">
	</div>
	<form method="POST" action="">
		<table cellpadding="10">
			<tr>
				<td><label for="nama">Nama Lengkap</label></td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" maxlength="255" required></td>
			</tr>
            <tr>
				<td><label for="username">Username</label></td>
				<td>:</td>
				<td><input type="username" name="username" size="100" maxlength="255" required></td>
			</tr>
			<tr>
				<td><label for="email">Email</label></td>
				<td>:</td>
				<td><input type="email" name="email" size="100" maxlength="255" required></td>
			</tr>
            <tr>
				<td><label for="alamat">Alamat</label></td>
				<td>:</td>
				<td><input type="alamat" name="alamat" size="100" maxlength="255" required></td>
			</tr>
            <tr>
				<td><label for="password">Password</label></td>
				<td>:</td>
				<td><input type="password" name="password" minlength="6" size="30" maxlength="255" required></td>
			</tr>
			<tr>
				<td><label for="re_password">Konfirmasi Ulang Password</label></td>
				<td>:</td>
				<td><input type="password" name="re_password" minlength="6" size="30" maxlength="255" required></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><button class="w-100 btn btn-lg btn-dark pb-3" type="submit" name="registrasi">Sign up</button></td>
			</tr>
		</table>
	</form>

</body>
</html>