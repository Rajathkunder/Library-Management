<?php
    include("connect.php");
    $B_ID = $_POST['id'];
    $B_NAME = $_POST['name1'];
    $B_PHNO = trim($_POST['Mobile']);
    $B_ADDR = $_POST['Address'];
    $password = $_POST['password'];
    $confirm = $_POST['cnf'];
    //$ISSUE_DATE= $_POST['idd'];
    //$DUE_DATE= $_POST['ddd'];

  
if($password==$confirm){
$insert = "INSERT INTO  borrower(`B_ID`, `B_NAME`, `B_PHNO`,`B_ADDR`,`password`) VALUES('$B_ID','$B_NAME','$B_PHNO','$B_ADDR','$password')";
$rslt=$con->query($insert);

if($rslt){
    echo '
        <script>
        alert("registration succesfull");
        window.location = "login.html";
        </script>   
    ' ; 
}
else{
    echo '
    <script>
        alert("some error has occured");
       
    </script>   
    ' ;
}
}
else{
    echo '
        <script>
        alert("password and confirm password doesnt match");
        window.location = "registration.html";
        </script> ' ;
}
?>