
<?php   

 include('includes/db.php');
 if(isset($_POST['submit'])){
    $pat_name = $_POST['pat_name'];
    $pat_contact = $_POST['pat_contact'];
    $pat_email = $_POST['pat_email'];
    $gender = $_POST['gender'];
    $pat_address = $_POST['pat_address'];
    $pat_age = $_POST['pat_age'];
    $pat_medical = $_POST['pat_medical'];
    
    $insert_pat ="insert into patients (pat_name,pat_contact,pat_email,gender,pat_address,pat_age,pat_medical)
     values('$pat_name','$pat_contact','$pat_email','$gender','$pat_address','$pat_age','$pat_medical') ";
     $run_pat = mysqli_query($con,$insert_pat);
     if( $run_pat){
        echo "<script> alert(' Patient Record Add successfully') </script>";
        echo "<script>window.open('add_patient.php', '_self') </script>";
     }else{
         echo "bad".die(mysqli_error($con));
     }

 
 }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/patient.css">
</head>

<body>
    <section class="patient-section">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb">
                    <li class="text-uppercase">doctor | add patient</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="patient-card w-75 mx-auto">
        <!--patient-card begin-->
        <div class="card">
            <!--card begin-->
            <div class="card-header">
                <!--card-header begin-->
                <h3 class="text-capitalize">add patient</h3>
            </div>
            <!--card-header end-->
            <div class="card-body">
                <form action="add_patient.php" method="post">
                    <div class="row">
                        <!--row begin-->
                        <div class="col-md-3">
                            <!--col-md-3 begin-->
                            <div class="form-group">
                                <!--form-group begin-->
                                <label for="" class="text-capitalize"> patient name</label>
                            </div>
                            <!--form-group end-->
                        </div>
                        <!--col-md-3 end-->
                        <div class="col-md-6">
                            <!--col-md-6 begin-->
                            <div class="form-group">
                                <!--form-group begin-->
                                <input type="text" class="form-control" name="pat_name"
                                    placeholder=" Enter Patient Name" id="pat_name" required>
                            </div>
                            <!--form-group end-->
                        </div>
                        <!--col-md-6 end-->
                    </div>
                    <!--row end-->
                    <div class="row">
                        <!--row begin-->
                        <div class="col-md-3">
                            <!--col-md-3 begin-->
                            <div class="form-group">
                                <!--form-group begin-->
                                <label for="" class="text-capitalize"> patient contact</label>
                            </div>
                            <!--form-group end-->
                        </div>
                        <!--col-md-3 end-->
                        <div class="col-md-6">
                            <!--col-md-6 begin-->
                            <div class="form-group">
                                <!--form-group begin-->
                                <input type="number" class="form-control" name="pat_contact"
                                    placeholder="Enter Patient Contact" id="pat_contact" required>
                            </div>
                            <!--form-group end-->
                        </div>
                        <!--col-md-6 end-->
                    </div>
                    <!--row end-->
                    <div class="row">
                        <!--row begin-->
                        <div class="col-md-3">
                            <!--col-md-3 begin-->
                            <div class="form-group">
                                <!--form-group begin-->
                                <label for="" class="text-capitalize"> patient email</label>
                            </div>
                            <!--form-group end-->
                        </div>
                        <!--col-md-3 end-->
                        <div class="col-md-6">
                            <!--col-md-6 begin-->
                            <div class="form-group">
                                <!--form-group begin-->
                                <input type="email" class="form-control" name="pat_email"
                                    placeholder=" Enter Patient Email" id="pat_email" required>
                            </div>
                            <!--form-group end-->
                        </div>
                        <!--col-md-6 end-->
                    </div>
                    <!--row end-->
                    <div class="row">
                        <!--row begin-->
                        <div class="col-md-3">
                            <!--col-md-3 begin-->
                            <div class="form-group">
                                <!--form-group begin-->
                                <label for="" class="text-capitalize"> select gender</label>
                            </div>
                            <!--form-group end-->
                        </div>
                        <!--col-md-3 end-->
                        <div class="col-md-6">
                            <!--col-md-6 begin-->
                            <div class="form-group">
                                <div class="clip-radio radio-primary">
                                    <input type="radio" name="gender" value="male" class="mx-2"  required>
                                    <label for="">Female</label>
                                    <input type="radio" name="gender" value="female" class="mx-2"required>

                                    <label for="">Male</label>
                                </div>
                            </div>
                            <!--form-group end-->
                        </div>
                        <!--col-md-6 end-->
                    </div>
                    <!--row end-->
                    <div class="row">
                        <!--row begin-->
                        <div class="col-md-3">
                            <!--col-md-3 begin-->
                            <div class="form-group">
                                <!--form-group begin-->
                                <label for="" class="text-capitalize"> patient address</label>
                            </div>
                            <!--form-group end-->
                        </div>
                        <!--col-md-3 end-->
                        <div class="col-md-6">
                            <!--col-md-6 begin-->
                            <div class="form-group">
                                <!--form-group begin-->
                                <textarea name="pat_address" id="pat_address" class="form-control" id="pat_address" required></textarea>
                            </div>
                            <!--form-group end-->
                        </div>
                        <!--col-md-6 end-->
                    </div>
                    <!--row end-->
                    <div class="row">
                        <!--row begin-->
                        <div class="col-md-3">
                            <!--col-md-3 begin-->
                            <div class="form-group">
                                <!--form-group begin-->
                                <label for="" class="text-capitalize"> patient age</label>
                            </div>
                            <!--form-group end-->
                        </div>
                        <!--col-md-3 end-->
                        <div class="col-md-6">
                            <!--col-md-6 begin-->
                            <div class="form-group">
                                <!--form-group begin-->
                                <input type="text" class="form-control" name="pat_age"id="pat_age"  placeholder="Enter Patient Age" required>
                            </div>
                            <!--form-group end-->
                        </div>
                        <!--col-md-6 end-->
                    </div>
                    <div class="row">
                        <!--row begin-->
                        <div class="col-md-3">
                            <!--col-md-3 begin-->
                            <div class="form-group">
                                <!--form-group begin-->
                                <label for="" class="text-capitalize"> Medical History</label>
                            </div>
                            <!--form-group end-->
                        </div>
                        <!--col-md-3 end-->
                        <div class="col-md-6">
                            <!--col-md-6 begin-->
                            <div class="form-group">
                                <!--form-group begin-->
                                <textarea name="pat_medical" id="pat_medical" cols="30" rows=""
                                    class="form-control" required>Enter Medical History if any</textarea>
                            </div>
                            <!--form-group end-->
                        </div>
                        <!--col-md-6 end-->
                    </div>
                    <!--row end-->

                    <div class="row">
                        <!--row begin-->
                        <div class="col-md-3">
                            >
                        </div>
                        <!--col-md-3 end-->
                        <div class="col-md-6">
                            <button class="btn btn-primary " type="submit" name="submit">Submit</button>
                        </div>
                        <!--col-md-6 end-->
                    </div>

                </form>
            </div>
        </div>
        <!--card end-->
    </section>
    <!--patient-card end-->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>