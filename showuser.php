<?php
// echo "<html>
// <head>
// <link rel='stylesheet' href='index.css'></head>
// <body>
// </body>
// </html>
    
// ";
session_start();
if(isset($_SESSION['userid'])){

$id=$_SESSION['userid'];
$u=$_SESSION['name'];
 
// echo $id."<br>".$u."<br>";
echo "<br><center><h1>All Users of DTU</h1></center><br>";


$con=mysqli_connect("localhost","root","","practice");
if(!$con){
    echo "Connection Falied";
}
$all="SELECT * from signup";
$users=mysqli_query($con,$all);
if($users){
    $i=0;
    echo "<center><table bgcolor='363636' cellpadding='08' cellspacing='15' border=`2`>
    <tr bgcolor='697373'>
    <th>Sno.</th>
    <th>First name</th>
    <th>Last Name</th>
    <th>Phone</th>
    <th>Dob</th>
    <th>Gender</th>
    <th>Username</th>
    <th>Rollno</th>
    <th>Branch</th>
    <th>Year</th>
    </tr> ";
    
    while($usr=mysqli_fetch_assoc($users)){
        $i++;
        // echo "<br>". $usr['fname']."".$usr['lname']."<hr>";
        // echo "<table border=`1`><tr><td>a</td><td>a</td><td>a</td><td>s</td><td>d</td><td>f</td><td>x</td><td>v</td><td>v</td></tr></table>";
        $fn=$usr['fname'];
        $ln=$usr['lname'];
        $ph=$usr['phno'];
        $dob=$usr['dob'];
        $gen=$usr['gender'];
        $un=$usr['username'];
        $rno=$usr['rollno'];
        $br=$usr['branch'];
        $yr=$usr['year'];
        
        echo "<tr bgcolor='478181'>
            <th>$i</th>
            <td>$fn</td>
            <td>$ln</td>
            <td>$ph</td>
            <td>$dob</td>
            <td>$gen</td>
            <td>$un</td>
            <td>$rno</td>
            <td>$br</td>
            <td>$yr</td>
       </tr> ";
    }
    echo"<br>
    </table></center>";
}
echo "<br><a href='signout.php'><Button>Signout</Button></a>";

}
else{
    echo "Sessions Expired";
    echo "<a href='signin.html'>Signin</a>";
}

?>
