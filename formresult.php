<?php 
session_start();
?>
<meta charset=utf8>  
<?php
if($_POST["sName"]!=""){
    $uID="1113320";
    $uPWD="20";

    $sID=$_POST["sID"];
    echo "Your ID:".$sID."<br/>";
    $sPWD=$_POST["sPWD"];
    echo "Your password:".$sPWD."<br/>";
    if($uID==$sID && $uPWD==$sPWD){
        $_SESSION["check"]="Yes";
        header("Location:success.php");
    }
    else{
        $_SESSION["check"]="No";
        header("Location:fail.php");
    }
    $sName=$_POST["sName"];
    echo "Your name:".$sName."<br/>";
    $sCity=$_POST["sCity"];
    echo "Your city:".$sCity."<br/>";
    $sGender=$_POST["sGender"];
    echo "Your gender:".$sGender."<br/>";
    $sColor=$_POST["sColor"];
    echo "Your Tshirt Color:".$sColor."<br/>";
    echo "Your Birth:";
    $sDate=$_POST["sDate"];
    echo $sDate.",";
    $sTime=$_POST["sTime"];
    echo $sTime."<br/>";
    $sEmail=$_POST["sEmail"];
    echo "Your email:".$sEmail."<br/>";
    $sFile=$_POST["sFile"];
    echo "Your file:".$sFile."<br/>";
    $sETA=$_POST["sETA"];
    echo "Your Expectation:".$sETA."<br/>";
    $sSize=$_POST["sSize"];
    echo "Your Tshirt size:";
    $x=count($sSize);
    for($i=0;$i<$x;$i++){
        if($i<$x-1){
            echo $sSize[$i].",";
        }
        else{
            echo $sSize[$i];
        }
    }
    echo "<br/>";
    $sCommet=$_POST["sCommet"];
    echo "Your Comment:".$sCommet."<br/>";
    $sSecret=$_POST["sSecret"];
    echo $sSecret."<br/>";
}
else{
    echo "wrong";
}
?>