<?php
   include('includes/db.php');
   if(isset($_GET['edit_doctor'])){
    $doc_id = $_GET['edit_doctor'];
    $get_doc = "select * from doctor where id ='$doc_id'";
    $run_doc = mysqli_query($con,$get_doc);
     while($row_doc=mysqli_fetch_array($run_doc)){
         $doctor_name = $row_doc['doctor_name'];
         $specialization = $row_doc['specialization'];
         $address= $row_doc['address'];
         $consultancy_fees = $row_doc['consultancy_fees'];
         $doc_contact = $row_doc['doc_contact'];
         $doc_email = $row_doc['doc_email'];

   }
     


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage doctor</title>
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
                  dashboard | edit doctor info
              </li>
            </ul>
        </div>
    </div>
    </div>
</div>
 <div class="row"> <!--row begin-->
     <div class="col-lg-12"><!--col-lg-12 begin-->
         <div class="card"><!--card begin-->
             <div class="card-header"><h2 class="text-capitalize">Edit doctor</h2></div>
             <div class="card-body"><!--card-body begin-->
                <form action="edit_doctor.php" method="post"><!--form begin-->
                    <div class="row"> <!--row  begin-->
                        <div class="col-md-2"><!--col-md-3 begin-->
                            <label for="" class="text-capitalize"> doctor name</label>
                        </div><!--col-md-3 end-->
                        <div class="col-md-6"><!--col-md-3 begin-->
                           <input type="text" name="doc_name" class="form-control" required  value="<?php echo $doctor_name; ?>" >
                        </div><!--col-md-3 end-->
                    </div><!--row  end-->
                    <div class="row my-4"> <!--row  begin-->
                        <div class="col-md-2"><!--col-md-3 begin-->
                            <label for="" class="text-capitalize"> specialization</label>
                        </div><!--col-md-3 end-->
                        <div class="col-md-6"><!--col-md-3 begin-->
                          <select name="specialization" id="specialization" class="form-control"><!--specializarion begin-->
                          <option ><?php echo $specialization; ?></option>
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
                           <textarea name="address" id="address" class="form-control"> <?php echo $address; ?></textarea>
                        </div><!--col-md-3 end-->
                    </div><!--row  end-->
                    <div class="row my-4"> <!--row  begin-->
                        <div class="col-md-2"><!--col-md-3 begin-->
                            <label for="" class="text-capitalize">Doctor Consultancy Fees</label>
                        </div><!--col-md-3 end-->
                        <div class="col-md-6"><!--col-md-3 begin-->
                           <input type="text" name="consultancy_fees" id="consultancy_fees" class="form-control" value="<?php echo $consultancy_fees ?>">
                        </div><!--col-md-3 end-->
                    </div><!--row  end-->
                    <div class="row my-4"> <!--row  begin-->
                        <div class="col-md-2"><!--col-md-3 begin-->
                            <label for="" class="text-capitalize">Doctor contact</label>
                        </div><!--col-md-3 end-->
                        <div class="col-md-6"><!--col-md-3 begin-->
                           <input type="number" name="doc_contact" id="contact" class="form-control" required value="<?php echo $doc_contact ?>" >
                        </div><!--col-md-3 end-->
                    </div><!--row  end-->
                    <div class="row my-4"> <!--row  begin-->
                        <div class="col-md-2"><!--col-md-3 begin-->
                            <label for="" class="text-capitalize">Doctor email</label>
                        </div><!--col-md-3 end-->
                        <div class="col-md-6"><!--col-md-3 begin-->
                           <input type="email" name="doc_email" id="email" class="form-control" required  value="<?php echo $doc_email ?>" >
                        </div><!--col-md-3 end-->
                    </div><!--row  end-->
                    <div class="row my-4"> <!--row  begin-->
                        <div class="col-md-2"><!--col-md-3 begin-->
                           
                        </div><!--col-md-3 end-->
                        <div class="col-md-6"><!--col-md-3 begin-->
                           <input type="hidden" name="doc_id" class="form-control" required value="<?php echo $doc_id ; ?>"  >
                        </div><!--col-md-3 end-->
                    </div><!--row  end-->
        
                    <div class="row my-4"> <!--row  begin-->
                    <div class="col-md-2"><!--col-md-3 begin-->
                        </div><!--col-md-3 end-->
                        <div class="col-md-6"><!--col-md-3 begin-->
                          <button type="submit" name="submit" id="submit" class="btn btn-primary display-block">Update</button>
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
    <script src="js/main.js"></script>
</body>
</html>

<?php  } ?>


<?php

 if(isset($_POST['submit'])){
    $doc_name = $_POST['doc_name'];
    echo $doc_name;
    $specialization = $_POST['specialization'];
    echo $specialization ;
    $address = $_POST['address'];
    $consultancy_fees = $_POST['consultancy_fees'];
    $doc_contact = $_POST['doc_contact'];
    $doc_id = $_POST['doc_id'];
    $doc_email = $_POST['doc_email'];



   $update_doc = "update doctor set doctor_name ='$doc_name ', specialization='$specialization',
  address='$address',consultancy_fees='$consultancy_fees',doc_contact='$doc_contact',doc_email='doc_email' where id ='$doc_id'";
  $doc_run = mysqli_query($con,$update_doc);
   if($doc_run){
    echo "<script> alert('Your Doctor Record has been updated') </script>";
    echo "<script>window.open('index.php?manage_doctor', '_self') </script>";
   }else{
       echo 'bad'.die(mysqli_error($con));
   }
  
 }

?>