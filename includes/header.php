<?php require_once 'php_action/core.php'; ?>

<!DOCTYPE html>
<html>
<head>

	<title>Glorious Households Stock Management System</title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">

  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">

	<!-- DataTables -->
  <link rel="stylesheet" href="assests/plugins/datatables/jquery.dataTables.min.css">

  <!-- file input -->
  <link rel="stylesheet" href="assests/plugins/fileinput/css/fileinput.min.css">

  <!-- jquery -->
	<script src="assests/jquery/jquery.min.js"></script>
  <!-- jquery ui -->  
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>


	<nav class="navbar navbar-default">
		<div class="container"  style="background-color: #FFC300">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#">Brand</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >  

      <div class= "table">
        <ul class="nav nav-tabs nav-justified" id ="navbarlist">

          <li id="navLogo"><a href="index.php"><img src=" assests/images/download.jfif"></img></a></li> 
        	<li id="navDashboard"><a href="index.php"><i class="glyphicon glyphicon-list-alt"></i><p style="color:#BF40BF";>  Dashboard</p></a></li>        
          
          <li id="navBrand"><a href="brand.php"><i class="glyphicon glyphicon-btc"></i> <p style="color:#BF40BF";>Brand</p></a></li>        

          <li id="navCategories"><a href="categories.php"> <i class="glyphicon glyphicon-th-list"></i><p style="color:#BF40BF";> Category</p></a></li>        

          <li id="navProduct"><a href="product.php"> <i class="glyphicon glyphicon-ruble"></i><p style="color:#BF40BF";> Product </p></a></li>     

          <li class="dropdown" id="navOrder">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-shopping-cart"></i><p style="color:#BF40BF";> Orders <span class="caret"></span></p></a>
            <ul class="dropdown-menu">            
              <li id="topNavAddOrder"><a href="orders.php?o=add"> <i class="glyphicon glyphicon-plus"></i> Add Orders</a></li>            
              <li id="topNavManageOrder"><a href="orders.php?o=manord"> <i class="glyphicon glyphicon-edit"></i> Manage Orders</a></li>            
            </ul>
          </li> 

          <li id="navReport"><a href="report.php"> <i class="glyphicon glyphicon-check"></i><p style="color:#BF40BF";> Report </p></a></li>

          <li class="dropdown" id="navSetting">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> <p style="color:#BF40BF";></p><span class="caret"></span></a>
            <ul class="dropdown-menu">            
              <li id="topNavSetting"><a href="setting.php"> <i class="glyphicon glyphicon-wrench"></i> Setting</a></li>            
              <li id="topNavLogout"><a href="logout.php"> <i class="glyphicon glyphicon-log-out"></i> Logout</a></li>            
            </ul>
          </li>        
                 
        </ul>
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">
    