
<?php
session_start();
include('includes/db.php');
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $get_admin = "select * from admins where admin_email ='$email ' && admin_pass='$pass'";
    $run_admin = mysqli_query($con,$get_admin);
    $count = mysqli_num_rows($run_admin);
    if($count==1){
        $_SESSION['email'] = $email;
        echo"<script>alert('Logged in. Welcome Back')</script>";
        echo"<script>window.open('index.php?dashboard','_self')</script>";
        exit();

}else{
    echo"<script>alert('Wrong Email or Password')</script>";
    echo"<script>window.open('login.php','_self')</script>";

}

}

?>

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
                    <center>
                        <h4 class="text-capitalize">admin login</h4>
                    </center>
                    <form action="login.php" method="post">
                        <fieldset class="border p-5">
                            <legend class="w-auto" style="color:blue;">
                                Sign in to Your Account
                            </legend>
                            <div class="input-group my-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope" style="color:blue"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" placeholder="Enter Email" name="email"
                                    id="email">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span><i class="fas fa-lock" style="color:blue;"></i></span>
                                    </div>
                                </div>
                                <input type="password" class="form-control" placeholder="Enter Password" name="pass"
                                    id="email">
                            </div>
                            <button class="btn btn-primary float-right my-3" type="submit" name="submit">
                                <i class="fas fa-arrow-circle-right"></i> Login
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