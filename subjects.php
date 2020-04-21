
<script type="text/javascript">
   setTimeout('Redirect()', 10000);
function Redirect()
{
    alert("Predict Now!!");
    window.location="output_page.php";
}
</script>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "carrier");

// Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$os = mysqli_real_escape_string($link, $_REQUEST['os']);
$dsa = mysqli_real_escape_string($link, $_REQUEST['dsa']);
$cpp = mysqli_real_escape_string($link, $_REQUEST['cpp']);
$se = mysqli_real_escape_string($link, $_REQUEST['se']);
$cn = mysqli_real_escape_string($link, $_REQUEST['cn']);
$ec = mysqli_real_escape_string($link, $_REQUEST['ec']);
$coa = mysqli_real_escape_string($link, $_REQUEST['coa']);
$math = mysqli_real_escape_string($link, $_REQUEST['math']);
$comskill = mysqli_real_escape_string($link, $_REQUEST['comskill']);
$wh = mysqli_real_escape_string($link, $_REQUEST['wh']);
$lq = mysqli_real_escape_string($link, $_REQUEST['lq']);
$hackathons = mysqli_real_escape_string($link, $_REQUEST['hackathons']);
$codingskills = mysqli_real_escape_string($link, $_REQUEST['codingskills']);
$psp = mysqli_real_escape_string($link, $_REQUEST['psp']);
$cwltbs = mysqli_real_escape_string($link, $_REQUEST['cwltbs']);
$ecd = mysqli_real_escape_string($link, $_REQUEST['ecd']);
$workshops = mysqli_real_escape_string($link, $_REQUEST['workshops']);
$tt = mysqli_real_escape_string($link, $_REQUEST['tt']);
$olympiads = mysqli_real_escape_string($link, $_REQUEST['olympiads']);
$rds = mysqli_real_escape_string($link, $_REQUEST['rds']);
$mcs = mysqli_real_escape_string($link, $_REQUEST['mcs']);
$intsub = mysqli_real_escape_string($link, $_REQUEST['intsub']);
$intcar = mysqli_real_escape_string($link, $_REQUEST['intcar']);
$jhs = mysqli_real_escape_string($link, $_REQUEST['jhs']);
$com = mysqli_real_escape_string($link, $_REQUEST['com']);
$seniors = mysqli_real_escape_string($link, $_REQUEST['seniors']);
$games = mysqli_real_escape_string($link, $_REQUEST['games']);
$books = mysqli_real_escape_string($link, $_REQUEST['books']);
$expsal = mysqli_real_escape_string($link, $_REQUEST['expsal']);
$relation = mysqli_real_escape_string($link, $_REQUEST['relation']);
$behaviour = mysqli_real_escape_string($link, $_REQUEST['behaviour']);
$intfid = mysqli_real_escape_string($link, $_REQUEST['intfid']);
$sh = mysqli_real_escape_string($link, $_REQUEST['sh']);
$wit = mysqli_real_escape_string($link, $_REQUEST['wit']);
$job = mysqli_real_escape_string($link, $_REQUEST['job']);
// Attempt insert query execution
#session_start();
#$_SESSION['varname']=$first_name;
$sql = "INSERT INTO subjects
(OS,DSA,CPP,SE,CN,EC,COA,MATH,COMSKILL,WH,LQ,HACKATHONS,CODINGSKILLS,PSP,CWLTBS,ECD,WORKSHOPS,TT,OLYMPIADS,RDS,
MCS,INT_SUB,INT_CAR,JHS,COM,GAMES,BOOKS,EXPSAL,RELATION,BEHAVIOUR,INT_FID,SH,WIT,DREAM_JOB,SENIORS
)
VALUES
(
  '$os','$dsa','$cpp','$se',
  '$cn','$ec','$coa','$math',
  '$comskill','$wh','$lq',
  '$hackathons','$codingskills','$psp','$cwltbs',
  '$ecd','$workshops','$tt','$olympiads','
  $rds','$mcs','$intsub','$intcar',
  '$jhs','$com','$games','$books','$expsal','$relation',
  '$behaviour','$intfid','$sh','$wit',
  '$job','$seniors'
)";


if(mysqli_query($link, $sql)){
    echo "<script>Redirect();</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 #$_SESSION['id']=mysqli_query($link,"SELECT id FROM users WHERE email=".$email);
// Close connection
mysqli_close($link);
?>
