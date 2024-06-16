<?php
include("include.inc");
?>
<?php
$sNo=$_GET["No"];
$link=mysqli_connect(
    'localhost',
    'root',
    '',
    'school'

);
$sql="DELETE FROM student WHERE NO='$sNo'";
if($result=mysqli_query($link,$sql)){
    echo "</br>delete!";
}
echo "</br><a href='result.php'>checkout data</a>";
?>