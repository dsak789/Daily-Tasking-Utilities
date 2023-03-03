<?php
if(mysqli_connect("localhost","root","","practice")){
    echo "success";
    return true;
}
else{
    echo "not conected";
    return false;
}
?>