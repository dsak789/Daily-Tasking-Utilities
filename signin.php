<?php

session_start();
// session_start();
// if(isset($_SESSION['userid'])){
//     echo "alerdy login with".$_SESSION['userid'];
// }
$con=mysqli_connect("localhost","root","","practice");
//include("dbcon.php");
$usr=$_POST['username'];
$pwd=$_POST['password'];

// $auth="SELECT * from signup";
$verify= "SELECT * FROM signup WHERE username='$usr' AND pswd='$pwd' ";
if(!$con){
    echo"Db not connected";
    exit;
}
$res=mysqli_query($con,$verify);
if(!$res){
    echo "Error".mysqli_connect_error();
}
    
$data=mysqli_fetch_assoc($res);
if($data){
    
    echo "<br>"."Login With ". $data['username']."\tas ".$data['fname']."<hr>";
    $_SESSION['userid']=$data['username'];
    $_SESSION['name']=$data['fname'];
    echo "<h1><a href='signout.php'><button>Signout</button></a></h1>";
    echo "<h1><a href='showuser.php'><button>Show Users</button></a></h1>";
}
else{
    echo "Login Failed";
}

// $a=mysqli_query($con,$auth);
// echo ($a).toString();
// while($row=mysqli_fetch_assoc($res)){
// echo "<br>"."Login With ". $row['username']."\tas ".$row['fname']."<hr>";
// // echo "hello ".$row['fname']."<br>";
// }
?>