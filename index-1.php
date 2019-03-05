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
        $bal=$row['balance'];
        #echo $row['mobilenumber'];
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
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top" data-bs-hover-animate="shake">HashCash</a><button class="navbar-toggler float-right" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#download">PAY</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#features">RECHARGE</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index-2.php">PROFILE</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index-1.php">STATISTICS</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background:url('assets/img/bg-pattern.png'), linear-gradient(to left, #7b4397, #dc2430);height:100%;">
        <div class="container h-100" style="width: 1136px;">
            <div class="row h-100" style="width: 600px;">
                <div class="col-lg-7 my-auto">
                    <div class="mx-auto header-content">
                        <h1 class="mb-5">Hi <?php echo $name?></h1>
                        <h1 class="mb-5">Balance : <?php echo $bal?></h1><a class="btn btn-outline-warning btn-xl js-scroll-trigger" role="button" href="#download">Start Now for Free!</a></div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                        </tr>
                        <tr>
                            <td>Cell 3</td>
                            <td>Cell 4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <section></section>
        </div>
    </header>
    <section id="download" class="download text-center bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2 class="section-heading">Pay&nbsp;</h2>
                    <form class="bootstrap-form-with-validation" action = transaction.php>
                        <div class="form-group"><label for="text-input">Mobile Number</label><input class="form-control" type="text" name="tomobile" placeholder="Enter receiver's mobile number" id="tomobile" style="opacity: 0.4;"></div>
                        <div class="form-group"><label for="text-input">Transfer Amount</label><input class="form-control" type="text" name="amount" placeholder="Enter transfer amount" id="amount" style="opacity: 0.4;"></div>
                        <div class="form-group"><label for="password-input">Password</label><input class="form-control" type="password" name="password" placeholder="Enter your account password" id="password" style="opacity: 0.4;"></div>
                        <div class="form-group">
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="checkbox-input" id="formCheck-21"><label class="form-check-label" for="formCheck-21">Checkbox</label></div>
                        </div>
                        <div class="form-group"><button class="btn btn-primary" type="submit">PROCESS PAYMENT</button></div>
                    </form>
                    <div class="badges"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="features" style="margin: 5px;">
        <div class="container" style="height: 622px;padding: -34px;margin: -4px;">
            <div class="section-heading text-center" style="width: 1013px;height: 420px;padding: -81px;margin: -89px;">
                <div class="col-12 col-md-4 offset-md-4">
                    <div class="card credit-card-box" style="width: 385px;margin: 34px;">
                        <div class="card-header">
                            <h3><span class="panel-title-text">Recharge your wallet&nbsp;</span><img class="img-fluid panel-title-image" src="assets/img/accepted_cards.png"></h3>
                        </div>
                        <div class="card-body">
                            <form id="payment-form" action = "recharge.php">
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-group"><label for="cardNumber">Card number </label>
                                            <div class="input-group"><input class="form-control" type="tel" name="card" required="" placeholder="Valid Card Number" id="cardNumber">
                                                <div class="input-group-append"><span class="input-group-text"><i class="fa fa-credit-card"></i></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-7">
                                        <div class="form-group"><label for="cardExpiry"><span>expiration </span><span>EXP </span> date</label><input class="form-control" type="tel" name="date" required="" placeholder="MM / YY" id="cardExpiry"></div>
                                    </div>
                                    <div class="col-5 pull-right">
                                        <div class="form-group"><label for="cardCVC">cv code</label><input class="form-control" type="tel" name="cvv" required="" placeholder="CVV" id="cardCVC"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-group"><label for="Amount">Amount</label><input class="form-control" type="text" name="amount" placeholder="Enter Amount" id="couponCode"></div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group"><label for="password">Password</label><input class="form-control" type="password" name="password" placeholder="Enter Password" id="password"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12"><button class="btn btn-success btn-block btn-lg" type="submit">ADD MONEY</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <p class="text-muted"></p>
                <hr>
            </div>
        </div>
    </section>
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