<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>

<style>
table {
border-collapse: collapse;
width: 100%;
color: black;
font-family: "Open Sans", sans-serif;
font-size: 25px;
text-align: left;
}
th {
background-color: black;
color: white;
}
tr:nth-child(even) {background-color: white}
</style>
</style>
</head>
<body background="white">

	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<table border="10%" class="table">
<tr>
<th align="center" class="table-grey" align="center ">Pesticides</th>
<th align="center" class="table-grey" align="center">Uses/Action</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "imgsql");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT   name ,dat FROM upimg";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>"
. $row["name"]. "</td>
<td>" . $row["dat"]. "</td>
</tr>"

;
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>