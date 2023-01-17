<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
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
<form action="addbooks.php" method="post">
  <div class="container">
    <h1>ADD BOOK</h1>
    <p>Fill the details of the book.</p>
    <hr>

    <label for="email"><b>BOOK CODE</b></label>
    <input type="text" placeholder="Enter Book code" name="bc" id="email" required>

    <label for="psw"><b>BOOK NAME</b></label>
    <input type="text" placeholder="Enter Book name" name="bn" id="psw" required>

    <label for="psw-repeat"><b>BOOK AUTHOR</b></label>
    <input type="text" placeholder="Enter Book Author" name="ba" id="psw-repeat" required>
     <label for="psw"><b>BOOK TYPE</b></label>
    <input type="text" placeholder="Enter Book Type" name="bt" id="psw" required>
     <label for="psw"><b>BOOK PRICE</b></label>
    <input type="text" placeholder="Enter Book Price" name="bp" id="psw" required>
    <label for="psw-repeat"><b>STATUS</b></label>
    <select name="status" class="form-select" aria-label="Default select example">
    	<option value="available">AVAILABLE</option>
    	<option value="requested">REQUESTED</option>
    	<option value="booked">BOOKED</option>
    </select>
    <hr>
   

    <input type="submit" name="submit" class="registerbtn" value="ADD BOOK">
  </div>
  

</form>

</body>
</html>
<?php
if(isset($_POST['submit']))
{

include("connect.php");
    $bc = $_POST['bc'];
    $bn=$_POST['bn'];
    $ba = $_POST['ba'];
    $bt = $_POST['bt'];
    $bp = $_POST['bp'];
    $status = $_POST['status'];
    
$insert = "INSERT INTO book(`B_CODE`,`BOOK_NAME`,`BOOK_AUTHOR`,`BOOK_TYPE`,`BOOK_PRICE`,`STATUS`	
) VALUES('$bc','$bn','$ba','$bt','$bp','$status')";
$rslt=$con->query($insert);

if($rslt){
    echo '
        <script>
        alert("Book Added succesfully");
        window.location = "viewallbooks.php";
        </script>   
    ' ; 
}


}

?>