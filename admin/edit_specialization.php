<?php

   include('includes/db.php');

    if(isset($_GET['edit_specialization'])){
        $spec_id =$_GET['edit_specialization'];
        $get_spec = "select * from  doc_specilaizarion
        where specialization_id ='$spec_id '";
        $run_spec = mysqli_query($con,$get_spec);
        while($row_spec= mysqli_fetch_array($run_spec )){
          $specialization = $row_spec['specialization'];

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
                            <form action="edit_specialization.php" method="post" class="w-75 mx-auto">
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
                                        <input type="text" name="doc_spec" class="form-control my-3"  value="<?php echo $specialization ?>"  >
                                        <input type="hidden" name="id" class="form-control my-3"
                                        placeholder="Enter Specialization" value="<?php echo $spec_id ?>" >
                                        </div>
                                        <!--row end-->
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
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
            
            <!--container-fluid end-->
    </section>
    <!--spec-2 begin-->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

<?php   } ?>

<?phP  

if(isset($_POST['submit'])){
    $doc_spec = $_POST['doc_spec'];
    $update_id = $_POST['id'];

    $update_spec ="update doc_specilaizarion set specialization='$doc_spec' where specialization_id ='$update_id'";
    $run_spec = mysqli_query($con,$update_spec );
    if($run_spec){
        echo "<script> alert('Your Doctor Specialization has been updated') </script>";
        echo "<script>window.open('index.php?specialization', '_self') </script>";
    }else{
        echo"bad";
    }

    
}


?>
