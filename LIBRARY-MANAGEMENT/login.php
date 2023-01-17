<?php
session_start();
    include("connect.php");
    $id = $_POST['id'];
    $_SESSION["id"] =$id;
    $pass = $_POST['pass'];
    if ($id=='admin' and $pass=='admin') {
       echo ' <script>
        alert("ADMIN LOGIN SUCCESSFULL");
        window.location = "admindashboard.html";
        </script>   ';
    }
    else
    {
    $insert="select B_ID,password from borrower where B_ID='$id' and password='$pass'";
    $rslt=$con->query($insert);
    if($rslt->num_rows==0)
    	{

	echo '
        <script>
        alert("INVALID LOGIN");
        window.location = "login.html";
        </script>   
    ' ; 
}
    
else
{
    	echo '
        <script>
        alert("login succesfull");
        window.location = "dashboard.php";
        </script>   
    ' ; 
    }
}

    ?>
