<?php

	require('Connection.php');
	

	$conn=mysqli_connect("sql201.epizy.com","epiz_26190033","3Yibo4YjUI","epiz_26190033_test");
	
	
	if(isset($_POST['insert'])){
	
		 if(empty($_FILES['image']['name'])){
			 $error= "please select image" ;} 
		
			elseif(!in_array($_FILES['image']['type'], array("image/png","image/jpg","image/jpeg","image/gif"))){
				$error="The file should be an image!" ;}
			
				else{

					//session_start();
					$voID= $_SESSION['id'];

					$img_tmp=$_FILES['image']['tmp_name'];
					$img_size=$_FILES['image']['size'];
					$img_type=$_FILES['image']['type'];
					$dir_name="uploads/";

					$img_name=$_FILES['image']['name'];
                    //to add the ID of the volunteer
                     $array = explode(".", $img_name);  
                    $name = $array[0];  
                    $ext = $array[1];  
                    $Final_name = $name."_".$voID.$ext;  //EX:Template1_1002.jpg

                   

					move_uploaded_file($img_tmp,$dir_name.$Final_name)or die("ERROR");
                   




					$qry="INSERT INTO image values ( 0,'".$voID."','".$Final_name."') ";

					$insert_img = mysqli_query( $conn, $qry);


					if ($insert_img) {
					# code...
					header ("location:image.php?insert=sucess");
					}
					else{
					 echo "لم يتم ارسال الصورة، هناك مشكلة ما";
					}
					
		}//end else
				
		}//end if

 ?>
