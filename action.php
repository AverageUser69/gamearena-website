<?php
session_start();
    include("db.php");

if(isset($_POST['register']))
{
    $user=$_POST['username'];
    $pwd=md5($_POST['pass']);
    $repwd=md5($_POST['passreturn']);
    $mail=$_POST['email'];
    if($pwd==$repwd){
        $queryone="select * from userdata where username='$user'";
        $result=$conn->query($queryone);
        $userdata=$result->fetch_assoc();
        $count=$result->num_rows;
        if(!$count==0){
            header("location:signup.php?message=invalid");
    }
        else{
            $query="insert into userdata (id,username,password,email) values (NULL,'$user','$pwd','$mail')";
            $conn->query($query);
            header('location:login.php');
    }
    }

else{
    header("location:signup.php?pass=invalid");
    
}
}
//login code
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=md5($_POST['pass']);
    $query="select * from userdata where username='$username' and password='$password'";
    $result=$conn->query($query);
    //fetches user data
    $userdata=$result->fetch_assoc();
    // print_r($userdata);
    $count=$result->num_rows;
    if($count==0){
        //login detail fail
        header("location:login.php?message=invalid");
    }
    else{
        if($userdata['usertype']=='admin'){
            $_SESSION['usertype']='admin';
            $_SESSION['ticket']='ok';
            $_SESSION['userid']=$userdata['id'];
            // echo "admin";
            header('location:userprofile.php');
        
        }
        else{
            $_SESSION['usertype']='user';
            $_SESSION['ticket']='ok';
            $_SESSION['userid']=$userdata['id'];
         // echo "user";
            header('location:userprofile.php'); 
        }
    }
}
//add tournaments
if(isset($_POST['addgame'])){
    $name=$_POST['name'];
    $typeone=$_POST['typeone'];
    $typetwo=$_POST['typetwo'];
    $dimension=$_POST['dimension'];
    $price=$_POST['price'];
    $rating=$_POST['rating'];
    $publisher=$_POST['publisher'];
    $description=$_POST['description'];
    $image=$_FILES['image']['name'];

    $ext=pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
    $randomimagename=rand(1,100000);
    $newpicname=$randomimagename."_gamearena.".$ext;
    if($ext=='jpg' || $ext=='JPG' ||  $ext=='PNG' || $ext=='png' || $ext=='gif' || $ext=='GIF' || $ext=='JPEG' || $ext=='jpeg')
    {

    move_uploaded_file($_FILES['image']['tmp_name'],"gamesimage/".$newpicname);
    $query="insert into games (id,name,typeone,typetwo,dimension,price,rating,publisher,description,image) values (NULL, '$name' , '$typeone' , '$typetwo' , '$dimension' , '$price' , '$rating' , '$publisher' , '$description' , '$newpicname')";
    $conn->query($query);
    header('location:gamedisplay.php');

    }
    else{
        echo '<script>alert("Invalid file format.")</script>';

    }
}
if(isset($_POST['discard'])){
    header('location:gamedisplay.php');
}

//update user profile
if(isset($_POST['updateprofile'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $id=$_POST['id'];
    $query="update userdata set username='$username',email='$email',phonenumber='$phonenumber' where id='$id'";
    $conn->query($query);
    header('location:userprofile.php');
    //echo "$username";
}
//save changes that were made 
if(isset($_POST['updatechanges'])){
    $name=$_POST['name'];
    $typeone=$_POST['typeone'];
    $typetwo=$_POST['typetwo'];
    $publisher=$_POST['publisher'];
    $rating=$_POST['rating'];
    $description=$_POST['description'];
    $dimension=$_POST['dimension'];
    $price=$_POST['price'];
    $id=$_POST['id'];
    $query="update games set name='$name',typeone='$typeone',typetwo='$typetwo', publisher='$publisher',rating='$rating',description='$description',dimension='$dimension',price='$price' where id='$id'";
    $conn->query($query);
    header('location:gamedisplay.php');
    //echo "$username";
}
//delete games that were added
if(isset($_GET['gameid'])){
    //echo "hello";
        $delid=$_GET['gameid'];
        $query="delete from games where id='$delid'";
        $conn->query($query);
        header('location:gamedisplay.php');
    
    }
    //add comment by user
    if(isset($_POST['comment'])){
        $comment=$_POST['commen'];
        $gameid=$_POST['gameid'];
        $userid=$_POST['userid'];
        $username=$_POST['username'];
        $date=date('y-m-d h:i:s');
        $query="insert into comments (id,gameid,userid,username,comment,date) values (NULL,'$gameid','$userid','$username','$comment','$date')";
        $conn->query($query);
        header('location:gamedisplay.php');
        
    }
?>