<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['userid'])){

        $id=$_SESSION['userid'];
        $name=$_SESSION['name'];
        echo "HI".$name;
    }
    else{
        echo "Sessions Expired";
        echo "  <a href='signin.html'><button>Signin</button></a>";
        sleep(2);
        header("Location:index.html");

    }
    ?>
    
</body>
</html>