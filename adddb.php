<?php
include("include.inc");
?>
<?php
$sName=$_POST["sName"];
$sDept=$_POST["sDept"];


$link=mysqli_connect(
    'localhost',
    'root',
    '',
    'school'

);
if(!$link)
    die("error");
else{
    $sql="INSERT INTO student(Name,Department)VALUES('$sName','$sDept')";
    if($result=mysqli_query($link,$sql)){
        echo "</br>added!";
    }
}
    
echo "</br><a href='result.php'>checkout data</a>";
?>