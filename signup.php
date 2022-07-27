<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<style>
header {
    position: relative;
    background-color: black;
    height: 100vh;
    min-height: 25rem;
    width: 100%;
    overflow: hidden;
}

header video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: 0;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
}

header .container {
    position: relative;
    z-index: 2;
}

header .overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: black;
    opacity: 0.5;
    z-index: 1;
}

/* Media Query for devices withi coarse pointers and no hover functionality */

/* This will use a fallback image instead of a video for devices that commonly do not support the HTML5 video element */

@media (pointer: coarse) and (hover: none) {
    header {
        background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
    }
}
</style>

<body>
    <header>
        <form action="action.php" method="post">
            <section class="vh-100 bg-image">
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="video/pubg.mp4" type="video/mp4">
                </video>
                <div class="mask d-flex align-items-center h-100 gradient-custom-3 opacity-75">
                    <div class="container h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                <div class="card bg-dark text-white" style="border-radius: 75px;">
                                    <div class="card-body p-5">
                                        <h2 class="text-uppercase text-center mb-3" style="color:#BCD3F7;">Create an
                                            account</h2>
                                        <?php  if(isset($_GET['message'])){ ?>
                                        <p>Username already taken!!!</p>
                                        <?php } ?>
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example1cg" name="username"
                                                class="form-control form-control-lg" style="background-color:#D2D2D2;"
                                                placeholder="Username" />
                                            <label class="form-label" for="form3Example1cg"></label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form3Example3cg" name="email"
                                                class="form-control form-control-lg" style="background-color:#D2D2D2;"
                                                placeholder="Your Email" />
                                            <label class="form-label" for="form3Example3cg"></label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example4cg" name="pass"
                                                class="form-control form-control-lg" style="background-color:#D2D2D2;"
                                                placeholder="Password" />
                                            <label class="form-label" for="form3Example4cg"></label>
                                        </div>

                                        <?php  if(isset($_GET['pass'])){ ?>
                                        <p>Password doesnt match!!!</p>
                                        <?php } ?>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example4cdg" name="passreturn"
                                                class="form-control form-control-lg" style="background-color:#D2D2D2;"
                                                placeholder="Repeat your password" />
                                            <label class="form-label" for="form3Example4cdg"></label>
                                        </div>

                                        <?php  if(isset($_GET['pass'])){ ?>
                                        <p>Password doesnt match!!!</p>
                                        <?php } ?>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input style="margin-right:5px;" type="checkbox" value="" id="aggrement" />
                                            <label class="form-check-label" for="form2Example3g">
                                                I agree all statements in <a href="#!" class="text-white"><u>Terms of
                                                        service</u></a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center">
                                            <button type="submit" name="register" class="primary_btn"
                                                style="border-radius:75px;">Register</button>
                                        </div>

                                        <p class="text-center text-white mt-5 mb-0">Have already an account? <a
                                                href="login.php" class="fw-bold text-white"><u>Login here</u></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </header>
</body>

</html>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">