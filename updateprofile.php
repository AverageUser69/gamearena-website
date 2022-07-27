<?php
session_start();
if(!$_SESSION['ticket']){
    header('location:login.php');
}
$loginuser=$_SESSION['userid'];
include('db.php');
$query="select * from userdata where id='$loginuser'";
$result=$conn->query($query);
$datauser=$result->fetch_assoc();
?>
<?php
include('navbar.php');
 ?>
<form method="post" action="action.php" enctype="multipart/form-data">
    <section class="vh-100 gradient-customuser">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom-made text-center text-white"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img src="userimage/default_pic.jpg" alt="Avatar" class="img-fluid my-5"
                                    style="width: 80px;" />
                                <input type="hidden" name="id" value="<?php echo $datauser['id'];?>" />
                                <h5><input name="username" type="text" class="form-control "
                                        value="<?php echo $datauser['username'];?>" /></h5>
                                <?php if((isset($_SESSION['ticket']) && $_SESSION['usertype']=="admin"))
       {
        ?>
                                <p><?php echo $datauser['usertype'];?></p>
                                <?php
       }
                  ?>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Unique code:#<?php echo $datauser['id'];?></h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted"><input name="email" type="text" class="form-control "
                                                    value="<?php echo $datauser['email'];?>" /></p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Phone</h6>
                                            <p class="text-muted"><input name="phonenumber" type="text"
                                                    class="form-control "
                                                    value="<?php echo $datauser['phonenumber'];?>" /></p>
                                        </div>
                                    </div>
                                    <h6>Games</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Recently Played</h6>
                                            <p class="text-muted">DOTA</p>
                                            <p class="text-muted">Valorant</p>
                                            <p class="text-muted">GTA V</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Wishlist</h6>
                                            <p class="text-muted">The Forest</p>
                                            <p class="text-muted">Fall Guys</p>
                                            <p class="text-muted"></p>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" name="updateprofile"
                                                class="primary_btn">Comfirm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
<<?php
include('footer.php');
     ?> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>