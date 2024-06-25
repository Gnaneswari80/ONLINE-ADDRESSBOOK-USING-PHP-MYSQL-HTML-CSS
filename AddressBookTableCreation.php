<?php
$mysqli=mysqli_connect("localhost","gnana","gnana","BASE");
if(mysqli_connect_errno())
echo "Connection Failed".mysqli_connect_errno();
else
{
$query="create table AB(aid varchar(20) primary key,fname varchar(20),lname varchar(20),streetaddress varchar(20),city varchar(20),state varchar(20),zip varchar(20),addrtype varchar(20),Teleno varchar(20),telera varchar(20),faxno varchar(20),faxnr varchar(20),emailadd varchar(50),emailr varchar(20),note varchar(50))";
$res=mysqli_query($mysqli,$query);
if($res)
echo "created";
else
echo "notcreated";
}
?>