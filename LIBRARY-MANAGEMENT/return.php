<?php
$iid=$_GET['iid'];
include("connect.php");
$v='available';
$insert1 = "update book set STATUS='$v' where B_CODE='$iid'";
$rslt1=$con->query($insert1);
//$c='rejected';
//$issuedate=date("d/m/Y");
//$ff=$issuedate;
//$duedate = date('d-m-Y', strtotime($issuedate. ' + 10 days'));
//date_add($issuedate, date_interval_create_from_date_string("6 days"));
//$date1 = date('M d, Y', strtotime('+7 days') );
$insert ="delete from issue where B_CODE='$iid'";
$rslt=$con->query($insert);
if($rslt){
    echo '
        <script>
        alert("Book Returned succesfully");
        window.location = "borrowedbooks.php";
        </script>   
    ' ; 
}


?>