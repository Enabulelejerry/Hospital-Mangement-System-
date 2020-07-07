<?php

   include('includes/db.php');
 if(isset($_POST['submit'])){
    $doc_spec = $_POST['doc_spec'];

    echo $doc_spec;
    $insert_spec = "insert into doc_specilaizarion (specialization) values('$doc_spec')";
   if(mysqli_query($con,$insert_spec))  {
      echo "<script>alert('Doctor Specialization added successfully')</script>";
      echo "<script>window.open('doctor_specialization.php', '_self')</script>";
   }else{
     "bad".die(mysqli_error($con)); 
   }
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Doctor Specialization</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<!--font awesome-->
<link href="./font-aw/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
</head>

<body>
    <section class="spec-1">
        <!--spec-1 begin-->
        <div class="row">
            <!--row begin-->
            <div class="col">
                <!--col begin-->
                <ol class="breadcrumb">
                    <!--breadcrumb begin-->
                    <li class="active text-uppercase">
                        admin | add doctor Specialization
                    </li>
                </ol>
                <!--breadcrumb end-->
            </div>
            <!--col end-->
        </div>
        <!--row end-->
    </section>
    <!--spec-1 end-->

    <section class="spec-2">
        <!--spec-2 begin-->
        <div class="container-fluid">
            <!--container-fluid begin-->
            <div class="row">
                <!--row begin-->
                <div class="col-md-6">
                    <!--col-md-6 begin-->
                    <div class="row">
                        <!--row begin-->
                        <div class="col">
                            <!--col begin-->
                            <form action="doctor_specialization.php" method="post" class="w-75 mx-auto">
                                <!--form begin-->
                                <h4 class="text-capitalize my-5"> doctor Specialization</h3>
                                    <div class="row">
                                        <!--row begin-->
                                        <div class="col">
                                            <label for="">Doctor Specialization</label>
                                        </div>
                                    </div>
                                    <!--row end-->
                                    <div class="row">
                                        <!--row begin-->
                                        <div class="col">
                                            <input type="text" name="doc_spec" class="form-control my-3"
                                                placeholder="Enter Specialization" required>
                                        </div>
                                        <!--row end-->
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </form>
                            <!--form end-->
                        </div>
                        <!--col end-->
                    </div>
                    <!--row end-->
                </div>
                <!--col-md-6 end-->
                <div class="col-md-6">

                </div>

            </div>
            <!--row end-->
            <div class="card my-4">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Specializationt</th>
                                <th scope="col">Creation Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                              $i=0;
                            $get_spec = "select * from doc_specilaizarion";
                            $run_spec = mysqli_query($con,$get_spec);
                            while($row_spec=mysqli_fetch_array($run_spec)){
                               $specialization_id = $row_spec['specialization_id'];
                               $specialization = $row_spec['specialization'];
                               $creation_date= $row_spec['creation_date'];
                               $i++;
                            ?>
                          
                            <tr>
                                <th scope="row"><?php echo $i?></th>
                                <td><?php echo $specialization ?></td>
                                <td><?php echo $creation_date?></td>
                                <td><span> <a href=" index.php?edit_specialization=<?php echo $specialization_id ?>"> <i class="far fa-edit"></i></a>
                                </span> <span> <a href="doctor_specialization.php?del=<?php echo $specialization_id ?>"><i class="far fa-trash-alt"></i></a> </td>
                            </tr>
                            <?php   } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--container-fluid end-->
    </section>
    <!--spec-2 begin-->


    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

<?php  
  if(isset($_GET['del'])){
     $del_id = $_GET['del'];
     $del_spec ="delete  from doc_specilaizarion where specialization_id='$del_id'";
    $del = mysqli_query($con,$del_spec);
    if($del){
        echo "<script> alert(' Doctor Specialization deleted successfully') </script>";
        echo "<script>window.open('doctor_specialization.php', '_self') </script>";
    }else{
        "bad".die(mysqli_error($con));
    }
  }

 

?>