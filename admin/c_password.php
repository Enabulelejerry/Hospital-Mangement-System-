<?php  
session_start();
include('includes/db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="font-aw/css/all.css">
</head>

<body>
<section class="login-section w-50 mx-auto my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    
                    <form action="c_password.php" method="post">
                        <fieldset class="border p-5">
                            <legend class="w-auto" style="color:blue;">
                                Change Password
                            </legend>
                            
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span><i class="fas fa-lock" style="color:blue;"></i></span>
                                    </div>
                                </div>
                                <input type="password" class="form-control" placeholder="Enter Old Password" name="old_pass"
                                    id="old_pass">
                            </div>
                            <div class="input-group my-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span><i class="fas fa-lock" style="color:blue;"></i></span>
                                    </div>
                                </div>
                                <input type="password" class="form-control" placeholder="Enter New Password" name="new_pass"
                                    id="new_pass">
                            </div>
                            <div class="input-group my-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span><i class="fas fa-lock" style="color:blue;"></i></span>
                                    </div>
                                </div>
                                <input type="password" class="form-control" placeholder="Confirm New Password" name="c_pass"
                                    id="c_pass">
                            </div>
                            <button class="btn btn-primary float-right my-3" type="submit" name="submit">
                                <i class="fas fa-arrow-circle-right"></i> Update
                            </button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>


    <?php
    if(isset($_POST['submit'])){
        $admin_session = $_SESSION['email'];
       $old_pass = $_POST['old_pass'];
       $new_pass = $_POST['new_pass'];
       $c_pass = $_POST['c_pass'];

       $sel_old_pass = "select * from admins where admin_pass='$old_pass'";

       $run_old_pass = mysqli_query($con,$sel_old_pass);
       $check_old_pass = mysqli_fetch_array($run_old_pass);

       if($check_old_pass==0){
        echo "<script> alert('Sorry, Your current password is not valid. please try again')</script>";
        echo "<script> window.open('c_password.php','_self')</script>";
        exit();
       }
       if($new_pass!==$c_pass){
        echo "<script> alert('Sorry, Your new password did not match')</script>";
        echo "<script> window.open('c_password.php','_self')</script>";
        exit();

       }
      

       $update_pass = "update admins set admin_pass ='$new_pass' where admin_email='$admin_session'";
       $run_c_pass = mysqli_query($con,$update_pass);
       if($run_c_pass){
          echo "<script> alert('Your password has been updated')</script>";
          echo "<script> window.open('logout.php','_self')</script>";

       }

    }



   ?>


