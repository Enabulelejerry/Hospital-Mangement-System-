<?php  
include('includes/db.php') ;
 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Patient</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/patient.css">
    <link rel="stylesheet" href="font-aw/css/all.css">
</head>

<body>
    <section class="search-section">
        <!--saerch-search Begin-->
        <div class="row">
            <div class="col">
                <ul class="breadcrumb">
                    <li class="text-uppercase">
                        doctor | search
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--saerch-search end-->

    <section class="search-form my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="search_patient.php" method="post">
                        <div class="form-group">
                            <label for="" class="text-capitalize">search by name or phone number</label>
                            <input type="text" class="form-control" name="search_data" required>
                        </div>
                        <button type="submit" name="search" class="btn btn-primary">Search</button>
                    </form>

                    <?php   
                        if(isset($_POST['search'])){
                       $search_data = $_POST['search_data'];
                        
                    ?>
                    <div class="card  my-5">
                        <div class="card-body">
                            <p class="text-center"> Result against "<?php  echo $search_data ?>" Keywords</p>
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
                                  $get_pat = "select * from patients where pat_name ='$search_data' || pat_contact ='$search_data'";
                                  $run_pat = mysqli_query($con,$get_pat);
                                  $num = mysqli_num_rows($run_pat);
                                  if($num>0){
                                      while($row_pat=mysqli_fetch_array($run_pat)){
                                          $pat_id =$row_pat['id'];
                                          $pat_name = $row_pat['pat_name'];
                                          $pat_contact = $row_pat['pat_contact'];
                                          $pat_gender = $row_pat['gender'];
                                          $creation_date = $row_pat['date'];
                                      $i++;
                                  


                                   ?>

                                    <tr>
                                        <th scope="row"><?php echo $i;  ?></th>
                                        <td><?php echo $pat_name ; ?></td>
                                        <td><?php echo $pat_contact ; ?></td>
                                        <td><?php echo $pat_gender ; ?></td>
                                        <td><?php echo $creation_date ; ?></td>
                                        <td><span> <a href="edit_patient.php?pat_id=<?php echo $pat_id ?>" class="mx-3"> <i
                                                        class="far fa-edit"></i></a>
                                            </span> <span> <a href="manage_patient.php?del=<?php echo $pat_id ?>"><i
                                                        class="far fa-trash-alt"></i></a> 
                                        </td>
                                    </tr>
                                    <?php  } }else { ?>
                                       <tr>  
                                     <td colspan="8"> No Record Found Against This Search  </td>
                                    </tr>
                                    <?php }  ?>   
                                </tbody>
                                
                            </table>
                        </div>
                        <div class="cardfooter">
                         <a href="index.php?search" class="btn btn-primary mb-2 mx-3">
                                <i class="fa fa-arrow-circle-left"></i> Back
                         </a>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>



    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>