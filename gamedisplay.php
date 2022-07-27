<?php
session_start();
if(!$_SESSION['ticket']){
    header('location:login.php');
}
    include('db.php');

$loginuser=$_SESSION['userid'];
$query="select * from userdata where id='$loginuser'";
$result=$conn->query($query);
$datauser=$result->fetch_assoc();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="header" style="margin-bottom:125px;">
    <?php
include('navbar.php');
 ?>
</div>

<body class="gradient-customuser">
    <form action="action.php" method="post">
        <div class="container mt-5 mb-5 ">
            <div class="d-flex justify-content-center row ">
                <div class="col-md-10">
                    <?php
			    $loginuser=$_SESSION['userid'];
			    $display="select * from games";
			    $output=$conn->query($display);

			    while($game=$output->fetch_assoc()){
			    ?>

                    <div class="row p-2 bg-white border rounded">
                        <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image"
                                src="gamesimage/<?php echo $game['image'];?>"></div>
                        <div class="col-md-6 mt-1">
                            <h3><?php echo $game['name'];?></h3>
                            <div class="d-flex flex-row">
                                <div class="ratings mr-2" style="color:red;">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><span><?php echo $game['rating'];?></span>
                            </div>
                            <div class="mt-1 mb-1 spec-1" style="color:#caa906;">
                                <span><?php echo $game['typeone'];?></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                    </svg></span>
                                <span><?php echo $game['typetwo'];?><br></span>
                            </div>
                            <div class="mt-1 mb-1 spec-1" style="color:#2a8fbd;">
                                <span>Type : <?php echo $game['dimension'];?></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-dot" viewBox="0 0 16 16">
                                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                    </svg></span>
                                <span>Publisher : <?php echo $game['publisher'];?></span>
                            </div>
                            <p class="text-justify text-truncate para mb-0" style="color:black;">
                                <br><?php echo $game['description'];?><br>
                            </p>
                            <p><a href="previewgame.php?id=<?php echo $game['id'];?>">Read More <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-three-dots" viewBox="0 0 16 16">
                                        <path
                                            d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                    </svg></a></p>
                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                            <div class="d-flex flex-row align-items-center">
                                <?php if((isset($_SESSION['ticket']) && $game['price']=="Free"))
						{
							?>
                                <h4 class="mr-1" style="color:green"><?php echo $game['price'];?></h4>
                                <?php
						}
						else{
						?>
                                <h4 class="mr-1" style="color:blue">$ <?php echo $game['price'];?></h4>
                                <?php
						}
						?>
                            </div>
                            <?php if((isset($_SESSION['ticket']) && $game['price']=="Free"))
						{
							?>
                            <h6><a href="previewgame.php?id=<?php echo $game['id'];?>">Play Now</a></h6>
                            <?php
						}
						else{
						?>
                            <h6><a class=" text-success" href="gamepass.php"> Free With Game Pass</a></h6>

                            <?php
						}
							?>

                            <?php if((isset($_SESSION['ticket']) && $_SESSION['usertype']=="admin"))
											{
											 ?>
                            <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button"><a
                                        style="color:white;" href="updategame.php?id=<?php echo $game['id'];?>">Edit /
                                        Update </a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                                    </svg>
                                </button>
                                <button class="btn btn-danger btn-sm mt-2" type="button" name="deletgame"> <a
                                        href="action.php?gameid=<?php echo $game['id'];?>"
                                        style="color:white;">delete</a>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd"
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </button>
                            </div>
                            <?php
									}
									else{?>
                            <br>
                            <a href="previewgame.php?id=<?php echo $game['id'];?>"><button
                                    class="btn btn-outline-primary btn-sm mt-2" type="button"> Add a comment
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-chat-right-text" viewBox="0 0 16 16">
                                        <path
                                            d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z" />
                                        <path
                                            d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                </button></a>

                            <?php } ?>
                        </div>

                    </div>
                    <br>
                    <?php
			     }
			      ?>

                </div>
            </div>
        </div>
    </form>
</body>

<?php
include('footer.php');
 ?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>