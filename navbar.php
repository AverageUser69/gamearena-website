<html>

</html>
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-center">
                        <?php if(isset($_SESSION['ticket'])) { ?>
                        <li class="nav-item"><a class="nav-link" href="userprofile.php"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                                Profile</a></li>
                        <?php
							}
								?>
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <?php  if((isset($_SESSION['ticket']) && $_SESSION['usertype']=="admin"))
										{
											?>
                                <li class="nav-item"><a class="nav-link" href="addgame.php">Add Game</a>
                                    <?php
										}
										?>
                                <li class="nav-item"><a class="nav-link" href="gamepass.php">Game Pass</a>
                                <li class="nav-item"><a class="nav-link" href="gamedisplay.php">Games</a>
                                    <?php

										?>
                                    <?php if(isset($_SESSION['ticket'])) { ?>

                                <li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
                                <?php } else{ ?>
                                <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
                                <?php
                                }
                                    ?>



                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>


                    </ul>

                    <?php if(isset($_SESSION['ticket'])) { ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="logout.php" class="primary_btn">Log Out</a></li>
                    </ul>
                    <?php } else{
								?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="signup.php" target="_blank" class="primary_btn">Sign Up</a></li>
                    </ul>
                    <?php } ?>


                </div>
            </div>
        </nav>
    </div>
    </div>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>