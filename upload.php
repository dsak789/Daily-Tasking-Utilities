<?php 

$tar="images/";
$tarfile=$tar.basename($_FILES['image']['name']);
$tmp=$_FILES['image']['tmp_name'];

if(isset($_POST['signup'])){
    
    echo"";
    echo "Filename: " . $_FILES['image']['name']."<br>";
    echo "Type : " . $_FILES['image']['type'] ."<br>";
    echo "Size : " . $_FILES['image']['size'] ."<br>";
    echo "Temp name: " . $_FILES['image']['tmp_name'] ."<br>";
    echo "Error : " . $_FILES['image']['error'] . "<br>";
    
    if(move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$_FILES['image']['name'])){
    echo "
    <script> 
    alert('Success Upload');</script>
    ";
    header("Location:signin.html");
    }
else{
    echo"
    <script> 
    alert('not Success Upload');</script>";
}
}

?>