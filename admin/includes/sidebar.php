 <!-- Sidebar -->
 <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Admin Name: <?php  echo $admin_name; ?> </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 sidebar-1" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="index.php?dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link" data-target="#doctors">
              <i class="fas fa-users"></i> Doctors
              <p>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a class="nav-link" href="index.php?specialization">
                  <i class="far fa-circle nav-icon"></i>
                 Doctors Specialization
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?add_doctor">
                  <i class="far fa-circle nav-icon"></i>
                  Add Doctor
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?manage_doctor">
                  <i class="far fa-circle nav-icon"></i>
                 Manage Doctors
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link" data-target="#user">
              <i class="fas fa-user-tie"></i> User 
              <p>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a class="nav-link" href="index.php?manage_user">
                  <i class="far fa-circle nav-icon"></i>
                  Manage User
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link" data-target="#patient">
              <i class="fas fa-users"></i> Patients
              <p>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a class="nav-link" href="index.php?manage_patient">
                  <i class="far fa-circle nav-icon"></i>
                  Manager Patient
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="index.php?appointment" class="nav-link">
              <i class="fas fa-user"></i>
              <p>
                Appointment History
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?doctor_log" class="nav-link">
              <i class="fas fa-tasks"></i>
              <p>
                Doctor Session Logs
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?view_orders" class="nav-link">
              <i class="fas fa-tasks"></i>
              <p>
                User Session Logs
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?search" class="nav-link">
              <i class="fas fa-search"></i>
              <p>
                patient Search
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="fa fa-fw fa-power-off" ></i> 
              <p>
                Logout
              </p>
            </a>
          </li>
         
         
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>