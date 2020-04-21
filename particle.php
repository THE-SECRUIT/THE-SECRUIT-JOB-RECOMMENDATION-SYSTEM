<html>
<head>
<title>particles</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    <div id="session" style="background-color: #d8ac29;font-size: 20px;border-radius: 3px;">
      <i><?php
        session_start();
        $user_name=$_SESSION['username'];
        echo "Hello, $user_name";
      ?></i>
    </div>
</nav>
  <div id="particles-js">
    <h1 style="color:#d8ac29;text-align:center;padding:20px;">THE SECRUIT</h1>
    <p style="color:#d8ac29;">Formed By:<br>Amrit Ghosh(1729009)<br>Arpan Roy Chowdhury(1729016)<br>Avirupa Saha(1729021)<br>Bijeet Ojha(1729024)<br>Krishnendu Kundu(1729030)<br><h3>UNDER THE GUIDANCE OF PROF. RAJDEEP CHATTERJEE</h3></p>
  </div>
  <script type="text/javascript" src="particles.js"></script>
  <script type="text/javascript" src="app.js"></script>
</body>
</html>
