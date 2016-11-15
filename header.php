<html>
<head>
      <link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
	  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		  <a class="navbar-brand" href="#">Logo</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="guest.php">Need a Blood Donor</a></li>
			<li><a href="#">Want to donate Blood</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			<?php
				if(isset($_SESSION['user_id'])){
				echo "<li><Welcome ".$_SESSION['user_id']." </li>";
				echo '<li><a href="logout.php"> SignOut </a></li>';
				}else{
				echo	'<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<li><a href="register.php"> SignUp </a></li>';
				}
				?>
		  </ul>
		</div>
	  </div>
	</nav>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
		<p><h4>Quick Links</h4></p>
      <p><a href="#">Mission/Vision</a></p>
      <p><a href="#">Blood Donation Facts</a></p>
      <p><a href="#">Who can &amp; Who can&apos;t donate</a></p>
	  <p><a href='#'>Privacy policy</a></p>
	  <p><a href='#'>Terms &amp; Conditions</a></p>
	  <p><a href='#'>Testinomials</a></p>
	  <p><a href='#'>Media Coverage</a></p>
    </div>
    <div class="col-sm-8"> 
      <h1>Welcome To Blood2Donate</h1>
      <hr>