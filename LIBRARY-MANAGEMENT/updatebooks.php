
<?php
$id=$_GET['id'];

include("connect.php");
    $bc = $_POST['bc'];
    
    $bn=$_POST['bn'];
     
    $ba = $_POST['ba'];
    $bt = $_POST['bt'];
    $bp = $_POST['bp'];
    $status = $_POST['status'];
    
$insert ="update book set BOOK_NAME='$bn',BOOK_AUTHOR='$ba',BOOK_TYPE='$bt',BOOK_PRICE='$bp',STATUS='$status' where B_CODE='$id'";
$rslt=$con->query($insert);

if($rslt){
    echo '
        <script>
        alert("Book Updated succesfully");
        window.location = "viewallbooks.php";
        </script>   
    ' ; 
}




?>