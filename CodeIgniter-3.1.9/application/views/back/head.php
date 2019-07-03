<header class="main-header">
  <!-- Logo -->
  <a href="<?php echo base_url("news"); ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b></span>
    <!-- logo for regular state and mobile devices -->

    <span class="logo-lg"><img src="assets\images\antaraja.svg" alt="" style="width:100px;height:40px;"><b> AntarAja </b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <!-- Notifications: style can be found in dropdown.less -->
        <!-- Tasks: style can be found in dropdown.less -->
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo base_url('assets\images\human_icon.svg')?>" class="user-image" alt="User Image">
            <span class="hidden-xs">A</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo base_url('assets\images\human_icon.svg')?>" class="img-circle" alt="User Image">

              <p>
                Admin
                <small>Administrator</small>
              </p>
            </li>
            <!-- Menu Body -->
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="<?php echo base_url("admin/auth"); ?>" class="btn btn-default btn-flat">Change Profile</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo base_url("admin/auth/logout"); ?> " class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
      </ul>
    </div>
  </nav>
</header>
