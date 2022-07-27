<!--Code By Webdevtrick ( https://webdevtrick.com )-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>404 page not found</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<?php
include('navbar.php');
?>

<body>
    <div class="loading wave">
        404
    </div>
    <div class="loading2 wave2">
        Page not found!
        </section>

</body>

</html>
<style>
body {
    background: #212121;
    width: 100%;
    height: 100%;
}

.loading,
.loading2 {
    text-transform: uppercase;
    font-family: 'Lexend Deca', sans-serif;
    font-weight: bold;
    font-size: 100pt;
    text-align: center;
    height: 120px;
    line-height: 110px;
    vertical-align: bottom;
    position: absolute;
    left: 0;
    right: 0;
    top: 100px;
    bottom: 0;
    display: block;
}

.loading2 {
    top: 240px;
}

.wave {
    background-image: url("https://webdevtrick.com/wp-content/uploads/water-wave-blue.png");
    -moz-background-clip: text;
    -o-background-clip: text;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 0px 0px rgba(255, 255, 255, 0.06);
    animation: wave-animation 1s infinite linear, loading-animation 10s infinite linear alternate;
    background-size: 200px 100px;
    background-repeat: repeat-x;
    opacity: 1;
}

.wave2 {
    background-image: url("https://webdevtrick.com/wp-content/uploads/water-wave.png");
    -moz-background-clip: text;
    -o-background-clip: text;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-shadow: 0px 0px rgba(255, 255, 255, 0.06);
    animation: wave-animation 1s infinite linear, loading-animation 10s infinite linear alternate;
    background-size: 200px 100px;
    background-repeat: repeat-x;
    opacity: 1;
}

@keyframes wave-animation {
    0% {
        background-position: 0 bottom;
    }

    100% {
        background-position: 200px bottom;
    }
}

@keyframes loading-animation {
    0% {
        background-size: 200px 0px;
    }

    100% {
        background-size: 200px 200px;
    }
}

@media (max-width: 765px) {

    .loading,
    .loading2 {
        font-size: 50pt;
    }
}
</style>