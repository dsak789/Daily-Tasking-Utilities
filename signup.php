<?php
$con=mysqli_connect("localhost","root","","practice");
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$pno=$_POST['Phno'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$usr=$_POST['username'];
$pwd=$_POST['password'];
$rno=$_POST['rno'];
$br=$_POST['branch'];
$yrsm=$_POST['yr-sem'];
if(!$con){
    echo"check Your Database Connection";
}
else{
    include("upload.php");
    //echo "<br><hr>".$fn."<br><hr>".$ln."<br><hr>".$dob."<br><hr>".$gender."<br><hr>".$usr."<br><hr>".$pwd;
    $ins="INSERT INTO signup  VALUES ('$fn','$ln','$pno','$dob','$gender','$usr','$pwd','$rno','$br','$yrsm')";
    mysqli_query($con,$ins);
    echo "Signup Succesful<br><hr>";
    echo "<a href='signin.html'>Signin</a>";
    
}


// UPDATE `signup` SET `rollno` = '21VV5A1271' WHERE `signup`.`username` = 'dsak.official@gmail.com';
// "DELETE FROM `signup` WHERE `signup`.`username` = \'sak121527@gmail.comss\'"
?>  