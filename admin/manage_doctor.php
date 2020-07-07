<?php

   include('includes/db.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manage Doctor</title>
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
                        admin | manage doctore records
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
                                <th scope="col">Specializationt</th>
                                <th scope="col">Doctor Name</th>
                                <th scope="col">creation Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                              $i=0;
                            $get_doc = "select * from doctor";
                            $run_doc = mysqli_query($con,$get_doc);
                            while($row_doc=mysqli_fetch_array($run_doc)){
                               $doc_id = $row_doc['id'];
                               $specialization = $row_doc['specialization'];
                               $doc_name = $row_doc['doctor_name'];
                               $creation_date= $row_doc['date'];
                               $i++;
                            ?>
                            
                           
                            <tr>
                                <th scope="row"><?php echo $i?></th>
                                <td><?php echo $specialization ?></td>
                                <td><?php echo $doc_name?></td>
                                <td><?php echo $creation_date?></td>
                                <td><span> <a href="index.php?edit_doctor=<?php echo $doc_id ?>"> <i class="far fa-edit"></i></a>
                                </span> <span> <a href="manage_doctor.php?del=<?php echo $doc_id ?>"><i class="far fa-trash-alt"></i></a> </td>
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
     $del_spec ="delete  from doctor where id='$del_id'";
    $del = mysqli_query($con,$del_spec);
    if($del){
        echo "<script> alert(' Doctor Record deleted successfully') </script>";
        echo "<script>window.open('manage_doctor.php', '_self') </script>";
    }else{
        "bad".die(mysqli_error($con));
    }
  }

 

?>