<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>HashCash</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Payment-Form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand tada animated infinite js-scroll-trigger" href="#page-top">HashCash</a><button class="navbar-toggler float-right" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#download" data-bs-hover-animate="rubberBand">LOGIN</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#features" data-bs-hover-animate="rubberBand">SIGNUP</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact" data-bs-hover-animate="rubberBand">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background:url('assets/img/bg-pattern.png'), linear-gradient(to left, #7b4397, #dc2430);height:100%;">
        <div class="container h-100">
            <div class="row h-100" style="width: 476px;">
                <div class="col">
                    <div class="overlay"></div>
                </div>
                <div class="col-lg-7 my-auto">
                    <div class="mx-auto header-content">
                        <h1 data-bs-hover-animate="rubberBand" class="mb-5" style="width: 302px;">Let's get started with cashless transactions</h1><a class="btn btn-outline-warning btn-xl js-scroll-trigger" role="button" href="#features" data-bs-hover-animate="wobble">SIGN Up For FREE</a></div>
                </div>
            </div>
            <section></section>
            <h1 data-bs-hover-animate="rubberBand" class="mb-5">Welcome Back.</h1>
            <div class="row h-100" style="width: 476px;">
                <div class="col-lg-7 my-auto">
                    <div class="mx-auto header-content">
                        <h1 data-bs-hover-animate="rubberBand" class="mb-5">Welcome Back.</h1><a class="btn btn-outline-warning btn-xl js-scroll-trigger" role="button" href="#features">SIGN Up For FREE</a></div>
                </div>
            </div>
        </div>
    </header>
    <section id="download" class="download text-center bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2  class="section-heading">LOGIN</h2>
                    <form class="bootstrap-form-with-validation" action = login.php>
                        <h2 class="text-center"></h2>
                        <div class="form-group"><label for="text-input">Mobile Number</label><input class="form-control" type="text" name="mobilenumber" required="" placeholder="Enter your registered mobile number" id="mobilenumber" style="filter: blur(0px);opacity: 0.40;padding: 11px;"></div>
                        <div
                            class="form-group"><label for="password-input">Password&nbsp;</label><input class="form-control" type="password" name="password" required="" placeholder="Enter your account password" minlength="8" id="password" style="filter: blur(0px);opacity: 0.40;"></div>
                
            <div class="form-group"><button class="btn btn-primary" role="submit"  data-bs-hover-animate="jello">LOGIN</button></div>
            </form>
            <div class="badges"><a href="#" class="badge-link"></a><a href="#" class="badge-link"></a></div>
        </div>
        </div>
        </div>
        <section class="cta" style="background-image: url('assets/img/bg-cta.jpg');">
            <div class="cta-content">
                <div class="container">
                    <h2>Stop waiting.<br>Start using.<br></h2><a class="btn btn-outline-warning btn-xl js-scroll-trigger" role="button" href="#features">Let's Get Started!</a></div>
            </div>
        </section>
    </section>
    <section id="features" class="features" style="color: rgb(33,41,37);background-color: #d5bf88;padding: 150px;height: 581px;">
        <div class="container">
            <div class="section-heading text-center" style="width: 896px;padding: 23px;">
                <h2>Create Account</h2>
                <p class="text-muted">Check out what you can do with this app</p>
                <form class="bootstrap-form-with-validation" action = signup.php>
                    <div class="form-group"><input class="form-control" type="text" name="name" required="" placeholder="Enter your name" id="name" style="width: 828px;opacity: 0.40;margin: 14px;padding: 16px;height: 39px;"></div>
                    <div class="form-group"><input class="form-control" type="text" name="mobilenumber" required="" placeholder="Enter your Mobile Number" id="mobilenumber" style="width: 828px;opacity: 0.40;margin: 14px;padding: 16px;"></div>
                    <div class="form-group">
                        </div>
                    <div class="form-group"><button class="btn btn-primary" role="submit" data-bs-hover-animate="jello">GET STARTED</button></div>
                </form>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-4 my-auto">
                    <div class="device-container"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact bg-primary">
        <div class="container">
            <h2><span>We&nbsp;</span><i class="fa fa-heart shake animated infinite"></i><span>&nbsp;new friends!</span></h2>
            <ul class="list-inline list-social">
                <li class="list-inline-item social-twitter"><a href="#" data-bs-hover-animate="rubberBand"><i class="fa fa-twitter border rounded-0" data-bs-hover-animate="flash"></i></a></li>
                <li class="list-inline-item social-facebook"><a href="#" data-bs-hover-animate="rubberBand"><i class="fa fa-facebook" data-bs-hover-animate="flash"></i></a></li>
                <li class="list-inline-item social-google-plus"><a href="#" data-bs-hover-animate="rubberBand"><i class="fa fa-google-plus" data-bs-hover-animate="flash"></i></a></li>
            </ul>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>© HashCash 2019. All Rights Reserved.</p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/new-age.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>
