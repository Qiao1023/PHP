<html>
<?php
include("include.inc");
?>
<head>
<title>高大資管晚會報名</title>
</head>
<form action="adddb.php" method ="post">
<input type="text" name="sName" ></br>
<input type="text" name="sDept" ></br>
<input type="submit"></br>
</form>
</html>
<?php
// $link=mysqli_connect(
//     'localhost',
//     'root',
//     '',
//     'school'

// );
// if(!$link)
//     die("error");
// else
//     echo "success!";
// $sql="SELECT * FROM student";
// $result=mysqli_query($link,$sql);

// echo "<table border='1'>";
// while($row=mysqli_fetch_assoc($result)){
// echo "<tr>";
//     echo "<td>".$row["No"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td><a href='del.php?No=".$row["No"]."'>delete</a></td><td>amend</td>";
// echo "</tr>";
// };
// echo "</table>";


// mysqli_close($link);
?>