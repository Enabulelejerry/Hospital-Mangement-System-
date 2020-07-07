<?php  
include('includes/db.php') ;
 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="font-aw/css/all.css">
</head>

<body>
    <section class="search-section">
        <!--saerch-search Begin-->
        <div class="row">
            <div class="col">
                <ul class="breadcrumb">
                    <li class="text-uppercase">
                        doctor | Dashboard
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <div class="container section-2 mx-auto">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- col-lg-4 col-md-6 begin-->
                <div class="card card-primary ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-3">
                                <i class="fas fa-user fa-5x"></i>
                            </div>
                            <div class="col-md-9 text-md-right">
                                <div class="huge">
                                    Profile
                                </div>
                                <div class="text"></div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer card-footer-1">
                        <a href="index.php?edit_doctor=<?php echo $doc_id; ?>">
                            <span class="float-left">View Profile</span>

                            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                    </div>

                </div>
            </div> <!-- col-lg-3 col-md-6 end-->


            <div class="col-lg-4 col-md-6">
                <!-- col-lg-3 col-md-6 begin-->
                <div class="card card-success ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-3">
                                <i class="fas fa-users fa-5x"></i>
                            </div>
                            <div class="col-md-9 text-md-right">

                                <div class="huge">
                                    Appointment
                                </div>
                                <div class="text"></div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer card-footer-2">
                        <a href="index.php?appointment">
                            <span class="float-left">View Details</span>

                            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
                        </a>
                    </div>

                </div>
            </div> <!-- col-lg-3 col-md-6 end-->

            
        </div>
    </div>







    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>