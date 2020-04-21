<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      body
      {
        background-color: black;
        color: #d8ac29;
      }
    </style>
    <title>MY ACCOUNT</title>
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
    <span style="font-size: 40px;"><i><u><?php
        $con = mysqli_connect("localhost", "root", "", "carrier");
        session_start();
        $user_name=$_SESSION['username'];
        echo "$user_name's Account";

     ?></u></i></span>


     <?php
         $sql = "SELECT * FROM subjects";
         $r = mysqli_query($con, $sql);
         $ro = mysqli_fetch_assoc($r);

         $OS = $ro["OS"] ;
         $DSA = $ro["DSA"] ;
         $CPP = $ro["CPP"] ;
         $SE = $ro["SE"] ;
         $CN = $ro["CN"] ;
         $EC = $ro["EC"] ;
         $COA = $ro["COA"] ;
         $MATH =$ro["MATH"];
         $COMSKILL =$ro["COMSKILL"];



         $LQ = $ro["LQ"] ;
         $HACKATHONS = $ro["HACKATHONS"] ;
         $CODINGSKILLS = $ro["CODINGSKILLS"] ;
         $PSP = $ro["PSP"] ;
         $ECD = $ro["ECD"] ;
         $WORKSHOPS =$ro["WORKSHOPS"];
         $TT =$ro["TT"];
         $OLYMPIADS = $ro["OLYMPIADS"] ;
         $RDS = $ro["RDS"] ;

         $CWLTBS = $ro["CWLTBS"] ;
         $WH = $ro["WH"] ;
         $MCS = $ro["MCS"] ;
         $INT_SUB = $ro["INT_SUB"] ;
         $INT_CAR = $ro["INT_CAR"] ;
         $JHS = $ro["JHS"] ;
         $COM = $ro["COM"] ;
         $SENIORS =$ro["SENIORS"];
         $GAMES =$ro["GAMES"];
         $BOOKS = $ro["BOOKS"] ;
         $EXPSAL = $ro["EXPSAL"] ;
         $RELATION = $ro["RELATION"] ;
         $BEHAVIOUR = $ro["BEHAVIOUR"] ;
         $INT_FID = $ro["INT_FID"] ;
         $SH = $ro["SH"] ;
         $WIT = $ro["WIT"] ;
         $DREAM_JOB = $ro["DREAM_JOB"] ;

         $sql1 = "SELECT AVG(`Acedamic percentage in Operating Systems`),AVG(`percentage in Algorithms`),AVG(`Percentage in Programming Concepts`),AVG(`Percentage in Software Engineering`),AVG(`Percentage in Computer Networks`),AVG(`Percentage in Electronics Subjects`),AVG(`Percentage in Computer Architecture`),AVG(`Percentage in Mathematics`),AVG(`Percentage in Communication skills`) FROM `table 4` WHERE `Suggested Job Role`='$DREAM_JOB'";
         $r1 = mysqli_query($con, $sql1);
         $ro1 = mysqli_fetch_assoc($r1);

         $OS_AVG = $ro1["AVG(`Acedamic percentage in Operating Systems`)"] ;
         $DSA_AVG = $ro1["AVG(`percentage in Algorithms`)"] ;
         $CPP_AVG = $ro1["AVG(`Percentage in Programming Concepts`)"] ;
         $SE_AVG = $ro1["AVG(`Percentage in Software Engineering`)"] ;
         $CN_AVG = $ro1["AVG(`Percentage in Computer Networks`)"] ;
         $EC_AVG = $ro1["AVG(`Percentage in Electronics Subjects`)"] ;
         $COA_AVG = $ro1["AVG(`Percentage in Computer Architecture`)"] ;
         $MATH_AVG = $ro1["AVG(`Percentage in Mathematics`)"] ;
         $COMSKILL_AVG = $ro1["AVG(`Percentage in Communication skills`)"] ;


     ?>

     <h1>ACADEMIC DETAILS</h1>

     <h2 style="font-size:25px;">Marks in Operating System :<?php echo $OS;?><sub style="font-size: 15px;">(Average Marks in OS in your Job Field: <?php echo $OS_AVG;?>)</sub></h2>
     <h2 style="font-size:25px;">Marks in Data Structure and Algorithms :<?php echo $DSA;?><sub style="font-size: 15px;">(Average Marks in DSA in your Job Field: <?php echo $DSA_AVG;?>)</sub></h2>
     <h2 style="font-size:25px;">Marks in Computer Programming Skills :<?php echo $CPP;?><sub style="font-size: 15px;">(Average Marks in CPP in your Job Field: <?php echo $CPP_AVG;?>)</sub></h2>
     <h2 style="font-size:25px;">Marks in Software Engineering :<?php echo $SE;?><sub style="font-size: 15px;">(Average Marks in SE in your Job Field: <?php echo $SE_AVG;?>)</sub></h2>
     <h2 style="font-size:25px;">Marks in Computer Networks :<?php echo $CN;?><sub style="font-size: 15px;">(Average Marks in CN in your Job Field: <?php echo $CN_AVG;?>)</sub></h2>
     <h2 style="font-size:25px;">Marks in Electronics :<?php echo $EC;?><sub style="font-size: 15px;">(Average Marks in EC in your Job Field: <?php echo $EC_AVG;?>)</sub></h2>
     <h2 style="font-size:25px;">Marks in Computer Architecture :<?php echo $COA;?><sub style="font-size: 15px;">(Average Marks in COA in your Job Field: <?php echo $COA_AVG;?>)</sub></h2>
     <h2 style="font-size:25px;">Marks in Mathemetics :<?php echo $MATH;?><sub style="font-size: 15px;">(Average Marks in MATH in your Job Field: <?php echo $MATH_AVG;?>)</sub></h2>
     <h2 style="font-size:25px;">Marks in Communicational Skills :<?php echo $COMSKILL;?><sub style="font-size: 15px;">(Average Marks in COMSKILL in your Job Field: <?php echo $COMSKILL_AVG;?>)</sub></h2>

     <ul class="list-group">
     <li class="list-group-item" style="background-color: #000000;text-align: center;"><b><u>ACADEMIC STATUS FOR YOUR DREAM JOB</u></b></li>


     <?php

         if ($OS < $OS_AVG) {

           echo '<li class="list-group-item list-group-item-danger">YOU HAVE TO IMPROVE IN Operating System</li>';
         }
         elseif ($OS == $OS_AVG) {
           echo '<li class="list-group-item list-group-item-primary">YOU ARE DOING FINE BUT NEVER STOP IMPROVING</li>';
         }
         else {
           echo '<li class="list-group-item list-group-item-success">YOU ARE DOING GREAT IN Operating System</li>';
         }

         if ($DSA < $DSA_AVG) {

           echo '<li class="list-group-item list-group-item-danger">YOU HAVE TO IMPROVE IN Data Structure and Algorithms</li>';
         }
         elseif ($DSA == $DSA_AVG) {
           echo '<li class="list-group-item list-group-item-primary">YOU ARE DOING FINE BUT NEVER STOP IMPROVING</li>';
         }
         else {
           echo '<li class="list-group-item list-group-item-success">YOU ARE DOING GREAT IN Data Structure and Algorithms</li>';
         }
         if ($CPP < $CPP_AVG) {

           echo '<li class="list-group-item list-group-item-danger">YOU HAVE TO IMPROVE IN Computer Programming Skills</li>';
         }
         elseif ($CPP == $CPP_AVG) {
           echo '<li class="list-group-item list-group-item-primary">YOU ARE DOING FINE BUT NEVER STOP IMPROVING</li>';
         }
         else {
           echo '<li class="list-group-item list-group-item-success">YOU ARE DOING GREAT IN Computer Programming Skills</li>';
         }

         if ($SE < $SE_AVG) {

           echo '<li class="list-group-item list-group-item-danger">YOU HAVE TO IMPROVE IN Software Engineering</li>';
         }
         elseif ($SE == $SE_AVG) {
           echo '<li class="list-group-item list-group-item-primary">YOU ARE DOING FINE BUT NEVER STOP IMPROVING</li>';
         }
         else {
           echo '<li class="list-group-item list-group-item-success">YOU ARE DOING GREAT IN Software Engineering</li>';
         }

         if ($CN < $CN_AVG) {

           echo '<li class="list-group-item list-group-item-danger">YOU HAVE TO IMPROVE IN Computer Networks</li>';
         }
         elseif ($CN == $CN_AVG) {
           echo '<li class="list-group-item list-group-item-primary">YOU ARE DOING FINE BUT NEVER STOP IMPROVING</li>';
         }
         else {
           echo '<li class="list-group-item list-group-item-success">YOU ARE DOING GREAT IN Computer Networks</li>';
         }

         if ($EC < $EC_AVG) {

           echo '<li class="list-group-item list-group-item-danger">YOU HAVE TO IMPROVE IN Electronics</li>';
         }
         elseif ($EC == $EC_AVG) {
           echo '<li class="list-group-item list-group-item-primary">YOU ARE DOING FINE BUT NEVER STOP IMPROVING</li>';
         }
         else {
           echo '<li class="list-group-item list-group-item-success">YOU ARE DOING GREAT IN Electronics</li>';
         }

         if ($COA < $COA_AVG) {

           echo '<li class="list-group-item list-group-item-danger">YOU HAVE TO IMPROVE IN Computer Architecture</li>';
         }
         elseif ($COA == $COA_AVG) {
           echo '<li class="list-group-item list-group-item-primary">YOU ARE DOING FINE BUT NEVER STOP IMPROVING</li>';
         }
         else {
           echo '<li class="list-group-item list-group-item-success">YOU ARE DOING GREAT IN Computer Architecture</li>';
         }
         if ($MATH < $MATH_AVG) {

           echo '<li class="list-group-item list-group-item-danger">YOU HAVE TO IMPROVE IN Mathemetics</li>';
         }
         elseif ($MATH == $MATH_AVG) {
           echo '<li class="list-group-item list-group-item-primary">YOU ARE DOING FINE BUT NEVER STOP IMPROVING</li>';
         }
         else {
           echo '<li class="list-group-item list-group-item-success">YOU ARE DOING GREAT IN Mathemetics</li>';
         }

         if ($COMSKILL < $COMSKILL_AVG) {

           echo '<li class="list-group-item list-group-item-danger">YOU HAVE TO IMPROVE IN Communicational Skills</li>';
         }
         elseif ($COMSKILL == $COMSKILL_AVG) {
           echo '<li class="list-group-item list-group-item-primary">YOU ARE DOING FINE BUT NEVER STOP COMSKILL</li>';
         }
         else {
           echo '<li class="list-group-item list-group-item-success">YOU ARE DOING GREAT IN Communicational Skills</li>';
         }
     ?>
 </ul>

