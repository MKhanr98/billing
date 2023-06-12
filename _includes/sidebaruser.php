
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="user_dashboard.php" class="brand-link">
      <img src="images/uet_logo.png" alt="UET Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Billing System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
          <?php 
            if(isset($_SESSION['name'])) {
                $name = $_SESSION['name'];
                echo "Welcome, $name!";
            } else {
                echo "You are not logged in!";
            } ?>
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="user_dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right"></i>
              </p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="addpkg.php" class="nav-link">
            <i class="nav-icon fas fa-money-bill-wave"></i>
              <p>
                Add Package
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              
        
              <li class="nav-item">
                <a href="course_rcd.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Courses Record</p>
                </a>
              </li>
            </ul> -->
          </li>

          <li class="nav-item">
            <a href="cashout.php" class="nav-link">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
                Other Expenses
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="personal.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Dr.Gull Expenses
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="trip.php" class="nav-link">
              <i class="nav-icon fas fa-solid fa-plane-departure"></i>
              <p>
                Trip
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="allowance.php" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
                Allowance
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="training.php" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
                Training Expenditure
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="dailyexpense.php" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
                Daily Expenses
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="monthexpense.php" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
                Monthly Expenses
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>

         
          
          <li class="nav-item">
            <a href="person.php" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Add Person
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
          </li>

          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>