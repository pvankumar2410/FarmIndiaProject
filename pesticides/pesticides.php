<!DOCTYPE html>
<?php 
 session_start();
	$SQL = new mysqli("localhost", "root", "", "imgsql");


// Edit GET PHP
if(isset($_GET['Edit'])){
	$Edit = ($_GET['Edit']);
$cheksp = $SQL->query("SELECT * FROM upimg WHERE img='$Edit' ORDER BY id DESC");

if ( $cheksp->num_rows > 0 ) {

$rimg = $cheksp->fetch_assoc();
	$img = $rimg["img"];
	$name = $rimg["name"];
	$dat = $rimg["dat"];
	$btsav = "Update";
}











}
else
{
	$name = "";
	$dat = "";
	$btsav = "Upload";
}
if(isset($_POST['Update'])){
	$name	 = ($_POST['name']);
	$dat	 = ($_POST['dat']);
	$imgr = $_FILES['img']['tmp_name'];
	$Upda = "UPDATE upimg SET name='$name', dat='$dat' WHERE img='$img'";
if ($SQL->query($Upda) === TRUE) {
	move_uploaded_file($imgr, "img/$img.png");
	unset($_SESSION['name']);
	unset($_SESSION['dat']);
	header("location:index.php");
}}



// Cansel PHP
if(isset($_POST['Cansel'])){
	unset($_SESSION['name']);
	unset($_SESSION['dat']);
	unset($_SESSION['img']);
	header("location:index.php");
}
// DELETE PHP
if(isset($_GET['Dell'])){
	$Dell = ($_GET['Dell']);
$DEL = "DELETE FROM upimg WHERE img='$Dell'";
if ($SQL->query($DEL) === TRUE) {
	unlink("img/$Dell.png");
	unset($_SESSION['name']);
	unset($_SESSION['dat']);
	header("location:index.php");
}}

// MASSEGE PHP
	if(isset($_SESSION['name'])){
	$name = $_SESSION['name'];
}
	if(isset($_SESSION['dat'])){
	$dat = $_SESSION['dat'];
}
	if(isset($_SESSION['img'])){
	$msg = $_SESSION['img'];
	unset($_SESSION['img']);
}
else	
{$msg = "";}

// Upload PHP
if(isset($_POST['Upload'])){
	$name	 = ($_POST['name']);
	$dat	 = ($_POST['dat']);
	$img = $_FILES['img']['tmp_name'];
if(empty($name)){
	$_SESSION['img'] = "Enter Name";
	header("location:index.php");
}
else
{
	$_SESSION['name'] = $name;
if(empty($dat)){
	$_SESSION['img'] = "Enter dat";
	header("location:index.php");
}
else
{
	$_SESSION['dat'] = $dat;
if(empty($img)){
	$_SESSION['img'] = "Select a Image";
	header("location:index.php");
}
else
{
	$inm = rand(1000,1000000000);
	move_uploaded_file($img, "img/$inm.png");
	$insurt = "INSERT INTO upimg (img, name, dat)
	VALUES('$inm', '$name', '$dat')";
	mysqli_query($SQL, $insurt);
	unset($_SESSION['name']);
	unset($_SESSION['dat']);
	$_SESSION['img'] = "Upload Sucsess Full";
	header("location:index.php");
}}}}
?>


<head>
	<title>Pesticides</title>
	<style>
	body {
		margin:0px;	margin:0px auto;	float:center;	width:520px;	color:#787878;
		font:bold 12px/24px "Helvetica", Arial, Helvetica, sans-serif;
}	.post{
		margin:0px;	margin:0px auto;	float:left;	width:500px;
		box-shadow: 0px 0px 10px 0px #787878;	margin-top:60px;	padding:10px;
}	.img{
		width:348px;	height:150px;	float:left;	padding-left:150px;
		margin-top:10px;	border:1px solid grey;	position:relative;
}	edit{
		width:348px;	height:30px;	float:right;	background:grey;
		position: absolute;bottom:0;right:0;
}	name, dat{
		float:left;	width:90%;	padding:2px 5%;	border-bottom:1px solid grey;
}	input{
		width:168px;	height:30px;	float:left;	padding:0px 10px;
		margin-bottom:3px;	border:1px solid grey;	border-right:0;
}	file{
		width:120px;	height:20px;	float:left;	padding:5px 0px;
		margin-bottom:3px;	border:1px solid grey;	overflow: hidden;
		text-align:center;	color:grey;	font:bold 12px/20px Arial;
		position:relative;	color:#fff;	background:grey;
}	.file{
		width:150px;	height:30px;	float:left;	opacity: 0;
		position: absolute;top:0;left:0;
}	.submit{
		width:250px;	height:32px;	float:right;	color:#fff;border:0;
		border-left:1px solid #fff;	margin-bottom:30px;	background:grey;
}	.Can{
		border-left:1px solid grey;
}	span{
		width:100%;	float:left;	color:grey;	text-align:center;
}	a{
		width:80px;	height:20px;	float:right;	color:#fff;	padding:5px 0px;
		text-align:center;	border-left:1px solid #fff;
}
</style>

</head><body>
	<style>
h1 {
  color: grey;
  font-family: verdana;
  font-size: 300%;
}
p {
  color: red;
  font-family: courier;
  font-size: 160%;
}
</style>
<div id="left" align="left">
<h1 align="center">Pesticides</h1>
<?php
	$getimg = "SELECT * FROM upimg WHERE id ORDER BY id DESC ";
	$result = $SQL->query($getimg);if ($result->num_rows > 0) {
	while($rimg = $result->fetch_assoc()) {
	$img = $rimg["img"];	$name = $rimg["name"];	$dat = $rimg["dat"];
echo "
		<div class='img' style='background:url(img/$img.png)  no-repeat left top ;background-size:150px;'>
			<name>Name : $name</name>
			<dat>About Pesticides : $dat</dat>
		</div>
";
}}
?>
</div>
</div>
</body>





