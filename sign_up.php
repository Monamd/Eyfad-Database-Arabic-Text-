<!DOCTYPE html>
<?php
require('Connection.php');
 ?>
<html>

<head>
	<title>تسجيل مسخدم جديد</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1",charset="UTF-8">
    <link rel="icon" href="eyfadLogo.png">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
</head>
<style>
    	/* Coded with love by Mutiullah Samim */
		body,
		html {
			margin: 50px;
			padding: 0;
			height: 100%;
			background: #3eeed4 !important;
		}
		.user_card {
			height: 800px;
			width: 500px;
			margin-top: auto;
			margin-bottom: auto;
			background: #35d0ba;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}
		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -75px;
			border-radius: 50%;
			background: #238d7d;
			padding: 10px;
			text-align: center;
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid white;
		}
		.form_container {
			margin-top: 100px;
		}
		.login_btn {
			width: 100%;
			background:   #238d7d !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background:   #238d7d !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color:   #238d7d !important;
		}
</style>
<!--Coded with love by Mutiullah Samim-->
<body>
<?php
if(isset($_GET['error'])){
    if($_GET['error']=="duplicated_email"){
        print("<script>
              var x = confirm('الايميل موجود بالفعل'); 
              if (x==true){
               document.getElementById('email').value='test';}
               </script>");
    }
     if($_GET['error']=="pass"){
        print("<script>
              alert('كلمة المرور غير متطابقة');
              </script>");
    }
    
}
?>

	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
                        <img src="eyfadLogo.PNG" class="brand_logo" alt="Logo" >
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
                    <form  action="sign_form.php" method="post" style="text-align:right; align-items:right;" class="login100-form validate-form">
                      				<div class="input-group mb-3">

                        <div style="text-align:right; align-items:right;"  data-validate="Username is required" class="wrap-input100 validate-input m-b-26 input-group-append">
                                

                            </div>
                            <input style="text-align:right;font-size:16px;" class="input100 form-control input_user" type="text" name="username" id="email" placeholder="البريد الإلكتروني" required>
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input style="text-align:right;font-size:16px;" class="input100 form-control input_user" type="text" name="name" placeholder="الإسم الثلاثي" required>
                            <span class="focus-input100"></span>


                        </div>
                        <div class="input-group mb-3">

                  <div style="text-align:right; align-items:right;"  data-validate=" required" class="wrap-input100 validate-input m-b-26 input-group-append">
                         

                      </div>
                      <input style="text-align:right;font-size:16px;" class="input100 form-control input_pass" type="phonr" name="phone" placeholder="رقم الجوال" required>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input style="text-align:right;font-size:16px;" class="input100 form-control input_user" type="text" name="age" placeholder="العمر" required>

                      <span class="focus-input100"></span>

                  </div>
                  <h5 style="text-align:right;font-size:20px;color:black"><b> الجنس</b><br></h5>
                  <p>
                  <label> ذكر <input type="radio" name="gender" value="ذكر">  </label><br>
                  <label>أنثى  <input type="radio" name="gender" value="أنثى"> </label><br>
                  </p>
                  <h5 style="text-align:right;font-size:20px;color:black"><b>المستوى التعليمي</b><br></h5>
                  <p>
                  <label>  دكتوراه <input type="radio" name="edu" value="دكتوراه"> </label><br>
                  <label> ماجستير  <input type="radio" name="edu" value="ماجستير">  </label><br>
                  <label> بكالوريوس  <input type="radio" name="edu" value="بكالوريوس">  </label><br>
                  <label> دبلوم أو أقل <input type="radio" name="edu" value="دبلوم أو أقل">  </label><br>
                  </p>
                  <h5 style="text-align:right;font-size:20px;color:black"><b> نوع المساهمة</b><br></h5>
                  <p>
                  <label>كتابة كلمات  <input type="checkbox" name="contribution[]" value="كتابة كلمات"> </label><br>
                  <label> تطوير خوارزميات  <input type="checkbox" name="contribution[]" value="تطوير خوارزميات">  </label><br>
                  <label> تدقيق مدخلات  <input type="checkbox" name="contribution[]" value="تدقيق مدخلات">  </label><br>
                  <label> تسويق للمبادرة   <input type="checkbox" name="contribution[]" value="تسويق للمبادرة">  </label><br>
                  </p>
                  <div class="input-group mb-3">

            <div style="text-align:right; align-items:right;"  data-validate=" required" class="wrap-input100 validate-input m-b-26 input-group-append">
                    

                </div>
                <input style="text-align:right;font-size:16px;" class="input100 form-control input_pass" type="password" name="pass2" id="pass2" placeholder="إعادة كلمة المرور" required "/>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input style="text-align:right;font-size:16px;" class="input100 form-control input_pass" type="password" name="pass" id="pass" placeholder=" كلمة المرور" required " />

                <span class="focus-input100"></span>

            </div>



							<div class="d-flex justify-content-center mt-3 login_container">
                                <button class="login100-form-btn btn login_btn" type ="submit" name="submit" id = "submit" value ="Submit"" >تسجيل</button >
				   </div>
					</form>
				</div>

			</div>
		</div>
	</div>

</body>
</html>
<script type="text/javascript">
function check_pass() {

  if (document.getElementById('pass').value != document.getElementById('pass2').value) {
  document.getElementById('submit').disabled = true;
  var x = confirm("test");
  if (x==true){
    document.getElementById('submit').disabled = false;  
  }
  } else  {
  var x = confirm("true test");
  document.getElementById('submit').disabled = false;
   window.location.href="sign_form.php";
  
 }
}

</script>
 