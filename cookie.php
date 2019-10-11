<?php

// $visit = isset($_COOKIE['visit']) ? $_COOKIE['visit'] : 0;

$visit = $_COOKIE['visit'] ?? 0;
$lastdate = $_COOKIE['lastdate'] ?? time();

$visit++;

setcookie('visit',$visit,0,'/');
// $last = "";

// if(isset($_COOKIE['last']))

// $last = date("d-m-y", $_COOKIE['last']);

$lastdate_str = date("m.d.y", $lastdate);

setcookie('lastdate',$lastdate,0,'/');







