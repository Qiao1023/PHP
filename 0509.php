<?php
include("include.inc");
?>
<?php
$link=mysqli_connect(
     'localhost',
     'root',
     '',
     'college'

 );
 if(!$link)
     die("error");
 else
     echo "success!";
 $sql="SELECT * FROM student";
 $result=mysqli_query($link,$sql);

 echo "<table border='1'>";
 while($row=mysqli_fetch_assoc($result)){
 echo "<tr>";
     echo "<td>".$row["No"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["file"]."</td><td><a href='del.php?No=".$row["No"]."'>delete</a></td><td><a href='update.php?No=".$row["No"]."'>amend</a></td>";
 echo "</tr>";
 };
 echo "</table>";


 mysqli_close($link);
?>