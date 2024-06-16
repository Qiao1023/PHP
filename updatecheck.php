<?php
include("include.inc");
?>
<?php
$sNo=$_POST["uNum"];
$Name=$_POST["uName"];
$Department=$_POST["uDept"];
$file=$_FILES["myfile"]["name"];
echo $sNo."<br/>";
echo $Name."<br/>";
echo $Department."<br/>";
$link=mysqli_connect(
    'localhost',
    'root',
    '',
    'college'

);
$sql="UPDATE student SET Name ='$Name', Department='$Department' , file ='$file' WHERE NO='$sNo'";
echo "檔案名稱: ".$_FILES["myfile"]["name"]."<br/>";
echo "暫存檔名: ".$_FILES["myfile"]["tmp_name"]."<br/>";
echo "檔案尺寸: ".$_FILES["myfile"]["size"]."<br/>";
echo "檔案種類: ".$_FILES["myfile"]["type"]."<br/>";

$ext=pathinfo($_FILES["myfile"]["name"], PATHINFO_EXTENSION);
$upname=time().".".$ext;
$upname="pic\\".$upname;
echo $upname;


if($result=mysqli_query($link,$sql)){
    echo "</br>update successfully!<br/>";
}
if(copy($_FILES["myfile"]["tmp_name"],$upname)){
    echo "upload successfully!<br/>";
    unlink($_FILES["myfile"]["tmp_name"]);
}
echo "</br><a href='index.php'>checkout</a>";
?>