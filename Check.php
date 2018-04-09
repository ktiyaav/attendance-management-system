<?php
//Shows Attendance
session_start();
include'head.php';
date_default_timezone_set('Asia/Kolkata');
if (isset($_SESSION['roll'])) {
$roll = $_SESSION['roll'];
$con=mysqli_connect("localhost"," ","PASS"," ");
// Shakti Saurav
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$a = "17"; // Year Check - Batch 17-21,16-20,15-19...
$b = "16";
$c = "15";
$d = "14";
function percent($number, $total){
    $per = ($number / $total) * 100;
	echo $per;
};
$result = mysqli_query($con,"SELECT * FROM students WHERE roll=".$roll."");
if(stripos($roll, $a) !== FALSE){
while($row = mysqli_fetch_array($result))
{
$maxattend = mysqli_query($con, "SELECT max(maths1), max(physics1), max(electronics), max(electrical), max(professionalcommunication), max(pclab), max(electricallab), max(physicslab), max(workshop), max(physics2), max(maths2), max(chemistry), max(mechanics), max(cspc), max(cspclab), max(chemistrylab), max(caeg), max(mechanicslab) from students WHERE roll LIKE '17%' AND sec = '".$row['sec']."'");
$max = mysqli_fetch_array($maxattend);
if( '2' > date('n') ){
echo "<div class='abc3'><br><center><table cellspacing='2' cellpadding='2' border='1'>
<tr style='background-color:#CAD3D8;'>
<td>SEMESTER 1</tr>
<tr style='background-color:#CAD3D8;'>
<td>&nbspSNo.&nbsp</td><td>&nbspSubject Code&nbsp</td><td>&nbspSubject Name&nbsp</td><td>&nbspType&nbsp</td><td>&nbspAttendance&nbsp</td></tr>
<tr><td>&nbsp1</td><td>&nbsp001&nbsp</td><td>&nbspMathematics- I&nbsp</td><td>&nbspTheory&nbsp</td><td>&nbsp" . $row['maths1'] . "&nbsp/&nbsp".$max['max(maths1)']."</td></tr>
<tr><td>&nbsp2</td><td>&nbsp002&nbsp</td><td>&nbspPhysics- I&nbsp</td><td>&nbspTheory&nbsp</td><td>&nbsp" . $row['physics1'] . "&nbsp/&nbsp".$max['max(physics1)']."</td></tr>
<tr><td>&nbsp3</td><td>&nbsp12&nbsp</td><td>&nbspElectrical&nbsp</td><td>&nbspTheory&nbsp</td><td>&nbsp" . $row['electrical'] . "&nbsp/&nbsp".$max['max(electrical)']."</td></tr>
<tr><td>&nbsp4</td><td>&nbsp11&nbsp</td><td>&nbspElectronics&nbsp</td><td>&nbspTheory&nbsp</td><td>&nbsp" . $row['electronics'] . "&nbsp/&nbsp".$max['max(electronics)']."</td></tr>
<tr><td>&nbsp5</td><td>&nbsp1873&nbsp</td><td>&nbspPC&nbsp</td><td>&nbspTheory&nbsp</td><td>&nbsp" . $row['professionalcommunication'] . "&nbsp/&nbsp".$max['max(professionalcommunication)']."</td></tr>
<tr><td>&nbsp6</td><td>&nbsp1983&nbsp</td><td>&nbspPC Lab&nbsp</td><td>&nbspPractical&nbsp</td><td>&nbsp" . $row['pclab'] . "&nbsp/&nbsp".$max['max(pclab)']."</td></tr>
<tr><td>&nbsp7</td><td>&nbsp193&nbsp</td><td>&nbspElectrical Lab&nbsp</td><td>&nbspPractical&nbsp</td><td>&nbsp" . $row['electricallab'] . "&nbsp/&nbsp".$max['max(electricallab)']."</td></tr>
<tr><td>&nbsp8</td><td>&nbsp193&nbsp</td><td>&nbspPhyscis Lab&nbsp</td><td>&nbspPractical&nbsp</td><td>&nbsp" . $row['physicslab'] . "&nbsp/&nbsp".$max['max(physicslab)']."</td></tr>
<tr><td>&nbsp9</td><td>&nbsp188&nbsp</td><td>&nbspWorkshop&nbsp</td><td>&nbspPractical&nbsp</td><td>&nbsp" . $row['workshop'] . "&nbsp/&nbsp".$max['max(workshop)']."</td></tr>
</table><br></center>
";
} if( '2' < date('n') ){
echo"<div class='abc3'><br><center><table cellspacing='2' cellpadding='2' border='1'>
<tr style='background-color:#CAD3D8;'><td>SEMESTER 2</tr>
<tr style='background-color:#CAD3D8;'>
<td>&nbspSNo.&nbsp</td><td>&nbspSubject Code&nbsp</td><td>&nbspSubject Name&nbsp</td><td>&nbspType&nbsp</td><td>&nbspAttendance&nbsp</td></tr>
<tr><td>&nbsp1</td><td>&nbsp001&nbsp</td><td>&nbspMathematics- II&nbsp</td><td>&nbspTheory&nbsp</td><td>&nbsp" . $row['maths2'] . "&nbsp/&nbsp".$max['max(maths2)']."</td></tr>
<tr><td>&nbsp2</td><td>&nbsp002&nbsp</td><td>&nbspPhysics- II&nbsp</td><td>&nbspTheory&nbsp</td><td>&nbsp" . $row['physics2'] . "&nbsp/&nbsp".$max['max(physics2)']."</td></tr>
<tr><td>&nbsp3</td><td>&nbsp283&nbsp</td><td>&nbspChemistry&nbsp</td><td>&nbspTheory&nbsp</td><td>&nbsp" . $row['chemistry'] . "&nbsp/&nbsp".$max['max(chemistry)']."</td></tr>
<tr><td>&nbsp4</td><td>&nbsp928&nbsp</td><td>&nbspMechanics&nbsp</td><td>&nbspTheory&nbsp</td><td>&nbsp" . $row['mechanics'] . "&nbsp/&nbsp".$max['max(mechanics)']."</td></tr>
<tr><td>&nbsp5</td><td>&nbsp928&nbsp</td><td>&nbspCSPC&nbsp</td><td>&nbspTheory&nbsp</td><td>&nbsp" . $row['cspc'] . "&nbsp/&nbsp".$max['max(cspc)']."</td></tr>
<tr><td>&nbsp6</td><td>&nbsp29&nbsp</td><td>&nbspCSPC Lab&nbsp</td><td>&nbspPractical&nbsp</td><td>&nbsp" . $row['cspclab'] . "&nbsp/&nbsp".$max['max(cspclab)']."</td></tr>
<tr><td>&nbsp7</td><td>&nbsp283&nbsp</td><td>&nbspChemistry Lab&nbsp</td><td>&nbspPractical&nbsp</td><td>&nbsp" . $row['chemistrylab'] . "&nbsp/&nbsp".$max['max(chemistrylab)']."</td></tr>
<tr><td>&nbsp8</td><td>&nbsp827&nbsp</td><td>&nbspCAEG Lab&nbsp</td><td>&nbspPractical&nbsp</td><td>&nbsp" . $row['caeg'] . "&nbsp/&nbsp".$max['max(caeg)']."</td></tr>
<tr><td>&nbsp9</td><td>&nbsp837&nbsp</td><td>&nbspMechanics Lab&nbsp</td><td>&nbspPractical&nbsp</td><td>&nbsp" . $row['mechanicslab'] . "&nbsp/&nbsp".$max['max(mechanicslab)']."</td></tr>
</table>";
}
}
mysqli_close($con);

} else if(stripos($roll, $b) !== FALSE){
while($row = mysqli_fetch_array($result))
{
echo "2ndyear";
}
mysqli_close($con);

} else if(stripos($roll, $c) !== FALSE){
while($row = mysqli_fetch_array($result))
{
echo "3rd year";
}
mysqli_close($con);

} else if(stripos($roll, $d) !== FALSE){
while($row = mysqli_fetch_array($result))
{
echo "4thyear";
}
mysqli_close($con);

}

?>

<br><a class="btn btn-success" href="logout.php" title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>&nbsp <a class="btn btn-success" href="index.php" title="home"><i class="fa fa-home" aria-hidden="true"></i> Home</a><br></div><br>
<?php include'foot.php';
}else{
header('Location: /');
}
?>