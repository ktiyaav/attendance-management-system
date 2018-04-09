<?php
$file = 'stats.dat';
$onlineTime = 180;
$perPage = 20;
if(!file_exists($file)) {
$fs = fopen($file, 'w') or die('<b>Error:</b> Unable to create stats file.<br/>');
fclose($fs);
}
$ip = (getenv('HTTP_X_FORWARDED_FOR') != '') ? getenv('HTTP_X_FORWARDED_FOR') : $_SERVER['REMOTE_ADDR'];
$ua = $_SERVER['HTTP_USER_AGENT'];
$ua = explode(' ', $ua);
$ua = $ua[0];
$ua = str_replace('|~~|', '', htmlspecialchars($ua));
$ip = str_replace('|~~|', '', htmlspecialchars($ip));
$pageName = str_replace('|~~|', '', htmlspecialchars($pageName));
$data = file($file);
foreach($data as $i => $line) {
$line = explode('|~~|', $line);
if(($line[1] == $ip && $line[2] == $ua) || $line[0] < (time() - $onlineTime)) unset($data[$i]);
}
$data[] = implode('|~~|', array_pad(array(time(), $ip, $ua, $pageName), 5, ''));
$online = count($data);
$fs = fopen($file, 'w');
foreach($data as $line) fputs($fs, rtrim($line) . "\n");
fclose($fs);
unset($data, $line, $ip, $ua, $fs);
?>