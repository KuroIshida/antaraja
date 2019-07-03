<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top" style="background-color:grey">
<div class="navbar-header">
  <a class="navbar-brand" href="Welcome">
  <img src="assets\images\antaraja.svg" alt="AntarAja" width="145" height="50"></a>
</div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav" style="font-size:20px">
    <li class="nav-item">
      <a class="nav-link "  href="<?php echo base_url("about_us") ?>">Tentang Kami</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url("services") ?>">Layanan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="faq">FAQ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url("intact") ?>">Kontak Kami</a>
    </li>
    <li class="nav-item" style="padding-left:400px">
      <a class="navbar-brand nav-link" href="#"><img src="assets\fontawesome-free-5.9.0-web\svgs\solid\motorcycle.svg" alt="Join Driver" style="width:50px;height:40px"> Join Driver</a>
    </li>
    <li class="nav-item">
      <a class="navbar-brand nav-link" href="#"><img src="assets\fontawesome-free-5.9.0-web\svgs\solid\hospital.svg" alt="Join Merchant" style="width:30px;height:40px"> Join Merchant</a>
    </li>
    <li class="nav-item">
        <a class="navbar-brand nav-link" href="<?php echo base_url("admin/auth"); ?>"><img src="assets\fontawesome-free-5.9.0-web\svgs\solid\plus-square.svg" alt="Login" style="width:30px;height:40px"> Login</a>
    </li>

  </ul>
</div>
</nav>
<br>

</body>
</html>
