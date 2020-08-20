<?php
$connect =mysqli_connect("sql201.epizy.com","epiz_26190033","3Yibo4YjUI","epiz_26190033_test");
//require('Connection.php');
// ------------- ID---------------
 session_start();
 $voID= $_SESSION['id'];

 ?>

<!DOCTYPE html>
<html>

<head>
     <meta charset="UTF-8">
     <title>رفع الصور</title>

     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" href="eyfadLogo.PNG">
     <!--Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
     <!-- Bootstrap -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

     <!-- Icons  -->
     <script src="https://kit.fontawesome.com/adac5f140b.js" crossorigin="anonymous"></script>

     <!-- Custom Stylesheets link tags -->
     <link rel="stylesheet" href="Stylesheets/master.css">


    



     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
     <!-- Google Fonts -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
     <!-- Bootstrap core CSS -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
     <!-- Material Design Bootstrap -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">



    
     <meta charset='UTF-8'>
     <meta name="robots" content="noindex">
     <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
     <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
     <link rel="canonical" href="https://codepen.io/HamishMW/pen/XJogMg?limit=all&page=11&q=animation" />
     
     
     <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
     <style class="cp-pen-styles" type="text/css">
          body {
               text-align: center;
          }

          h1,
          p {
               font: 35px "adelle-sans", sans-serif;
               color: rgba(0, 0, 0, 0.7);
               margin-top: 60px;
          }

          p {
               margin-top: -50px;
               font-size: 18px;
               color: rgba(0, 0, 0, 0.5);
          }

          svg {
               display: block;
               margin: 60px auto;
               width: 80%;
               max-width: 320px;
               cursor: pointer;
          }

          #all-items {
               opacity: 0;
          }


          .st0 {
               fill: #63BEDD;
          }

          .st1 {
               fill: #A0AFB5;
          }

          .st2 {
               fill: #A0AFB5;
               stroke: #737F84;
               stroke-width: 2;
               stroke-linejoin: round;
               stroke-miterlimit: 10;
          }

          .st3 {
               fill: #FFFFFF;
          }

          .st4 {
               fill: none;
               stroke: #A0AFB5;
               stroke-width: 2;
               stroke-miterlimit: 10;
          }

          .st5 {
               fill: #37A0E5;
          }

          .st6 {
               fill: #4AD3AC;
          }

          .st7 {
               fill: none;
               stroke: #FFFFFF;
               stroke-width: 2;
               stroke-miterlimit: 10;
          }

          .st8 {
               fill: #FBB03B;
          }

          .st9 {
               fill: none;
               stroke: #F96155;
               stroke-width: 2;
               stroke-miterlimit: 10;
          }

          .st10 {
               fill: #F96155;
          }

          .st11 {
               fill: #F9F9F9;
               stroke: #737F84;
               stroke-width: 2;
               stroke-linejoin: round;
               stroke-miterlimit: 10;
          }

          .st12 {
               fill: #E2E6E8;
               stroke: #737F84;
               stroke-width: 2;
               stroke-linejoin: round;
               stroke-miterlimit: 10;
          }
     </style>








</head>

<body>

     <section id="#home" class="colored-section">


     <nav style="justify-content: flex-start; " class="navbar navbar-expand-sm navbar-dark">



<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

     <span class="navbar-toggler-icon"></span>

</button>


<div class="collapse navbar-collapse" id="navbarSupportedContent">

<ul class=" nav justify-content-end">

     <li class="nav-link active">

          <a style="color: white; font-family: 'Cairo', sans-serif;  font-size: 18px;

font-weight:bold;" class="nav-link" href="volunteer.php">الصفحة الرئيسية</a> 

     </li>

     <li class="nav-item">

          <a style="color: white; font-family: 'Cairo', sans-serif; font-weight:bold; font-size: 18px;

" class="nav-link" href="volunteer.php#about-us">من نحن</a>

     </li>

     <li class="nav-item">

          <a style="color: white; font-family: 'Cairo', sans-serif; font-weight:bold; font-size: 18px;

