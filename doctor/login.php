
<?php
session_start();
include("includes/db.php");
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $get_doc = "select * from doctor where doc_email = '$email '  and pass ='$pass'";
    $run_query = mysqli_query($con,$get_doc);
    $row = mysqli_fetch_array($run_query);

    if($row){
        
        $_SESSION['email'] = $email;
        $doc_id = $row['id'];
        $uip = $_SERVER['REMOTE_ADDR'];
        $status = 1;
        $logs = "insert into doctorslog (u_id,doc_email,userip,status)   values('$doc_id','".$_SESSION['email']."','$uip','$status')";
        $query_log = mysqli_query($con,$logs);
         
        echo "<script>alert('Logged in, welcome back')</script>";
        echo "<script> window.open('index.php?dashboard')</script>";

        
    }else{
        $email = $_POST['email'];
        $uip = $_SERVER['REMOTE_ADDR'];
        $status = 0;
        $logs = "insert into doctorslog (doc_email,userip,status) values('$email','$uip','$status')";
        $query_log = mysqli_query($con,$logs );
        echo "<script>alert('login failed, wrong username or password!')</script>";
        echo "<script> window.open('login.php')</script>";
        echo 'bad'.die(mysqli_error($con));

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
                        <h4 class="text-capitalize">doctor login</h4>
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
                                    id="pass">
                                     
                            </div>
                            <div class="my-2"><a href="forget.php">Forget Password?</a></div>  
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