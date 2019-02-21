<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- Menus -->
      <nav class="navbar navbar-inverse">
       <div class="container-fluid">
         <div class="navbar-header">
           <a class="navbar-brand" href="<?php echo base_url(); ?>">AntarAja</a>
         </div>
         <ul class="nav navbar-nav">
           <li><a href="#Tab1">Tab 1</a></li>
           <li><a href="Registration_Controller">Register</a></li>
           <li><a href="User_controller">Login</a></li>
           <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tentang Kami<span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="profile">Profil</a></li>
           <li><a href="Curhatan_controller">Cerita Driver</a></li>
           <li><a href="Faq_controller">FAQ</a></li>
         </ul>
           </li>
        </ul>
        </div>
      </nav>
<!-- End Of Menus -->
    <form action="<?php echo base_url('User_controller/login') ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username atau Email" name="username" required id="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!– /.col –>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
        <!– /.col –>
      </div>
    </form>
  </body>
</html>
