<?php
session_start();
include'head.php';
if (isset($_SESSION['username'])) {
$username = $_SESSION['username'];
$batch = $_GET['batch'];
$sec = $_GET['sec'];
$con=mysqli_connect("localhost"," ","PASS"," ");
// Shakti Saurav
if (mysqli_connect_errno())
	{
		echo "Failed to connect to DATABASE, Contact SYSTEM ADMIN: " . mysqli_connect_error();
	}
if (mysqli_connect_errno())
      {
		echo "Failed to connect to DATABASE, Contact SYSTEM ADMIN: " . mysqli_connect_error();
      }
	  
$sub = mysqli_query($con,"SELECT sub FROM teachers WHERE username=".$username."");
$ro = mysqli_fetch_array($sub);
$result = mysqli_query($con,"SELECT * FROM students WHERE roll Like '".$batch."' AND sec='".$sec."'");
$count = mysqli_num_rows($result);

if ($result->num_rows > 0) {
echo"<div class='abc3'><center>Update <b>Electrical Lab</b> Attendance of your class <b>" .$sec. "</b> from Here<br><br><table cellspacing='4' cellpadding='4' border='1'>
<tr style='background-color:#CAD3D8;'>
<td>&nbspName&nbsp</td><td>&nbspRoll&nbsp</td><td>&nbspSubject&nbsp</td><td>&nbspAttendance&nbsp</td><td>&nbspToday&nbsp</td>
</tr>";

for($i=0; $i<$count; $i++){
	$row = mysqli_fetch_array($result);
            ?><center>
				<form name="attendance" action="" method ="post">
					<td>&nbsp<?php echo $row['name'] ?>&nbsp</td>
					<td>&nbsp<?php echo $row['roll'] ?>&nbsp</td>
					<td>&nbsp Electrical Lab &nbsp</td>
					<td>&nbsp<?php echo $row['electricallab'] ?>&nbsp</td>
					<td>
					<select name="attend[]">
					<option value="">Absent</option>
					<option value="p">Present</option>
					</select>
					</td>
				</tr>
				</center>
            <?php
    }      
							} else {
    echo "Sorry! No Students were found for this class";
								   }
mysqli_close($con);
?>

</table><br><input type="submit" id="loginbtn" name="submit"/></form><br>
<br><a class="btn btn-success" href="logout.php" title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a><a class="btn btn-success" href="logout.php" title="Logout">&nbsp <i class="fa fa-home" aria-hidden="true"></i> Home</a><br></div><br>
<?php include'foot.php';

}else{
	
echo '<center><a href="index.php">Click Here & Login Again</a></center>';
}
?>
<?php

if(isset($_POST['submit'])){
$dbb = mysqli_connect('localhost', ' ','PASS', ' ') or die('Error communicating to MySQL server.');
if(isset($_POST['attend'])){
$attend=$_POST['attend'];
	$result ="SELECT * FROM students WHERE roll Like '".$batch."' AND sec='".$sec."'";
	$res=mysqli_query($dbb,$result);
	for($i=0; $i<$count; $i++){
		$row = mysqli_fetch_array($res);
		if($attend[$i] == 'p') {
			$querye = "UPDATE students SET electricallab = electricallab + 1 WHERE roll=".$row['roll']." ";
			$sql=mysqli_query($dbb,$querye);
		} elseif($attend[$i] == 'a') {
			$querye = "UPDATE students SET electricallab = electricallab + 0 WHERE roll =".$row['roll']."";
			$sql = mysqli_query($dbb,$querye);
			}
	}unset($_POST);
}
}
?>