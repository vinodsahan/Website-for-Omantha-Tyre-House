<style>
.user-panel>.image>img {
    height: 3em;
    width: 3em;
    object-fit: cover;
    object-position: center center;
}
</style>
<header class="main-header">
    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>VMS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>A</b>VMS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <li>
          <form  action="search-result.php" method="POST">
            <div class="form-group" style="margin:0 !important; margin-top:.5em !important">
              <div class="input-group" style="max-width:25em">
                <input type="search" name="searchdata" id="searchdata" value="<?= isset($_POST['searchdata']) ? $_POST['searchdata'] : '' ?>" placeholder="Search Visitor Here" class="form-control rounded-0">
                <span class="input-group-addon" style="padding:0 !important">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat" style="margin: 0 !important;padding: 0.3em 0.5em !important;"><i class="fa fa-search"></i>
                </button>
                </span>
              </div>
            </div>
          </form>
        </li>
        <?php
        $adminid=$_SESSION['avmsaid'];
        $ret=mysqli_query($con,"SELECT AdminName from tbladmin where ID='$adminid'");
        $row=mysqli_fetch_array($ret);
        $name=$row['AdminName']; ?>  

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar.png" class="img-circle" alt="User Image">
                <div class="text-center" style="color:#fff"><?php echo $name; ?></div>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>   
                  <a href="change-password.php" class="btn btn-default btn-flat">Change Password</a>   
                </div>


                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat"><i class="fa fa-sign-out" style="color:#747474;"></i></a>
                </div>

              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>