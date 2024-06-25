<?php
$mysqli=mysqli_connect("localhost","gnana","gnana","BASE");
$query="select * from AB";
$res=mysqli_query($mysqli,$query);

while($view=mysqli_fetch_array($res))
{
   if($_POST['aid']==$view['aid'])
{
 $na=$view['fname'];
 $sa=$view['lname'];
echo "<h2>Showing Record for $na $sa </h2>";

echo "<h4>Address:</h4>";

echo  $view['streetaddress']." ";

echo $view['city']." ";

echo $view['state']." ";

echo $view['zip']." ";
echo "(".$view['addrtype'].")";

echo "<br>";
echo "<h4>Telephone:</h4>";
echo $view['Teleno'];
echo "(".$view['telera'].")"."<br>";

echo "<h4>Fax :</h4>";

echo $view['faxno'];

echo "(".$view['faxnr'].")"."<br>";

echo "<h4>Email:</h4>";
echo $view['emailadd'];

echo "(".$view['emailr'].")<br>";
echo "<h4>Personal Note:</h4>";
echo $view['note'];











}

}

?>