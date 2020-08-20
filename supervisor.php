<!DOCTYPE html>

<?php
require('Connection.php');
?>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>ايفاد</title>
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


<!-- team -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
    
  <style type ="text/css">


* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: block;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #9933cc;
  color: #ffffff;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #0099cc;
}

.aside {
  background-color: #33b5e5;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}






  .button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.about-section {
  padding: 50px;
  text-align: center;
  background-image: linear-gradient(to top, #19fcb8 0%, #35d0ba 100%);
  position: static;
  
}



.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-image: linear-gradient(to top, #19fcb8 0%, #35d0ba 100%);
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: white;
}


.container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    position: static;
    opacity: 0.7;
  }
  .person:hover {
    background-image: linear-gradient(to top, #19fcb8 0%, #35d0ba 100%);
border-radius: 9rem; 
 }
  .selector-for-some-widget {
  box-sizing: content-box;
}
  </style>
</head>

<body>
    
  <section id="#home" class="colored-section">


    <!-- navigation bar -->
    <nav  style="justify-content: flex-start; "class="navbar navbar-expand-sm navbar-dark">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
        <div  class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul  class="nav justify-content-end">
            <li class="nav-link active">
              <a style="color: white; font-family: 'Cairo', sans-serif;
              font-size: 30px;" class="nav-link" href="#home">الصفحة الرئيسية</a>
            </li>
            <li class="nav-item">
              <a style="color: white; font-family: 'Cairo', sans-serif;
              font-size: 30px;" class="nav-link" href="#about-us">من نحن</a>
            </li>
            <li class="nav-item">
              <a style="color: white; font-family: 'Cairo', sans-serif;
              font-size: 30px;" class="nav-link" href="#contact-us">اتصل بنا</a>
            </li>
            <li class="nav-item">
              <a style="color: white; font-family: 'Cairo', sans-serif;
              font-size: 30px;" class="nav-link" href="login.php">تسجيل الخروج</a>
            </li>
            
          </ul>
        </div>
        <a class="navbar-brand" href="#"><img src="eyfadLogo.PNG" alt="logo" height="150" width="150" /> </a>
        <a href="login.php">تسجيل خروج</a>
      </nav>

  

    <div class="container container-padding">
      <div class="row">
        <div class="col-sm-6 my-auto">
          <p class="home-paragraph">منصة إيفاد هي منصة تحتوي على قاعدة بيانات للنصوص العربية المكتوبة بخط اليد، تتضمن صور من النصوص المكتوبة بأكثر من طريقة حسب إختلاف طريقة الكتابة من شخص إلى آخر.تقوم هذه المنصة بتحويل النصوص الموجودة في الصور التي يقوم المستخدمين برفعها
            عبر المنصة إلى نصوص رقمية.</p>
        </div>
        <div class="col-sm-6 services">
          <button type="button" class="btn btn-light btn-lg btn-block">قاعدة البيانات</button> <br> 
          <button type="button" class="btn  btn-light btn-lg btn-block">برنامج التعرف على الكتابة</button>
        </div>
      </div>
    </div>

    
  </section>


  <section id="about-us" class="container-padding">
    <div align="center">
      <a href=" http://data.org.sa/"> <img src="Images/SaudidataSIGLogo.png" alt="The picture isn't downloaded properly" class="data-logo"></a>
      <p class="about-us-text"> 
        مجموعة الاهتمام بالبيانات هي إحدى مجموعات الاهتمام التي تشرف عليها جمعية الحاسبات السعودية وتتكون من عدد من أعضاء الجمعية الذين يقومون بأنشطة تتعلق بمجال علم البيانات.
      </p>
      </div> 
        
    <div  class="about-section">
        <h1>من نحن</h1>
        <p>
          نحن مجموعة من أعضاء الفريق التابعين بمجموعة الاهتمام بعلم البيانات.      </p>

        </p>
        
      </div>
      <div class="container text-center">
        <h3>المطورين المشاركين:</h3>
       
        <br>
        <div class="row">
          <div class="col-sm-4">
            <p class="text-center" ><strong> فاطمة العقيل </strong></p><br>
            <a href="#demo" data-toggle="collapse">
              <img src="user.png" class="img-circle person" alt="Fatima" width="250" height="255">
            </a>
            <div id="demo" class="collapse">
              <h3>Fatima Alogayyel</h3>
              <p style="font-size: 20px;  position: static;
              text-align: center;">Trainee</p>
              <p style="font-size: 20px;  position: static;
              text-align: center;">Information technology specialist</p>
              <p><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=fatmaalogayyel.300@gmail.com"><button class="button">Contact </button></a></p>            </div>
            </div>
            
         
          <div class="col-sm-4">
            <p class="text-center"><strong>منى الدباس </strong></p><br>
            <a href="#demo2" data-toggle="collapse">
              <img src="user.png" class="img-circle person" alt="Random Name" width="250" height="255">
            </a>
            <div id="demo2" class="collapse">
              <h3>Mona Aldebas</h3>
              <p style="font-size: 20px;  position: static;
              text-align: center;">Trainee</p>
              <p style="font-size: 20px;  position: static;
              text-align: center;">Information system specialist, interested in data science </p>
              <p><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=monamdbas@gmail.com"><button class="button">Contact </button></a></p>
            </div>
          </div>
          
          
          <div class="col-sm-4">
            <p class="text-center"><strong>دارين اللهيبي</strong></p><br>
            <a href="#demo3" data-toggle="collapse">
              <img src="user.png" class="img-circle person" alt="Random Name" width="250" height="255">
            </a>
            <div id="demo3" class="collapse">
              <h3>Dareen Alluhaybi</h3>
              <p style="font-size: 20px;  position: static;
              text-align: center;">Trainee</p>
                    <p style="font-size: 20px;  position: static;
                    text-align: center;">Computer science specialist  <br> </p>
                   
                    <p><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=dareen.f.a@hotmail.com "><button class="button">Contact </button></a></p>            </div>
          
          </div>
          
        </div>
        
        <div class="row">
        <div class="col-sm-4">
          <p class="text-center"><strong>محمد الغفيلي  </strong></p><br>
          <a href="#demo4" data-toggle="collapse">
            <img src="user.png" class="img-circle person" alt="Random Name" width="250" height="255">
          </a>
          <div id="demo4" class="collapse">
              <h3>Mohammad Alghafli</h3>
             
              <p style="font-size: 20px;  position: static;
              text-align: center;">Trainee</p>
              <p style="font-size: 20px;  position: static;
              text-align: center;">Computer science specialist, interested in Software Development</p>
              <p><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=m7md2012g@gmail.com"><button class="button">Contact </button></a></p>
          </div>
        </div>
        </div>
      </div> 
      <main style="display: flex; justify-content: center;">
        <img src="robot.png" class="animated bounce infinite" alt="Transparent MDB Logo" id="animated-img1">
       
      </main>


















  </section>
  <script>
(function ($){
  $.fn.counter = function() {
    const $this = $(this),
    numberFrom = parseInt($this.attr('data-from')),
    numberTo = parseInt($this.attr('data-to')),
    delta = numberTo - numberFrom,
    deltaPositive = delta > 0 ? 1 : 0,
    time = parseInt($this.attr('data-time')),
    changeTime = 10;
    
    let currentNumber = numberFrom,
    value = delta*changeTime/time;
    var interval1;
    const changeNumber = () => {
      currentNumber += value;
      //checks if currentNumber reached numberTo
      (deltaPositive && currentNumber >= numberTo) || (!deltaPositive &&currentNumber<= numberTo) ? currentNumber=numberTo : currentNumber;
      this.text(parseInt(currentNumber));
      currentNumber == numberTo ? clearInterval(interval1) : currentNumber;  
    }

    interval1 = setInterval(changeNumber,changeTime);
  }
}(jQuery));

$(document).ready(function(){

  $('.count-up').counter();
  $('.count1').counter();
  $('.count2').counter();
  
  new WOW().init();
  
  setTimeout(function () {
    $('.count5').counter();
  }, 3000);
});


  </script>
  <div class="container my-5 z-depth-1 px-0 rounded">


    <!--Section: Content-->
    <section  style="justify-content: flex-end;" class="white-text grey p-5 rounded">
      
      <h3  class="text-center font-weight-bold mb-4 pb-2">وصلنا</h3>
  
      <div class="row">
  
        <div class="col-md-4 mb-4">
          <div class="row">
            <div class="col-6 pr-0">
              <h4 class="display-4 text-right mb-0 count-up" data-from="0" data-to="42" data-time="2000">42</h4>
            </div>
  
            <div class="col-6">
              <p class="text-uppercase font-weight-normal mb-1">الكلمات</p>
              <p class="mb-0"><i class="fa fa-pencil-square-o " aria-hidden="true"></i></p>
            </div>
          </div>
        </div>
  
        <div class="col-md-4 mb-4">

          <div class="row">
            <h4 class="display-4 text-right mb-0 count1" data-from="0" data-to="140" data-time="2000">90</h4>
            <p class="mb-0"><i class="fas fa-user fa-2x mb-0"></i></p>
            <div class="col-6 pr-0">
              <p class=" text-right font-weight-bold mb-1">المتطوعين</p>


            </div>
  
            <div class="col-6">

            </div>
          </div>
        </div>
  
    
  
  
    </section>
    <!--Section: Content-->
  
  
  </div>
  <section id="#contact-us" class="contact-us-color container-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="contact-text">اتصل بنا</p>
        </div>
      </div>
      <div id="contact-us" class="row">
        <div class="col-12">
          <a href="saudidata2030@gmail.com"><i class="fas fa-envelope-open-text icons"></i></a>
          <a href="https://twitter.com/Eyfad3"><i class="fab fa-twitter icons"></i></a>
          <a href="https://sa.linkedin.com/in/saudidata2030"><i class="fab fa-linkedin icons"></i></a>
          <i class="saudi arabia flag"></i>
        </div>
      </div>
    </div>
  </section>

</body>

</html>