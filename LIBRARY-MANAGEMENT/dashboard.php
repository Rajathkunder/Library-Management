<?php
session_start();
$id=$_SESSION["id"];
echo '

<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
	body {
  background-image: url("ll.jpg");
  background-repeat: no-repeat;
  background-color: #cccccc;
   background-size: auto;
   background-size: 1600px 800px;
}
ul {

  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;

}

li {
  float: left;
}
.aa{
  float:right;
  color:white;
  margin-top:11px;
  margin-right:66px;
   text-transform: uppercase;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px 22px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
</head>
<body>

<ul>
  <li><a href="dashboard.php">HOME</a></li>
  <li><a href="requestbooks.php">REQUEST BOOK</a></li>
  <li><a href="borrowedbooks.php">BORROWED BOOKS</a></li>
   <li><a href="userreqbooks.php">REQUESTED BOOKS</a></li>
   <li><a href="logout.php">LOGOUT</a></li>
  <li class="aa"><b>'.$id.'</b></li>
  
  
</ul>

</body>
</html>';


?>


