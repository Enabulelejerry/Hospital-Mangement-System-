<?php
 session_start();
 include("includes/db.php");
 $admin_email = $_SESSION['email'];
 $ldate=date('Y-m-d h:i:s A', time());
 $update = "update doctorslog set logout_time='$ldate' ORDER BY id DESC LIMIT 1";
 $query = mysqli_query($con,$update);
 if($query){
    session_destroy();
    echo"<script>window.open('login.php', '_self')</script>";
 }else{
     echo 'bad';
 }
 


?>