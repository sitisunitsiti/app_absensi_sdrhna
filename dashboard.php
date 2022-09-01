<?php
include "koneksi.php";

?>

<!DOCTYPE html>
<html>

<head>
	<title>Dashboard Halaman</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	l
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="card bg-info" style="height: 630px;">
					<ul class="nav flex-column mt-5 mx-auto">
						<li class="nav-item">
							<a class="nav-link active text-white fw-bold" aria-current="page" href="dashboard.php?page=dashboard">Dashboard</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white fw-bold" href="dashboard.php?page=datasekolah">Data Sekolah</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white fw-bold" href="dashboard.php?page=datasiswa">Data Siswa</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white fw-bold" href="dashboard.php?page=kehadiran">Kehadiran</a>
						</li>
						<li class="nav-item">

							<a class="nav-link text-white fw-bold" href="login.php">Logout</a>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="card p-3" style="height: 630px;">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mt-3">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Library</a></li>
							<li class="breadcrumb-item active" aria-current="page">Data</li>
						</ol>
					</nav>
					<div class="card p-2">

						<?php
						if (isset($_GET['page'])) {
							$page = $_GET['page'];

							switch ($page) {
								case 'dashboard':
									include "page/dashboard_home.php";
									break;
								case 'datasekolah':
									include "page/datasekolah.php";
									break;
								case 'datasiswa':
									include "page/datasiswa.php";
									break;
								case 'kehadiran':
									include "page/Kehadiran.php";
									break;
								case 'logout':
									include "page/logout.php";
									break;

								default:
									echo "<center><h3>Maaf Halaman Tidak ditemukan</h3></center>";
									break;
							}
						} else {
							include "page/dashboard_home.php";
						}
						?>

					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- jQUERY DAN JS -->
    <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>