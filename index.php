<?php
session_start();
require('config.php');
include 'head.php';
$con=mysqli_connect("localhost","  ","PASS","  ");
if (isset($_POST['roll']) and isset($_POST['password'])){
$roll = $_POST['roll'];
$password = $_POST['password'];
// Shakti Saurav
$query = "SELECT * FROM `students` WHERE roll='$roll'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if ($count == 1 && $row['password']==$password){
$_SESSION['roll'] = $roll;
}else{
$error = "Invalid Login Credentials.";
}
}
if (isset($_SESSION['roll'])) {
$roll = $_SESSION['roll'];
$a = "17"; //Batch Filter
$b = "16";
$c = "15";
$d = "14";

$result = mysqli_query($con,"SELECT * FROM students WHERE roll=".$roll."");
$row = mysqli_fetch_array($result);
if(stripos($roll, $a) !== FALSE){
echo '<div class="abc3">
	<div class="main-inner">
	      				<h3>Hello, '. $row['name'] . '</h3>
						<td><img class="dpimg" src="/uploads/'. $row['imgpath'] . '"></td><br>
<br><a class="btn btn-success" href="/Check.php" title="Attendance"><i class="fa fa-area-chart" aria-hidden="true"></i> Check Attendance</a><br>
<br><a class="btn btn-success" href="/" title="Syllabus"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Syllabus</a><br>
<br><a class="btn btn-success" href="/" title="Calendar"><i class="fa fa-calendar-o" aria-hidden="true"></i> Acadamic Calendar</a><br>
<br><a class="btn btn-success" href="/" title="TestDates"><i class="fa fa-pencil" aria-hidden="true"></i> Test Schedules</a><br>
<br><a class="btn btn-success" href="logout.php" title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>

	    
	</div>
    
</div>
';

include 'foot.php';
} else if(stripos($roll, $b) !== FALSE){
echo '<div class="abc3">
	<div class="main-inner">
	      				<h3>Hello, '. $row['name'] . '</h3>
						<td><img class="dpimg" src="/uploads/'. $row['imgpath'] . '"></td><br>
<br><a class="btn btn-success" href="/Check.php" title="Attendance"><i class="fa fa-area-chart" aria-hidden="true"></i> Check Attendance</a><br>
<br><a class="btn btn-success" href="/" title="Syllabus"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Syllabus</a><br>
<br><a class="btn btn-success" href="/" title="Calendar"><i class="fa fa-calendar-o" aria-hidden="true"></i> Acadamic Calendar</a><br>
<br><a class="btn btn-success" href="/" title="TestDates"><i class="fa fa-pencil" aria-hidden="true"></i> Test Schedules</a><br>
<br><a class="btn btn-success" href="logout.php" title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>

	    
	</div>
    
</div>
';

include 'foot.php';
} else if(stripos($roll, $c) !== FALSE){
echo '<div class="abc3">
	<div class="main-inner">
	      				<h3>Hello, '. $row['name'] . '</h3>
						<td><img class="dpimg" src="/uploads/'. $row['imgpath'] . '"></td><br>
<br><a class="btn btn-success" href="/Check.php" title="Attendance"><i class="fa fa-area-chart" aria-hidden="true"></i> Check Attendance</a><br>
<br><a class="btn btn-success" href="/" title="Syllabus"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Syllabus</a><br>
<br><a class="btn btn-success" href="/" title="Calendar"><i class="fa fa-calendar-o" aria-hidden="true"></i> Acadamic Calendar</a><br>
<br><a class="btn btn-success" href="/" title="TestDates"><i class="fa fa-pencil" aria-hidden="true"></i> Test Schedules</a><br>
<br><a class="btn btn-success" href="logout.php" title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
    
	</div>
    
</div>
';

include 'foot.php';
} else if(stripos($roll, $d) !== FALSE){
echo '<div class="abc3">
	<div class="main-inner">
	      				<h3>Hello, '. $row['name'] . '</h3>
						<td><img class="dpimg" src="/uploads/'. $row['imgpath'] . '"></td><br>
<br><a class="btn btn-success" href="/Check.php" title="Attendance"><i class="fa fa-area-chart" aria-hidden="true"></i> Check Attendance</a><br>
<br><a class="btn btn-success" href="/" title="Syllabus"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Syllabus</a><br>
<br><a class="btn btn-success" href="/" title="Calendar"><i class="fa fa-calendar-o" aria-hidden="true"></i> Acadamic Calendar</a><br>
<br><a class="btn btn-success" href="/" title="TestDates"><i class="fa fa-pencil" aria-hidden="true"></i> Test Schedules</a><br>
<br><a class="btn btn-success" href="logout.php" title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
	    
	</div>
    
</div>
';

include 'foot.php';
}
}else{
?>
      <div align = "center">
         <div style = "width:350px;; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#222; color:#fff; padding:3px;"><b>Login</b></div>
            <div style = "margin:30px">
			 <form action = "" method = "post">
			 <?php if(isset($error)){ ?><div class="alert alert-danger" role="alert"> <?php echo $error; ?> </div><?php } ?>
                  <label>University Roll&nbsp &nbsp : &nbsp </label><input type = "text" name = "roll" class = "box"/><br /><br />
                  <label>Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp : &nbsp </label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Login "/><br>
               </form>	
            </div>
         </div>
      </div>
<?php include 'foot.php'; ?>
<?php } ?>