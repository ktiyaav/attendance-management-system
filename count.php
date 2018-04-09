<?php
$counter = "counter.txt";
$today = date_default_timezone_set('Asia/Kolkata');
$month = $today[month];
$mday = $today[mday];
$year = $today[year];
$current_date = $mday . $month . $year;
$fp = fopen($counter, "a");
// Shakti Saurav
$line = $REMOTE_ADDR . "|" . $mday . $month . $year . "\n";
$size = strlen($line);
fputs($fp, $line, $size);
fclose($fp);
$contents = file($counter);
$total_hits = sizeof($contents);
$total_hosts = array();
for ($i=0;$i<sizeof($contents);$i++) {
$entry = explode("|", $contents[$i]);
array_push($total_hosts, $entry[0]);
}
$total_hosts_size = sizeof(array_unique($total_hosts));
$daily_hits = array();
for ($i=0;$i<sizeof($contents);$i++) {
$entry = explode("|", $contents[$i]);
if ($current_date == chop($entry[1])) {
array_push($daily_hits, $entry[0]);
}
}
$daily_hits_size = sizeof($daily_hits);
$daily_hosts = array();
for ($i=0;$i<sizeof($contents);$i++) {
$entry = explode("|", $contents[$i]);
if ($current_date == chop($entry[1])) {
array_push($daily_hosts, $entry[0]);
}
}
$daily_hosts_size = sizeof(array_unique($daily_hosts));
include("stats.php"); echo "<center>ON: <a href=\"./index.php\">$online</a> | Today: " . $daily_hits_size . " | All: " . $total_hits . " Hits</center>";
?>