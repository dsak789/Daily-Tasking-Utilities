<?php 
 
    session_start();
    echo "Sessions Expired<br><hr>";
    echo "<br><a href='signin.html'><Button>Signin</Button></a>";

    session_destroy();
?>