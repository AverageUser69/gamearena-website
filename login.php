<title>Log In</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>
<link rel="stylesheet" herf="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        background: url('video/valorant.mp4') black no-repeat center center scroll;
    }
}
</style>
<header>
    <div class="overlay"></div>
    <section class="vh-100 bg-image">
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="video/valorant.mp4" type="video/mp4">
        </video>
        <form action="action.php" method="post">

            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100  opacity-75">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center ">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Please enter your Username and password!</p>

                                    <div class="form-outline form-white mb-4">
                                        <input type="text" name="username" id="typeEmailX"
                                            class="form-control form-control-lg" placeholder="Username" />
                                        <label class="form-label" for="typeEmailX"></label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="pass" id="typePasswordX"
                                            class="form-control form-control-lg" placeholder="Password" />
                                        <label class="form-label" for="typePasswordX"></label>
                                    </div>

                                    <?php  if(isset($_GET['message'])){ ?>
                                    <p>Invalid Username or Password!!!</p>
                                    <?php } ?>
                                    <p class="small mb-5 pb-lg-2"><a class="text-white-50"
                                            href="forgotpassword.php">Forgot password?</a></p>

                                    <button class="btn primary_btn btn-lg px-5" type="submit"
                                        name="login">Login</button>
                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                        <a href="https://www.facebook.com/" target="_blank" class="text-white"><i
                                                class="fab fa-facebook-f fa-lg"></i></a>
                                        <a href="https://twitter.com/" target="_blank" class="text-white"><i
                                                class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                        <a href="https://myaccount.google.com/" target="_blank" class="text-white"><i
                                                class="fab fa-google fa-lg"></i></a>
                                    </div>

                                </div>

                                <div>
                                    <p class="mb-0">Don't have an account? <a href="signup.php"
                                            class="text-white-50 fw-bold">Sign Up</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</header>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>