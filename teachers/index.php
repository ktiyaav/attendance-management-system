<?php
session_start();
 require('config.php');
 include 'head.php';
$con=mysqli_connect("localhost"," ","PASS","  ");
if (isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
// Shakti Saurav
$query = "SELECT * FROM `teachers` WHERE username='$username'"; 
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if ($count == 1 && $row['pass']==$password){
$_SESSION['username'] = $username;
}else{
$error = "Invalid Login Credentials.";
}
}

if (isset($_SESSION['username'])) {
$username = $_SESSION['username'];
$director = "1224";
$hodcse = "123";
$examinationcontroller = "";
$a = "1"; // Teachers Username
$b = "154";  // Add Teacher's Username
$c = "134";
$d = "192";

$ro = mysqli_query($con,"SELECT * FROM teachers WHERE username=".$username."");
$row = mysqli_fetch_array($ro);

if(stripos($username, $director) !== FALSE){
echo'<div class="abc3"><h3>Hello, '. $row['name'] . '</h3><td><img class="dpimg" src="/uploads/'. $row['imgpath'] . '"></td>';
$query="SELECT id ,roll, name,sec,electrical,electronics,professionalcommunication,physics1,maths1,electricallab,physicslab,pclab,workshop,physics2,mechanics,chemistry,maths2,caeg,mechanicslab,chemistrylab,cspc,cspclab FROM students";
$result = mysqli_query($con,$query);
echo("<div class='abc3'><br><center><table cellspacing='2' cellpadding='2' border='1'>
");
$first_row = true;
while ($row = mysqli_fetch_assoc($result)) {
    if ($first_row) {
        $first_row = false;
        // Output header row from keys.
        echo '&nbsp<tr style="background-color:#CAD3D8;">&nbsp';
        foreach($row as $key => $field) {
            echo '&nbsp <th> &nbsp' . htmlspecialchars($key) . '&nbsp </th> &nbsp';
        }
        echo '</tr>';
    }
    echo '<tr>';
    foreach($row as $key => $field) {
        echo '&nbsp <td>&nbsp' . htmlspecialchars($field) . '&nbsp</td>&nbsp';
    }
    echo '</tr>';
}
echo('</table><br><br><br><a class="btn btn-success" href="logout.php" title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a><a class="btn btn-success" href="/teachers" title="Logout"><i class="fa fa-home" aria-hidden="true"></i> Home</a><br></div><br>');

include 'foot.php';
} 

elseif(stripos($username, $hodcse) !== FALSE){
echo'<div class="abc3"><h3>Hello, '. $row['name'] . '</h3><td><img class="dpimg" src="/uploads/'. $row['imgpath'] . '"></td>';
$query="SELECT id ,roll, email, name,sec,cspc,cspclab FROM students";
$result = mysqli_query($con,$query);
echo("<br><center><table cellspacing='2' cellpadding='2' border='1'>
");
$first_row = true;
while ($row = mysqli_fetch_assoc($result)) {
    if ($first_row) {
        $first_row = false;
        // Output header row from keys.
        echo '&nbsp<tr style="background-color:#CAD3D8;">&nbsp';
        foreach($row as $key => $field) {
            echo '&nbsp<th>&nbsp' . htmlspecialchars($key) . '&nbsp</th>&nbsp';
        }
        echo '</tr>';
    }
    echo '<tr>';
    foreach($row as $key => $field) {
        echo '&nbsp<td>&nbsp' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
}
echo('</table><br><br><a class="btn btn-success" href="logout.php" title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a><a class="btn btn-success" href="/teachers" title="Logout"><i class="fa fa-home" aria-hidden="true"></i> Home</a><br></div><br>');


include 'foot.php';
} 
elseif(stripos($username, $examinationcontroller) !== FALSE){
echo '';

include 'foot.php';
}
else if(stripos($username, $a) !== FALSE){
echo '<div class="abc3"><h3>Hello, '. $row['name'] . '</h3><td><img class="dpimg" src="/uploads/'. $row['imgpath'] . '"></td><br><br><center><table cellspacing="2" cellpadding="2" border="1">
<tr style="background-color:#CAD3D8;">
<td>&nbspYour Routine&nbsp</tr>
<tr style="background-color:#CAD3D8;">
<td>&nbspDAYS & Period&nbsp</td><td>&nbsp1&nbsp</td><td>&nbsp2&nbsp</td><td>&nbspLunch&nbsp</td><td>&nbsp3&nbsp</td><td>&nbsp4&nbsp</td>
</tr>
<tr><td>Mon</td><td>&nbsp<a href="electrical.php?batch=17%&sec=cseb">Basic Electrical Eng<br>(cseb)</a>&nbsp</td><td>&nbsp<a href="/">EMAC Lab<br>(ME IV)</a>&nbsp</td><td>&nbspLUNCH&nbsp</td><td>&nbsp<a href="/">-NA-</a>&nbsp</td><td>&nbsp<a href="/">-NA-</a>&nbsp</td></tr>
<tr><td>Tue</td><td>&nbsp<a href="/">EMAC<br>(ME IV)</a>&nbsp</td><td>&nbsp<a href="/">EMAC Lab<br>(ME IV)</a>&nbsp</td><td>&nbspLUNCH&nbsp</td><td>&nbsp<a href="/">-NA-</a>&nbsp</td><td>&nbsp<a href="/">-NA-</a>&nbsp</td></tr>
<tr><td>Wedn</td><td>&nbsp<a href="electrical.php?batch=17%&sec=ME">Basic Electrical Eng<br>(ME/CE II)</a>&nbsp</td><td>&nbsp<a href="/">-NA-</a>&nbsp</td><td>&nbspLUNCH&nbsp</td><td>&nbsp<a href="/">EMAC Lab<br>(ME IV)</a>&nbsp</td><td>&nbsp<a href="/">PSA<br>(EEE VI)</a>&nbsp</td></tr>
<tr><td>Thu</td><td>&nbsp<a href="/">PSA<br>(EEE VI)</a>&nbsp</td><td>&nbsp<a href="/">EMAC(ME IV)</a>&nbsp</td><td>&nbspLUNCH&nbsp</td><td>&nbsp<a href="/">-NA-</a>&nbsp</td><td>&nbsp<a href="electricallab.php?batch=17%&sec=cseb">Electrical Eng Lab<br>(cseb)</a>&nbsp</td></tr>
<tr><td>Fri</td><td>&nbsp<a href="electrical.php?batch=17%&sec=ME">Basic Electrical Eng<br>(ME/CE II)</a>&nbsp</td><td>&nbsp<a href="/">-NA-</a>&nbsp</td><td>&nbspLUNCH&nbsp</td><td>&nbsp<a href="/">PSA<br>(EEE VI)</a>&nbsp</td><td>&nbsp<a href="/">Electrical Eng Lab<br>(ME/CE II, GR-B)</a>&nbsp</td></tr>
<tr><td>Sat</td><td>&nbsp<a href="/">EMAC</a>&nbsp</td><td>&nbsp<a href="/">PSA</a>&nbsp</td><td>&nbspLUNCH&nbsp</td><td>&nbsp<a href="/">-NA-</a>&nbsp</td><td>&nbsp<a href="/">-NA-</a>&nbsp</td></tr>
</table></div></center>
<br><a class="btn btn-success" href="logout.php" title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>&nbsp <a class="btn btn-success" href="index.php" title="home"><i class="fa fa-home" aria-hidden="true"></i> Home</a><br></div><br>
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
                  <label>UserID&nbsp &nbsp &nbsp &nbsp&nbsp : &nbsp </label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password &nbsp : &nbsp </label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Login "/><br>
               </form>				
            </div>			
         </div>			
      </div>
<?php include 'foot.php'; ?>
<?php } ?>