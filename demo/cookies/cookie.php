<?php
	//setcookie("userName", 'John');
//setcookie("userName", 'John',time()-3600);
//echo $_COOKIE["userName"];
//$user=[
//    'name'=>'John',
//    'login'=>'root',
//    'password'=>'12345'
//];
//$str=serialize($user);
//$str1=base64_encode($str);
//echo $str1;
//$user1=unserialize(base64_decode($str1));
//print_r($user1);
$visitCounter=0;
if (isset($_COOKIE["visitCounter"]))
    $visitCounter=$_COOKIE["visitCounter"];
$visitCounter=$visitCounter+1;
$lastVisit="";
if (isset($_COOKIE["lastVisit"]))
    $lastVisit=date("d-m-Y H-i-s",$_COOKIE["lastVisit"]);
setcookie("visitCounter",$visitCounter);
setcookie("lastVisit",time())
?>