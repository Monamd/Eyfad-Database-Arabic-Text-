<html>

<head>
	<title>تسجيل مسخدم جديد</title>
	<meta charset="UTF-8">
</head>
<?php
$servername = "sql201.epizy.com";
$username = "epiz_26190033";
$password = "3Yibo4YjUI";
$dbname = "epiz_26190033_test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_query($conn,"SET NAMES 'utf8'");
mysqli_query($conn,'SET CHARACTER SET utf8');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$name = $_POST['name'];
$cont = $_POST['contribution'];
$edu = $_POST['edu'];
$gender = $_POST['gender'];
$chk="";
foreach($cont as $chk1)
   {
      $chk .= $chk1.", ";
   }

if($pass!=$pass2){
    header("location: sign_up.php?error=pass");
}

//$sql = " INSERT INTO volunteer(volunteerName, volunteerEmail , volunteerPass , volunteerPhone ,volunteerage) VALUES ('$name','$username','$pass','$phone','$age')";
$sql_log_in = "SELECT * FROM volunteer WHERE volunteerEmail = '$username'";
$stmt_log_in = $conn->prepare($sql_log_in);
$stmt_log_in->execute();
$row = $stmt_log_in->fetch();
if($row!=null) {
    header("location: sign_up.php?error=duplicated_email");
	//echo "<script>
	//alert('البريد الالكتروني مستخدم بالفعل');
	//window.location.href= 'sign_up.php';
	//</script>";
	//exit();
}
else{
$sql = " INSERT INTO volunteer (volunteerName, volunteerEmail , volunteerPass , volunteerPhone , volunteerEdu, volunteerContri,volunteergender,volunteerage) VALUES ('$name','$username','$pass','$phone','$edu','$chk','$gender','$age')";
if (mysqli_query($conn, $sql)) {
	$message = "تم التسجيل بنجاح";
	echo "<script>
	alert('$message');
	window.location.href= 'login.php';
	</script>";

}
}

mysqli_close($conn);
?>
</html>
