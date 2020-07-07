<?php  
session_start();
include('includes/db.php'); 
if(isset($_POST['reset'])){
    $password = $_POST['password'];
     $email = $_SESSION['email']; 
     $phone = $_SESSION['phone'] ;
  $update = "update doctor set pass='$password ' where doc_email='$email' and doc_contact='$phone'";
  $query = mysqli_query($con,$update);
  if($query){
    echo "<script>alert('Password successfully updated.');</script>";
    echo "<script>window.location.href ='login.php'</script>";
  }else{
      echo "bad";
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
<script type="text/javascript">
  function valid(){
      if(document.passwordreset.password.value!=document.passwordreset.c_password.value){
          alert("Password and Confirm password does not match !!");
          document.passwordreset.c_password.focus();
       return false;
      }
      return true;
  }
</script>

<body>
<section class="login-section w-50 mx-auto my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    
                    <form action="reset.php" method="post" name="passwordreset" onSubmit="return valid();">
                        <fieldset class="border p-5">
                            <legend class="w-auto" style="color:blue;">
                                Password reset
                            </legend>
                            
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span><i class="fas fa-lock" style="color:blue;"></i></span>
                                    </div>
                                </div>
                                <input type="password" class="form-control" placeholder="Enter new password" name="password"
                                    id="password">
                            </div>
                            <div class="input-group my-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span><i class="fas fa-lock" style="color:blue;"></i></span>
                                    </div>
                                </div>
                                <input type="password" class="form-control" placeholder="Confirm new password" name="c_password"
                                    id="c_password">
                            </div>
                            <div class="new_account">
                              <p>Already an account?
                              <a href="login.php">Login</a>
                              </p> 
                              </div>
                              <div class="form-actions">
                            <button class="btn btn-primary float-right my-3" type="submit" name="reset">
                                <i class="fas fa-arrow-circle-right"></i> reset
                            </button>
                            </div>
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



