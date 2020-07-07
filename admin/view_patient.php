<?php

include('includes/db.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor | View Patient</title>
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
       
    </style>
</head>

<body>
    <section class="view-section">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb">
                    <li class="text-capitalize">
                        doctor | view patient
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="view-section-1">
        <div class="container my-5">

        <?php  
          if(isset($_GET['view_patient'])){
          $vid = $_GET['view_patient'];
          $get_pat = "select * from patients where id='$vid '";
          $run_pat = mysqli_query($con, $get_pat);
          while($row_pat=mysqli_fetch_array($run_pat)){
          $pat_name = $row_pat['pat_name'];
          $pat_contact = $row_pat['pat_contact'];
          $pat_gender = $row_pat['gender'];
          $pat_address = $row_pat['pat_address'];
          $pat_age = $row_pat['pat_age'];
          $pat_date = $row_pat['date'];
          $pat_email = $row_pat['pat_email'];
          $pat_medical = $row_pat['pat_medical'];
        }
        ?>
            <table border="1" class="table table-bordered">
                <tr align="center">
                    <td colspan="4" style="font-size:20px;">Patients Details</td>
                </tr>
                <tr>
                    <th>Patient Name</th>
                    <td><?php echo $pat_name;?></td>
                    <th>Patient Email</th>
                    <td><?php echo $pat_email;?></td>
                </tr>
                <tr>
                    <th>Patient phone Number</th>
                    <td><?php echo $pat_contact;?></td>
                    <th>Patient Address</th>
                    <td><?php echo $pat_address;?></td>
                </tr>
                <tr>
                    <th>Patient Gender</th>
                    <td><?php echo $pat_gender;?></td>
                    <th>Patient Age</th>
                    <td><?php echo $pat_age;?></td>
                </tr>
                <tr>
                    <th>Patient medical History (if any)</th>
                    <td><?php  echo $pat_medical;?></td>
                    <th>Patient Reg Date</th>
                    <td><?php  echo $pat_date;?></td>
                </tr>

            </table>
            <?php }?>
        </div>
    </section>


    <section class="view-section-2">

    <?php 
    if(isset($_GET['view_patient'])){
          $vid = $_GET['view_patient'];

    }
          ?>
        <div class="container my-5">
            <table border="1" class="table table-bordered">
                <tr>
                    <td colspan="8" style="font-size:20px;">Medical History</td>
                </tr>
                <tr>
                    <th>#</th>
                    <th>Blood Pressure</th>
                    <th>Weight</th>
                    <th>Blood Sugar</th>
                    <th>Body Temprature</th>
                    <th>Medical Prescription</th>
                    <th>Visit Date</th>
                </tr>
                <tbody>

                <?php 
                if(isset($_GET['view_patient']))
                $i=0;
                $vid =$_GET['view_patient'];
                 $get_medical = "select * from medical_history where PAT_ID='$vid'";
                 $run_medical = mysqli_query($con,$get_medical);
                 while($row_med=mysqli_fetch_array( $run_medical)){
                     $bp = $row_med['bp'];
                     $weight = $row_med['weight'];
                     $bs = $row_med['bs'];
                     $bt = $row_med['bt'];
                     $mp = $row_med['mp'];
                     $date = $row_med['date'];
                $i++;
                

                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $bp; ?></td>
                        <td><?php echo $weight; ?></td>
                        <td><?php echo $bs; ?></td>
                        <td><?php echo $bt; ?></td>
                        <td><?php echo $mp; ?></td>
                        <td><?php echo $date; ?></td>
                    </tr>
                </tbody>

                <?php  } ?>

            </table>
           
           
                    </div>
                </div>
            </div>
        </div>
    </section>

    





    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>


