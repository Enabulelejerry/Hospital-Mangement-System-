
<?php
 Session_start();
 include("includes/db.php");
 // checking details for reset password
 if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $get_doc = "select id from doctor where doc_email='$email' and doc_contact='$phone'";
    $run_doc = mysqli_query($con,$get_doc);
    $row = mysqli_num_rows($run_doc);
    if($row>0){
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        echo "<script>window.open('reset.php')</script>";
    }else{
        echo "<script>alert('Invalid details. Please try with valid details');</script>";
         echo "<script>window.open('forget.php')'</script>";
         echo 'bad'.die(mysqli_error($con));
    }


 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget_password</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="font-aw/css/all.css">
</head>

<body>
    <section class="login-section w-50 mx-auto my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <center>
                        <h4 class="text-capitalize">Recover Password</h4>
                    </center>
                    <form action="forget.php" method="post">
                        <fieldset class="border p-5">
                            <legend class="w-auto" style="color:blue;">
                                Doctor password Recovery
                            </legend>
                            <p>Enter your Contact number or Email to recover your password</p>
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
                                        <span><i class="fas fa-phone" style="color:blue;"></i></span>
                                    </div>
                                </div>
                                <input type="number" class="form-control" placeholder="Enter Phone Number" name="phone"
                                    id="phone">
                                     
                            </div>
                            <div class="my-2"><a href="login.php">Already have an Account?</a></div>  
                            <button class="btn btn-primary float-right my-3" type="submit" name="submit">
                                <i class="fas fa-arrow-circle-right"></i> Reset
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