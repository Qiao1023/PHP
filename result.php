<?php
include("include.inc");
?>
<?php
$link=mysqli_connect(
    'localhost',
    'root',
    '',
    'school'

);
if(!$link)
    die("error");
else{
    $sql="SELECT * FROM student";
    $result=mysqli_query($link,$sql);

    echo "<table border='1'>";
    while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
        echo "<td>".$row["No"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td><a href='del.php?No=".$row["No"]."'>delete</a></td><td>amend</td>";
    echo "</tr>";
    };
    echo "</table>";
}
echo "</br><a href='index.php'>resend</a>";
?>