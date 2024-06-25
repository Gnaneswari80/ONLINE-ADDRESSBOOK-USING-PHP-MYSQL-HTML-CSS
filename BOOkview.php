<?php
$mysqli=mysqli_connect("localhost","gnana","gnana","BASE");
$query="select * from AB";
$res=mysqli_query($mysqli,$query);
echo "<table border=1>";
while($view=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>";
echo $view['aid'];
echo "</td>";
echo "<td>";
echo $view['fname'];
echo "</td>";
echo "<td>";
echo $view['lname'];
echo "</td>";
echo "<td>";
echo $view['streetaddress'];
echo "</td>";
echo "<td>";
echo $view['city'];
echo "</td>";
echo "<td>";
echo $view['state'];
echo "</td>";
echo "<td>";
echo $view['zip'];
echo "</td>";
echo "<td>";
echo $view['addrtype'];
echo "</td>";
echo "<td>";
echo $view['Teleno'];
echo "</td>";
echo "<td>";
echo $view['telera'];
echo "</td>";
echo "<td>";
echo $view['faxno'];
echo "</td>";
echo "<td>";
echo $view['faxnr'];
echo "</td>";
echo "<td>";
echo $view['emailadd'];
echo "</td>";
echo "<td>";
echo $view['emailr'];
echo "</td>";
echo "<td>";
echo $view['note'];
echo "</td>";




echo "</tr>";
}
echo "</table>";
?>