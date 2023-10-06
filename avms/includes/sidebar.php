<style>
  .skin-green .wrapper, .skin-green .main-sidebar, .skin-green .left-side {
    background-color: #000000;
}
</style>
<?php
  $adminid=$_SESSION['avmsaid'];
  $ret=mysqli_query($con,"SELECT AdminName from tbladmin where ID='$adminid'");
  $row=mysqli_fetch_array($ret);
  $name=$row['AdminName']; ?>
 
 
 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $name; ?></p>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        <li class="<?php if($page=='dashboard') { echo 'active'; }?>">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>


        <li class="<?php if($page=='apartment') { echo 'active'; }?>">
          <a href="manage-apartment.php">
            <i class="fa fa-building-o"></i> <span>Tire List</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>


        <li class="<?php if($page=='visitors') { echo 'active'; }?>">
          <a href="visitor-entry.php">
            <i class="fa fa-plus"></i> <span>New Customer Entry</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="<?php if($page=='checkout_visitors') { echo 'active'; }?>">
          <a href="checkout_visitor.php">
            <i class="fa fa-sign-out"></i> <span>Appointment List </span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red"><?php include './counters/checkout-visitor.php'?></small>
            </span>
          </a>
        </li>


        <li class="<?php if($page=='visitor-management') { echo 'active'; }?>">
          <a href="visitor-mgmt.php">
            <i class="fa fa-users"></i> <span>Today Appointments</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="<?php if($page=='reports') { echo 'active'; }?>">
          <a href="report.php">
            <i class="fa fa-file-o"></i> <span>Reports</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>