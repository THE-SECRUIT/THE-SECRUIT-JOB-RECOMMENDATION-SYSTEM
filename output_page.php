<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	 <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Your Job</title>
	<link rel="stylesheet" href="endstyle.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<img src="images.jfif" width="30" height="30" alt="" style="border-radius: 45px;">
		&nbsp;&nbsp;&nbsp;&nbsp;
	<a class="navbar-brand" href="particle.php" style="color: #d8ac29">SECRUIT</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="1STPAGE.html" style="color: #d8ac29">JobAssist</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="pie.php" style="color: #d8ac29">Analysis</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="my_account.php" style="color: #d8ac29">My Profile</a>
			</li>
		</ul>
</nav>
	<div class="banner-text">

	    <h1>RECOMMENED JOBS ARE</h1>

    </div>
    <div>
    	 <?php
        $con = mysqli_connect("localhost", "root", "", "carrier");
        $sql = "SELECT * FROM job";
        $r = mysqli_query($con, $sql);
        $ro = mysqli_fetch_assoc($r);
         $h1 = $ro["JOB1"] ;
         $h2 = $ro["JOB2"] ;
         $h3 = $ro["JOB3"] ;
         $h4 = $ro["JOB4"] ;
         $h5 = $ro["JOB5"] ;
    ?>
    <h2 style="color:#d8ac29;text-align:center;"><?php echo $h1 ?></h1>
    <h2 style="color:#d8ac29;text-align:center;"><?php echo $h2 ?></h1>
    <h2 style="color:#d8ac29;text-align:center;"><?php echo $h3 ?></h1>
    <h2 style="color:#d8ac29;text-align:center;"><?php echo $h4 ?></h1>
    <h2 style="color:#d8ac29;text-align:center;"><?php echo $h5 ?></h1>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </div>
    <div class="animation-area">
    	<ul class="box-area">
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>
    		<li></li>

    	</ul>
    </div>
</body>
</html>
