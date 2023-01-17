<?php
include("connect.php");
$insert = "select *from issue where STATUS='requested'";
$rslt=$con->query($insert);

echo '
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<title>all books</title>
	<style>
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
  <li><a href="admindashboard.html">HOME</a></li>
  <li><a href="addbooks.php">ADD BOOKS</a></li>
  <li><a href="viewallbooks.php">VIEW ALL BOOKS</a></li>
  <li><a href="issuereq.php">ISSUE REQUESTS</a></li>
  
  
</ul>
<br><table class="table table-dark table-striped">
<tr><th>BOOK CODE</th><th>USER ID</th><th></th><th></th></tr>
';
 while ($r=$rslt->fetch_assoc()) {
$bb=$r['B_CODE'];
echo'	
<tr><td>'.$r['B_CODE'].'</td><td>'.$r['B_ID'].'</td><td><button class="btn btn-primary" onclick=window.location.href="approve.php?id='.$bb.'">APPROVE</button></td><td><button class="btn btn-danger" onclick=window.location.href="reject.php?id='.$bb.'">REJECT</button></td></tr>'


;
}

echo '
</table>
</body>
</html>';

?>