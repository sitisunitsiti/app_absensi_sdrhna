<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Absensi Siswa - SMKN 1 Kragilan</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body class="bg-info">

<div class="container">
        <div class="card p-5 col-md-4 mx-auto mt-5 f_login">
            <div class="t_form text-center">
                <h2>FORM LOGIN</h2>
                <h4>APP ABSENSI SISWA</h4>
                <hr class="col-md-5 mx-auto">
            </div>

            <form action="cek_login.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary col-md-12">Login</button>
            </form>
            <div class="fot_login text-center mt-5">
                <small>Login With</small><br>
                <hr class="col-md-3 mx-auto">

                <a href="#">Facebook</a> | <a href="#">Google</a>
            </div>
        </div>

    </div>

</body>
</html>