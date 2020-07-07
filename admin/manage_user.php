<?php

   include('includes/db.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manage user</title>
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
                        admin | manage User
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
                                <th scope="col">Full name</th>
                                <th scope="col">Address</th>
                                <th scope="col">city</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Email</th>
                                <th scope="col">creation Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                              $i=0;
                            $get_user = "select * from user";
                            $run_user = mysqli_query($con,$get_user);
                            while($row_user=mysqli_fetch_array($run_user)){
                               $user_id = $row_user['id'];
                               $name = $row_user['name'];
                               $address = $row_user['address'];
                               $city = $row_user['city'];
                               $gender = $row_user['gender'];
                               $email = $row_user['email'];
                               $creation_date= $row_user['date'];
                               $i++;
                            ?>
                            
                           
                            <tr>
                                <th scope="row"><?php echo $i?></th>
                                <td><?php echo $name ?></td>
                                <td><?php echo $address?></td>
                                <td><?php echo $city?></td>
                                <td><?php echo $gender?></td>
                                <td><?php echo $email?></td>
                                <td><?php echo $creation_date?></td>
                                <td>
                             <span> <a href="manage_user.php?del=<?php echo $user_id ?>"><i class="far fa-trash-alt"></i></a>
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
     $del_user ="delete  from user where id='$del_id'";
    $del = mysqli_query($con,$del_user);
    if($del){
        echo "<script> alert(' User Record deleted successfully') </script>";
        echo "<script>window.open('manage_user.php', '_self') </script>";
    }else{
        "bad".die(mysqli_error($con));
    }
  }

 

?>