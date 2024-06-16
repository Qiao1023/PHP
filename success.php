<?php 
session_start();
?>
<?php
if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes"){
        echo "Welcome<br/>";
        echo"<a href='logout.php'>Logout</a>";
    }
    else{
        echo "illegal login<br/>";
        echo "After 3s returning to login screen";
        header("Refresh:3;url=form.php");
    }
}
else{
    echo "illegal login<br/>";
    echo "After 3s returning to login screen";
    header("Refresh:3;url=form.php");
}

?>