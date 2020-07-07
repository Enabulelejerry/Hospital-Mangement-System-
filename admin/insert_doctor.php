<?php
   include('includes/db.php');
   
   if(isset($_POST['submit'])){
    $doc_name = $_POST['doc_name'];
    $specialization = $_POST['specialization'];
    $address = $_POST['address'];
    $consultancy_fees = $_POST['consultancy_fees'];
    $doc_contact = $_POST['doc_contact'];
    $doc_email = $_POST['doc_email'];
    $pass= $_POST['pass'];
    $confirm_pass = $_POST['confirm_pass'];
    if($pass == $confirm_pass){
       $insert_doc ="insert into doctor (doctor_name,specialization,address, consultancy_fees,doc_contact,doc_email,pass)  
        values('$doc_name','$specialization','$address','$consultancy_fees','$doc_contact','$doc_email','$pass')";
        $run_doc = mysqli_query($con,$insert_doc);
        if($run_doc){
            $_SESSION['doc_email'] = $doctor_email;
            echo "<script> alert(' Doctor Record Add successfully') </script>";
            echo "<script>window.open('index.php?manage_doctor', '_self') </script>";
        }else{
            "bad".die(mysqli_error($con));
        }
    }else{
         echo "<script> alert(' Password does not match!') </script>";
            echo "<script>window.open('insert_doctor.php', '_self') </script>";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add doctor</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--font awesome-->
    <link href="./font-aw/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="header">
    <div class="">
    <div class="row">
        <div class="col">
            <ul class="breadcrumb">
              <li class="actice text-uppercase">
                  dashboard | add doctor
              </li>
            </ul>
        </div>
    </div>
    </div>
</div>
 <div class="row"> <!--row begin-->
     <div class="col-lg-12"><!--col-lg-12 begin-->
         <div class="card"><!--card begin-->
             <div class="card-header"><h2 class="text-capitalize">add doctor</h2></div>
             <div class="card-body"><!--card-body begin-->
                <form action="insert_doctor.php" method="post"><!--form begin-->
                    <div class="row"> <!--row  begin-->
                        <div class="col-md-2"><!--col-md-3 begin-->
                            <label for="" class="text-capitalize"> doctor name</label>
                        </div><!--col-md-3 end-->
                        <div class="col-md-6"><!--col-md-3 begin-->
                           <input type="text" name="doc_name" class="form-control" required  placeholder="Enter Doctor Name" >
                        </div><!--col-md-3 end-->
                    </div><!--row  end-->
                    <div class="row my-4"> <!--row  begin-->
                        <div class="col-md-2"><!--col-md-3 begin-->
                            <label for="" class="text-capitalize"> specialization</label>
                        </div><!--col-md-3 end-->
                        <div class="col-md-6"><!--col-md-3 begin-->
                          <select name="specialization" id="specialization" class="form-control" required ><!--specializarion begin-->
                          <option >Select Doctor specilization</option>
                           <?php
                            $get_spec = "select * from doc_specilaizarion";
                            $run_spec = mysqli_query($con,$get_spec);
                            while($row_spec = mysqli_fetch_array($run_spec)){
                                $specialization_id =$row_spec['specialization_id'];
                                $specialization_name =$row_spec['specialization'];
                                echo" <option value='$specialization_name'>$specialization_name </option>";                                                                                  
                   
                            }

                            
                           ?>
                          </select> <!--specializarion end-->
                        </div><!--col-md-3 end-->
                    </div><!--row  end-->

                    <div class="row my-4"> <!--row  begin-->
                        <div class="col-md-2"><!--col-md-3 begin-->
                            <label for="" class="text-capitalize"> doctor clinic address</label>
                        </div><!--col-md-3 end-->
                        <div class="col-md-6"><!--col-md-3 begin-->
                           <textarea name="address" id="address" class="form-control"></textarea>
                        </div><!--col-md-3 end-->
                    </div><!--row  end-->
                    <div class="row my-4"> <!--row  begin-->
                        <div class="col-md-2"><!--col-md-3 begin-->
                            <label for="" class="text-capitalize">Doctor Consultancy Fees</label>
                        </div><!--col-md-3 end-->
                        <div class="col-md-6"><!--col-md-3 begin-->
                           <input type="text" name="consultancy_fees" id="consultancy_fees" class="form-control" required  placeholder="Doctor Consultancy Fee" >
                        </div><!--col-md-3 end-->
                    </div><!--row  end-->
                    <div class="row my-4"> <!--row  begin-->
                        <div class="col-md-2"><!--col-md-3 begin-->
                            <label for="" class="text-capitalize">Doctor contact</label>
                        </div><!--col-md-3 end-->
                        <div class="col-md-6"><!--col-md-3 begin-->
                           <input type="number" name="doc_contact" id="contact" class="form-control" required  placeholder="Enter Doctor Contact" >
                        </div><!--col-md-3 end-->
                    </div><!--row  end-->
                    <div class="row my-4"> <!--row  begin-->
                        <div class="col-md-2"><!--col-md-3 begin-->
                            <label for="" class="text-capitalize">Doctor email</label>
                        </div><!--col-md-3 end-->
                        <div class="col-md-6"><!--col-md-3 begin-->
                           <input type="email" name="doc_email" id="email" class="form-control" required  placeholder="Enter Doctor Email" >
                        </div><!--col-md-3 end-->
                    </div><!--row  end-->
                    <div class="row my-4"> <!--row  begin-->
                        <div class="col-md-2"><!--col-md-3 begin-->
                            <label for="" class="text-capitalize">password</label>
                        </div><!--col-md-3 end-->
                        <div class="col-md-6"><!--col-md-3 begin-->
                           <input type="password" name="pass" class="form-control" required  placeholder="Enter Password" >
                        </div><!--col-md-3 end-->
                    </div><!--row  end-->
                    <div class="row my-4"> <!--row  begin-->
                        <div class="col-md-2"><!--col-md-3 begin-->
                            <label for="" class="text-capitalize">confirm password</label>
                        </div><!--col-md-3 end-->
                        <div class="col-md-6"><!--col-md-3 begin-->
                           <input type="password" name="confirm_pass" id="submit" class="form-control" required  placeholder="Enter Password" >
                        </div><!--col-md-3 end-->
                    </div><!--row  end-->
                    <div class="row my-4"> <!--row  begin-->
                    <div class="col-md-2"><!--col-md-3 begin-->
                          
                        </div><!--col-md-3 end-->
                        <div class="col-md-6"><!--col-md-3 begin-->
                          <button type="submit" name="submit" id="submit" class="btn btn-primary display-block">Submit Form</button>
                        </div><!--col-md-3 end-->
                    </div><!--row  end-->
                </form><!--form end-->
                 </div><!--card-body end-->
             </div>
         </div> <!--card end-->
     </div><!--col-lg-12 end-->
 </div><!--row end-->
    

 <script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>