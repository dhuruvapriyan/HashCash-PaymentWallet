<?php
session_start();
include 'dbms_server_conn.php';
$m_no=$_SESSION['user'];
$sql=" SELECT * FROM hashcash.user where mobilenumber='$m_no'";
$result = mysqli_query($con,$sql);
	if(!$result)
	{
	}
	else
	{
		$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
		$name=$row['name'];
	}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Payment-Form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">HashCash</a><button class="navbar-toggler float-right" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div
                class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index-2.php">profile</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php">LOGOUT</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <header class="masthead" style="background:url('assets/img/bg-pattern.png'), linear-gradient(to left, #7b4397, #dc2430);height:100%;">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-7 my-auto">
                    <div class="mx-auto header-content">
                        <h1 class="mb-5">Hi <?php echo $name ?></h1>
                        <h1 class="mb-5">Confirm Delete Account</h1>
                        <form class="bootstrap-form-with-validation" action = deleteAccountBackEnd.php>
                            <div class="form-group"><label for="password">Password&nbsp;</label><input class="form-control" type="password" name="password" placeholder="Enter your password" id="password-input" style="opacity: 0.4;"></div>
                            <div class="form-group">
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="checkbox-input" id="formCheck-25"><label class="form-check-label">Checkbox</label></div>
                            </div>
                            <div class="form-group"><button class="btn btn-primary" role="submit">DELETE account</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <footer>
        <div class="container">
            <p>©&nbsp;HashCash 2019. All Rights Reserved.</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">FAQ</a></li>
            </ul>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/new-age.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>