<br>
<br>
     <h1>OTHER EDUCATIONAL ACTIVITIES</h1>
     <h2 style="font-size:25px;">IQ (Logical Quotient) : <?php echo $LQ;?></h2>
     <h2 style="font-size:25px;">Coding Competitions Attained : <?php echo $HACKATHONS;?></h2>
     <h2 style="font-size:25px;">Coding Skills Rating : <?php echo $CODINGSKILLS;?></h2>
     <h2 style="font-size:25px;">Public Speaking Rating : <?php echo $PSP;?></h2>
     <h2 style="font-size:25px;">Extra-Courses Done : <?php echo $ECD;?></h2>
     <h2 style="font-size:25px;">Workshop Attained : <?php echo $WORKSHOPS;?></h2>
     <h2 style="font-size:25px;">Talent Tests Participated : <?php echo $TT;?></h2>
     <h2 style="font-size:25px;">Olympiads Attempted : <?php echo $OLYMPIADS;?></h2>
     <h2 style="font-size:25px;">Reading and Writing Skills : <?php echo $RDS;?></h2>

     <br>
     <br>

     <h1>PERSONAL DETAILS</h1>
     <h2 style="font-size:25px;">Overtime Working : <?php echo $CWLTBS;?></h2>
     <h2 style="font-size:25px;">Working Hours (suitable) : <?php echo $WH;?></h2>
     <h2 style="font-size:25px;">Memory Capability Score : <?php echo $MCS;?></h2>
     <h2 style="font-size:25px;">Interested Subject : <?php echo $INT_SUB;?></h2>
     <h2 style="font-size:25px;">Interested Carrier Area : <?php echo $INT_CAR;?></h2>
     <h2 style="font-size:25px;">Future Plan : <?php echo $JHS;?></h2>
     <h2 style="font-size:25px;">Interested Type of Corporate Farm : <?php echo $COM;?></h2>
     <h2 style="font-size:25px;">Senior-Peer Interaction : <?php echo $SENIORS;?></h2>
     <h2 style="font-size:25px;">Interested in Sports : <?php echo $GAMES;?></h2>
     <h2 style="font-size:25px;">Interested Genre of Books : <?php echo $BOOKS;?></h2>
     <h2 style="font-size:25px;">Priority : <?php echo $EXPSAL;?></h2>
     <h2 style="font-size:25px;">Relationship Status : <?php echo $RELATION;?></h2>
     <h2 style="font-size:25px;">Behaviour : <?php echo $BEHAVIOUR;?></h2>
     <h2 style="font-size:25px;">Interested Area of Work : <?php echo $INT_FID;?></h2>
     <h2 style="font-size:25px;">Type of Worker : <?php echo $SH;?></h2>
     <h2 style="font-size:25px;">Team Worker : <?php echo $WIT;?></h2>
     <h2 style="font-size:25px;">Dream Job : <?php echo $DREAM_JOB;?></h2>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
