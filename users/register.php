<?php
include("includes/db.php");
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $gender= $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $c_pass = $_POST['c_pass'];
    
    if($pass == $c_pass){

    $insert_user = "insert into user (name,address,city,gender,email,phone,pass) 
    values('$name','$address','$city','$gender','$email','$phone','$pass')";

    $run_user = mysqli_query($con,$insert_user);
    if($run_user){
        echo "<script> alert('Your account Created, you can Login now') </script>";
        echo "<script>window.open('register.php', '_self') </script>";
    }else{
        echo 'bad'.die(mysqli_error($con));
    }

}else{
       echo "<script> alert('Your password Does not match!') </script>";
        echo "<script>window.open('register.php', '_self') </script>";

}

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Resigstration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="font-aw/css/all.css">
</head>

<body>

    <section class="section-1">
        <div class="container">
            <div class="row">
                <div class="col my-5">
                    <center>
                        <h4 class="text-uppercase " style="color: blue;">hms | patient registration</h4>
                    </center>
                    <form action="register.php" method="post" class="w-50 mx-auto" id="register_form">
                        <fieldset class="border p-5">
                            <legend class="w-auto" style="color:blue">Sign Up</legend>


                            <p class="text-capitalize">enter your peronsal details below</p>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter full name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Enter Address" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" required>
                            </div>

                            <div class="form-group">
                                <label for="">Gender</label>
                                <div class="clip-radio radio-primary">
                                    <input type="radio" name="gender" id="gender" value="Male" checked="checked" class="mx-3" required> <label
                                        for="">Male</label>
                                    <input type="radio" name="gender" id="gender" value="Female" class="mx-2" required> <label
                                        for="">Female</label>
                                </div>
                            </div>
                            <p>Enter your Account Details</p>
                            <div class="input-group my-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        style="background-color:rgba(0, 255, 221, 0.685) 0.925)(21, 255, 0, 0.925)(21, 255, 0, 0.925)0, 255, 136);">
                                        <i class="fas fa-envelope" style="color:blue"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="input-group my-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        style="background-color:rgba(0, 255, 221, 0.685) 0.925)(21, 255, 0, 0.925)(21, 255, 0, 0.925)0, 255, 136);">
                                        <i class="fas fa-phone" style="color:blue"></i>
                                    </span>
                                </div>
                                <input type="number" class="form-control" id="phone" name="phone" placeholder="phone" required>
                            </div>
                            <div class="input-group my-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        style="background-color:rgba(0, 255, 221, 0.685) 0.925)(21, 255, 0, 0.925)(21, 255, 0, 0.925)0, 255, 136);">
                                        <i class="fas fa-lock" style="color:blue"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="pass" id="pass"
                                    placeholder="Password" required>
                            </div>
                            <div class="input-group my-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"
                                        style="background-color:rgba(0, 255, 221, 0.685) 0.925)(21, 255, 0, 0.925)(21, 255, 0, 0.925)0, 255, 136);">
                                        <i class="fas fa-lock" style="color:blue"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="c_pass" id="c_pass"
                                    placeholder="Confirm Password" required> 
                            </div>
                            <div class="user-action">
                                <p>
                                    Already have an Account?
                                    <a href="user_login.php">Login</a>
                                </p>
                            </div>

                            <button type="submit" name="submit" id="submit" class="btn btn-primary float-right"> Submit
                                <i class="fa fa-arrow-circle-right"></i></button>
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