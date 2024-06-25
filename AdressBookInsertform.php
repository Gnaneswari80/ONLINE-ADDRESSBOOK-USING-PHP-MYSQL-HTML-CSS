<?php
$aid=$_POST['aid'];
$f=$_POST['name'];
$ln=$_POST['ln'];
$sa=$_POST['sa'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$at=$_POST['at'];
$tn=$_POST['tn'];
$tnr=$_POST['tnr'];
$fn=$_POST['fn'];
$fnr=$_POST['fnr'];
$ea=$_POST['ea'];
$ear=$_POST['ear'];
$pn=$_POST['pn'];
$mysqli=mysqli_connect("localhost","gnana","gnana","BASE");
if(mysqli_connect_errno())
echo "Connection Failed".mysqli_connect_errno();
else
{
$query="insert into AB values('$aid','$f','$ln','$sa','$city','$state','$zip','$at','$tn','$tnr','$fn','$fnr','$ea','$ear','$pn')";

$res=mysqli_query($mysqli,$query);
if($res)
echo "inserted";
else
echo "not inserted";
}
?>