<?php
$id=$_GET['id'];
include("connect.php");
$v='booked';
$insert1 = "update book set STATUS='$v' where B_CODE='$id'";
$rslt1=$con->query($insert1);
$c='approved';
$issuedate=date("d/m/Y");
$ff=$issuedate;
//$duedate = date('d-m-Y', strtotime($issuedate. ' + 10 days'));
//date_add($issuedate, date_interval_create_from_date_string("6 days"));
$date1 = date('M d, Y', strtotime('+7 days') );
$insert ="update issue set issue_date='$ff',due_date='$date1',STATUS='$c' where B_CODE='$id'";
$rslt=$con->query($insert);
if($rslt){
    echo '
        <script>
        alert("Request Approved succesfully");
        window.location = "issuereq.php";
        </script>   
    ' ; 
}


?>