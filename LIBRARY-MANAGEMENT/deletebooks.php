<?php
$id=$_GET['id'];
include("connect.php");
$insert = "delete from book where B_CODE='$id'";
$rslt=$con->query($insert);

if($rslt){
    echo '
        <script>
        alert("Book Deleted succesfully");
        window.location = "viewallbooks.php";
        </script>   
    ' ; 
}



?>