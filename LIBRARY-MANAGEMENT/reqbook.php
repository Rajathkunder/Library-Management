<?php
$bc=$_GET['bc'];
session_start();
$id=$_SESSION["id"];
include("connect.php");
$insert ="update book set STATUS='requested' where B_CODE='$bc'";
$rslt=$con->query($insert);
$a='requested';
$insert1="insert into issue(`B_CODE`,`B_ID`,`status`)values('$bc','$id','$a')";
$rslt1=$con->query($insert1);

if($rslt1){
    echo '
        <script>
        alert("Book Requested succesfully");
        window.location = "dashboard.php";
        </script>   
    ' ; 
}




?>