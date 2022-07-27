<?php
session_start();
if(!$_SESSION['ticket']){
    header('location:login.php');
}
    include('db.php');

    $id=$_GET['id'];
    $query="select * from games where id='$id'";
    $result=$conn->query($query);
    $game=$result->fetch_assoc();
$loginuser=$_SESSION['userid'];
$query="select * from userdata where id='$loginuser'";
$result=$conn->query($query);
$datauser=$result->fetch_assoc();

    ?>

<div class="header" style="margin-bottom:100px;">
    <?php
     include('navbar.php');
?>
</div>
<form method="post" action="action.php">
    <input type="hidden" name="gameid" value="<?php echo $game['id'];?>" />
    <input type="hidden" name="userid" value="<?php echo $datauser['id'];?>" />
    <input type="hidden" name="username" value="<?php echo $datauser['username'];?>" />
    <div class="d-flex justify-content-center container mt-5">
        <div class="card p-3 bg-white">
            <div class="about-product text-center mt-2"><img class="img-fluid img-responsive rounded product-image"
                    src="gamesimage/<?php echo $game['image'];?>">
                <div>
                    <h2><?php echo $game['name'];?></h2>
                    <h4 class="mt-0 text-black-50"><?php echo $game['typeone'];?> | <?php echo $game['typetwo'];?></h4>
                </div>
            </div>
            <div class="stats mt-2">
                <div class="d-flex justify-content-between " style="color:#2a8fbd;">
                    <span>Type</span><span><?php echo $game['dimension'];?></span>
                </div>
                <hr>
                <div class="d-flex justify-content-between" style="color:#2a8fbd;">
                    <span>Publisher</span><span><?php echo $game['publisher'];?></span>
                </div>
                <hr>
                <div class="d-flex justify-content-between " style="color:red;"><span>Total Rating <i
                            class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </span><span><?php echo $game['rating'];?></span>
                </div>
                <hr>
                <div class="d-flex justify-content-between " style="color:black">
                    <span><?php echo $game['description'];?></span>
                </div>
            </div>
            <hr>
            <?php if((isset($_SESSION['ticket']) && $game['price']=="Free"))
						{
							?>
            <div class="d-flex justify-content-between total font-weight-bold mt-4" style="color:green">
                <span>Price</span><span><?php echo $game['price'];?></span>
            </div>
            <?php
						} 
						else{
						?>
            <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Price</span><span
                    style="color:blue;">$ <?php echo $game['price'];?></span></div>
            <div class="d-flex justify-content-between "><a style="color:blue;" class="text-success"
                    href="gamepass.php">
                    Free With Game Pass</a></div>
            <?php
						}
						?>
            <hr>
            <br>
            <h3>Comments
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chat-right-text" viewBox="0 0 16 16">
                    <path
                        d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z" />
                    <path
                        d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                </svg>
            </h3>
            <br>

            <?php
            $loginuser=$_SESSION['userid'];
            $display="select * from comments where gameid='$id'";
            $output=$conn->query($display);

            while($comments=$output->fetch_assoc()){
                ?>
            <p>
            <h4>
                <div class="d-flex justify-content-between"><?php echo $comments['username'];?></div>
            </h4>
            <div class="d-flex justify-content-between"><?php echo $comments['comment'];?></div>
            </p>
            <?php
            }
            ?>
            <hr>
            <div class="form-outline mb-4">
                <textarea name="commen" class="form-control form-control-lg"
                    placeholder="Add a comment regarding  the game." required></textarea>



                <label class="form-label"><button type="submit" name="comment"
                        class="btn btn-outline-primary btn-sm mt-2">Post

                    </button></label>
            </div>


        </div>
    </div>
</form>
<?php
    include('footer.php');
    ?>
<style>
.card {
    width: 444px;
}

body {
    background: #eee;
}
</style>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>