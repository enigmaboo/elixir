<?php 
require_once '../../../../essential/dbconnect.php';


session_start();
if(isset($_SESSION['loginemail'])){
    $mymail=$_SESSION['loginemail'];
    $sql="SELECT * FROM users WHERE `email`='$mymail'";
    $exe=mysqli_query($con,$sql);
    $change=mysqli_fetch_assoc($exe);
    $pic=$change['profilepic'];
    
    echo "<img class='img-fluid imgs' for='photo-upload' style='object-fit:cover;'src='".$pic."'>";
}   
    ?>
    