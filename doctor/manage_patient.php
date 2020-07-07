<?php

   include('includes/db.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manage Patient</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<!--font awesome-->
<link href="./font-aw/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="css/patient.css">
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
                        admin | manage patient records
                    </li>
                </ol>
                <!--breadcrumb end-->
            </div>
            <!--col end-->
        </div>
        <!--row end-->
    </section>
    <!--spec-1 end-->
            <!--row end-->
            <div class="card my-4">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Patient Name</th>
                                <th scope="col">Patient Contact Number</th>
                                <th scope="col">Patient Gender</th>
                                <th scope="col">creation Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                              $i=0;
                            $get_pat = "select * from patients";
                            $run_pat = mysqli_query($con,$get_pat);
                            while($row_pat=mysqli_fetch_array($run_pat)){
                               $pat_id = $row_pat['id'];
                               $pat_name = $row_pat['pat_name'];
                               $pat_contact = $row_pat['pat_contact'];
                               $pat_gender = $row_pat['gender'];
                               $creation_date= $row_pat['date'];
                               $i++;
                            ?>
                            
                           
                            <tr>
                                <th scope="row"><?php echo $i?></th>
                                <td><?php echo $pat_name?></td>
                                <td><?php echo $pat_contact?></td>
                                <td><?php echo $pat_gender?></td>
                                <td><?php echo $creation_date?></td>
                                <td><span> <a href="index.php?edit_patient=<?php echo $pat_id ?>" class="mx-2"> <i class="far fa-edit"></i></a>
                                </span> <span> <a href="manage_patient.php?del=<?php echo $pat_id ?>" class="mx-2"><i class="far fa-trash-alt"></i></a></span>
                                <span> <a href="index.php?view_patient=<?php echo $pat_id; ?>" class="mx-2"><i class="far fa-eye"></i></a></span> 
                            </td>
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
     $del_pat ="delete  from patients where id='$del_id'";
    $del = mysqli_query($con,$del_pat);
    if($del){
        echo "<script> alert(' Patient Record deleted successfully') </script>";
        echo "<script>window.open('manage_patient.php', '_self') </script>";
    }else{
        "bad".die(mysqli_error($con));
    }
  }

 

?>