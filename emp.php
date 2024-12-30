<?php
$servername="localhost";
$username="root";
$password="";
$dbname="empdb";
$tbname="emp1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("connection failed.".mysqli_connect_error());
}
else{
echo"<br><h2 align=center>EMPLOYEE DETAILS</h2><br/>";
}
$sql="SELECT*FROM emp1";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
echo"<table border=2 align=center>";
echo"<tr><th>Enployee id</th>";
echo"<th>Enployee name</th>";
echo"<th>Department</th>";
echo"<th>salary</th></tr>";
while($row=mysqli_fetch_assoc($res))
{
echo"<tr><td>$row[eid]</td>";
echo"<td>$row[ename]</td>";
echo"<td>$row[dept]</td>";
echo"<td>$row[sal]</td></tr>";
}
echo"</table>";
}
else{
echo"0 results";
}
mysqli_close($conn);
?>