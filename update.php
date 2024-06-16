<?php
include("include.inc");
?>
<?php
$sNo=$_GET["No"];

$link=mysqli_connect(
    'localhost',
    'root',
    '',
    'college'

);
$sql="SELECT * FROM student WHERE NO='$sNo'";
if($result=mysqli_query($link,$sql)){
    $row=mysqli_fetch_assoc($result);
    $Name=$row["Name"];
    $Department=$row["Department"];
}
?>
<form action="updatecheck.php" method ="post" enctype="multipart/form-data">
Num:<?php echo $sNo ?><input type="hidden" name="uNum" value='<?php echo $sNo ?>'></br>
Name:<input type="text" name="uName" value='<?php echo $Name ?>'></br>
Dept:<input type="text" name="uDept" value='<?php echo $Department ?>'></br>
Choose yor file:<input type="file" name="myfile"></br>
<input type="submit">
</form>