" class="nav-link" href="volunteer.php#contact-us">اتصل بنا</a>

     </li>

     <li class="nav-item">

          <a style="color: white; font-family: 'Cairo', sans-serif; font-weight:bold; font-size: 18px;
" class="nav-link" href="image.php">رفع الصور </a>

     </li>

     <li class="nav-item">

              <a style="color: white; font-family: 'Cairo', sans-serif; font-weight:bold; font-size: 18px;

" class="nav-link" href="show_template_static.html">النماذج</a>

     </li>

     <li class="nav-item">

       <a style="color: white; font-family: 'Cairo', sans-serif; font-weight:bold; font-size: 18px;

" class="nav-link" href="Creators.html">المتميزين  </a>

  </li>
  <li class="nav-item">

     <a style="color: white; font-family: 'Cairo', sans-serif; font-weight:bold; font-size: 18px;

" class="nav-link" href="Participate.html">المساهمات  </a>

</li>
<li class="nav-item">

 <a style="color: white; font-family: 'Cairo', sans-serif; font-weight:bold; font-size: 18px;

" class="nav-link" href="FAQ.html">الأخطاء والأسئلة الشائعة  </a>

</li>

     <li class="nav-item">

          <a style="color: white; font-family: 'Cairo', sans-serif; font-weight:bold;  font-size: 18px;" class="nav-link" href="login.php">تسجيل الخروج</a>

     </li>



</ul>

</div>

<a class="navbar-brand" href="#"><img src="eyfadLogo.PNG" alt="logo" height="150" width="150" /> </a>

</nav>


     </section>
     <section id="#upload" class="container-padding">

          <h1 style="color: #35d0ba; text-align:right; font-size:50px; padding-bottom:140px ; padding-Top:140px; padding-right:150px;">
               رفع الصور </h1>

               <div  class="text-center contain"> <!--/*here*/-->
                    <img  src="Image upload-amico.png" class="rounded mx-auto d-block" style="width:400px;height:400px" alt="Image upload-amico">
                </div>

         
                  
                    <div class="container" style="width:500px; justify-content:center; text-align:center;">
                         <h3 style="justify-content:center; text-align:center;">فضلا قم برفع الصورة ثم انقر على زر ارسال</h3>
                         <br />


                         <form action="add_Image.php" method="POST" enctype="multipart/form-data" class="form-div">
                            <input type="file" name="image" id="image" />   
                            <input name="insert"  id="insert" type="submit" value="ارسال ">
               
                        <!--/*here*/-->
                        </form>


                         <br />
                         <br />
                         <table id="customers" class="table table-bordered"> <!--/*here*/-->
                              <tr>
                                   <th style="  font-size:25px; text-align: center;">جميع الصور التي قمت برفعها</th>
                              </tr>
                              <?php
                              $query = "SELECT * FROM image where volunteerEmail ='$voID' ";
                              $result = mysqli_query($connect, $query);
                              while ($row = mysqli_fetch_array($result)) {
                                   echo "
                          <tr>
                               <td>

                                    <img src='uploads\\".$row['imagePath']."' height='200' width='200' class='img-thumnail' />
                               </td>
                          </tr>
                    ";
                              }
                              ?>
                         </table>
                    </div>
     </section>
     <section id="#contact-us" class="contact-us-color container-padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <p class="contact-text">اتصل بنا</p>
        </div>
      </div>
      <div id="contact-us" class="row">
        <div class="col-12">
        <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=saudidata2030@gmail.com"><i class="fas fa-envelope-open-text icons"></i></a>

<a href="https://twitter.com/Eyfad_SIG?s=21"><i class="fab fa-twitter icons"></i></a>

<a href="https://sa.linkedin.com/in/saudidata2030"><i class="fab fa-linkedin icons"></i></a>
          <i class="saudi arabia flag"></i>
        </div>
      </div>
    </div>
  </section>

</body>

</html>

