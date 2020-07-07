<?php  
session_start();
 include('includes/db.php');
 if(!isset($_SESSION['email'])){
  echo"<script>window.open('login.php','_self')</script>";
 }else{ 
 $email = $_SESSION['email'];
 $get_doc = "select * from doctor where doc_email='$email'";
 $query_doc = mysqli_query($con,$get_doc);
if($query_doc){
  $row = mysqli_fetch_array($query_doc);
  $doc_id = $row['id'];
  $doc_name = $row['doctor_name'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor-Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
 
    <link rel="stylesheet" href="font-aw/css/all.css">
    <link rel="stylesheet" type="text/css" href="./CSS/style.css">

    <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Ion Slider -->
  <link rel="stylesheet" href="./plugins/ion-rangeslider/css/ion.rangeSlider.min.css">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="./plugins/bootstrap-slider/css/bootstrap-slider.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark bg-dark">
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <!-- Messages Dropdown Menu -->
            <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown ">
        <a class="nav-link mg-1" data-toggle="dropdown" href="#" >
          <i class="fas fa-user-tie"></i> <?php  echo $doc_name; ?> <b class="caret"></b>
   
        </a>
      <div class="dropdown-menu navbar-dark bg-dark" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="c_password.php"> <i class="fa fa-fw fa-user"></i>Change password</a>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php?edit_doctor=<?php echo $doc_id; ?>"> <i class="fa fa-fw fa-user" ></i> Profile </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php"> <i class="fa fa-fw fa-power-off" ></i> Logout </a>
        </div>
        
       
      </li>
 </div>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="./dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">HMS</span>
    </a>
    
    <?php include('includes/sidebar.php');?>
   

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-wrapper-1 ml-2 mr-2">
    <div class="conatiner"><!-- conatiner-fluid begin -->
       <?php
           if(isset($_GET['dashboard'])){
             include("dashboard.php");
           }if(isset($_GET['add_patient'])){
             include("add_patient.php");

           }if(isset($_GET['add_doctor'])){
             include("insert_doctor.php");
           }

           if(isset($_GET['manage_patient'])){
            // the delete is in another page 
             include("manage_patient.php");
           }
           if(isset($_GET['edit_patient'])){
            // the delete is in another page 
             include("edit_patient.php");
           }
           if(isset($_GET['edit_patient'])){
            // the delete is in another page 
             include("edit_patient.php");
           }

           if(isset($_GET['view_patient'])){
               
            include("view_patient.php");
          }

          if(isset($_GET['manage_user'])){
            include("manage_user.php");

          }

          if(isset($_GET['search'])){
            include("search_patient.php");

          }

          
          if(isset($_GET['edit_doctor'])){
            include("edit_doctor.php");

          }


         


         

        

          


         

         

           
       ?>
    </div> <!-- conatiner-fluid end -->
    
  </div>
  </div>
  <!-- /.content-wrapper -->

 
        <?php  }  ?>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.2
    </div>
    <strong>Copyright &copy; 2014-2019 Jtech Design </strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
  
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
<!-- Ion Slider -->
<script src="./plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<!-- Bootstrap slider -->
<script src="./plugins/bootstrap-slider/bootstrap-slider.min.js"></script>
<script>
  $(function () {
    /* BOOTSTRAP SLIDER */
    $('.slider').bootstrapSlider()

    /* ION SLIDER */
    $('#range_1').ionRangeSlider({
      min     : 0,
      max     : 5000,
      from    : 1000,
      to      : 4000,
      type    : 'double',
      step    : 1,
      prefix  : '$',
      prettify: false,
      hasGrid : true
    })
    $('#range_2').ionRangeSlider()

    $('#range_5').ionRangeSlider({
      min     : 0,
      max     : 10,
      type    : 'single',
      step    : 0.1,
      postfix : ' mm',
      prettify: false,
      hasGrid : true
    })
    $('#range_6').ionRangeSlider({
      min     : -50,
      max     : 50,
      from    : 0,
      type    : 'single',
      step    : 1,
      postfix : '°',
      prettify: false,
      hasGrid : true
    })

    $('#range_4').ionRangeSlider({
      type      : 'single',
      step      : 100,
      postfix   : ' light years',
      from      : 55000,
      hideMinMax: true,
      hideFromTo: false
    })
    $('#range_3').ionRangeSlider({
      type    : 'double',
      postfix : ' miles',
      step    : 10000,
      from    : 25000000,
      to      : 35000000,
      onChange: function (obj) {
        var t = ''
        for (var prop in obj) {
          t += prop + ': ' + obj[prop] + '\r\n'
        }
        $('#result').html(t)
      },
      onLoad  : function (obj) {
        //
      }
    })
  })
</script>
</body>
</html>






