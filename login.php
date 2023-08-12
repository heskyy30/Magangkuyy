<?php
session_start();
require 'backend/koneksi.php';

if(!isset($_SESSION['username'])){

} else {
    header('location:admin.php');
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekuname = mysqli_query($conn,"select * from admin where username='$username' and password='$password'");
    $cekrow = mysqli_num_rows($cekuname);

    if($cekrow>0){
        $_SESSION['username'] = $username;
        header('location:admin.php');
    } else {
        echo 'Password salah';
        header('location:login.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk sebagai Admin</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
                        <h1>Magang Kuy <br> Program Magang</h1>
						<p>Dengan adanya aplikasi ini pelamar dan penyedia lowongan tidak perlu mengeluarkan biaya yang besar. Penyedia lowongan dapat mendaftarkan perusahaannya pada aplikasi ini dan pelamar mendatkan informasi lamaran pekerjaan yang dapat di akses dimana pun dan kapan pun. Pelamar juga dapat langsung melihat, memilih dan melamar pekerjaan yang diinginkan.</p>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- First Section -->
							<section id="first" class="main special">
								<header class="major">
                                    <h2>Masuk sebagai admin</h2>                                   
								</header>
								

                            <form method="post">
                            <div class="row gtr-uniform">
												<div class="col-6 col-12-xsmall">
                                                    Username
													<input type="text" name="username" placeholder="Username" />
												</div>
												<div class="col-6 col-12-xsmall">
                                                    Password
													<input type="password" name="password" placeholder="Password" />
                                                </div>
                                                <div class="col-12">
													<ul class="actions">
                                                        <li><input type="submit" value="Login" class="primary" name="login" /></li>
														<li><a href="index.php" class="button">Kembali</a></li>
													</ul>
                                                </div>
                                            </div>
                                    </form>
							</section>

						
					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">Magang Kuy 2023</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>