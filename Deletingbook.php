<?php
$aid=$_POST['aid'];
$mysqli=mysqli_connect("localhost","gnana","gnana","BASE");
if(mysqli_connect_errno())
echo "Connection Failed".mysqli_connect_errno();
else
{
$query="delete from AB where aid=$aid";
$res=mysqli_query($mysqli,$query);
if($res)
echo "Deleted";
else
echo "not deleted";
}
?>