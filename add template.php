<?php 

	require('Connection.php');
	
	$conn=mysqli_connect("data.org.sa","dataorg_eifad","NAjwbRBt3F2","dataorg_eifad");
	
	//session_start();
	$voID= $_SESSION['id'];

	$img_tmp=$_FILES['image']['tmp_name'];
	$img_size=$_FILES['image']['size'];
	$img_type=$_FILES['image']['type'];
	$dir_name="Template_image/";
	
	$img_name=$_FILES['image']['name'];
	
	

	move_uploaded_file($img_tmp,$dir_name.$img_name)or die("ERROR");
	
	

	
	$qry="INSERT INTO template values ( 0,'".$img_name."','false') ";

	$insert_img = mysqli_query( $conn, $qry);
	
	
	if ($insert_img) {
	# code...
	header ("location: show_tmplate.php?insert=sucess");
	}
	else{
	 echo "There is something wrong with this code. Eff!";
	}

 ?>