<!DOCTYPE html>
<?php
require('Connection.php');
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
	</head>
	<body style="background: url('images/template.png')" >
<?php

      function check_ID_Pass(){
          require('Connection.php');
        $username = $_POST['username'];
        $password = $_POST['pass'];
				//////// ID /////////
				session_start(); // must be called before data is sent
				$_SESSION['id'] = $username;
			//	header('Location: volunteer.php');
				//////// ID /////////
    //  if(is_numeric($username)){
        $table="volunteer";
        $page="volunteer.php";
        $id="volunteerEmail";
        $pass="volunteerPass";
    //  }else{
        //$table="supervisor";
        //$page="supervisor.php";
        //$id="supervisorID";
      //  $pass="supervisorPass";
    //  }
                 $sql_log_in = "SELECT * FROM $table WHERE $id = '$username' AND $pass ='$password'";
                 $stmt_log_in = $conn->prepare($sql_log_in);
                 $stmt_log_in->execute();
                 $row = $stmt_log_in->fetch();
                 if($row!=null) {
                     header("Location: $page");
                     exit();
                 }
                 else {
                   $message = "خطأ في البريد الإلكتروني أو كلمة المرور";
                   echo "<script>
                   alert('$message');
                   window.location.href= 'login.php';
                   </script>";
                 }
      }
check_ID_Pass();
        ?>
	</body>
</html>
