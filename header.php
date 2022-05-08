<!DOCTYPE html>
<html>
<head>
  <title>Dentsit | Doctors</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, inital-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">



      <!-- Font-awesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


      <link rel="stylesheet" type="text/css" href="css/style.css?=v<?php echo time();?>">
      <link rel="stylesheet" type="text/css" href="css/Responsive.scss?=v<?php echo time();?>">

        <!--animation file css -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">



      <!--Font Awesome -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    
</head>
<body onload="myFunction()">
<div id="loading">
  <img src="icon/loading.gif">
</div>



<!--scroll top bar-->

 <a href="#" class="to-top">
    <i class="fa fa-chevron-up"></i>
  </a>

<!--End scroll top bar-->


<!--//// loader ////--->


<!--End loader--->


<div id="header">
  
 <div class="container">
   <div class="row">
  <div class="col-md-4">
    <div class="social-link">
      <a href="#"><i class="pp  fa fa-facebook-square"></i></a>
       <a href="#"><i class="pp fa fa-instagram"></i></a>
        <a href="#"><i class="pp fa fa-youtube-play"></i></a>
    </div>

  </div>
   <div class="col-md-8 d-inline-flex socil-link ">
    <li><i class="hero_icon fa fa-envelope-o"></i><a href="#">sunnyminglani@gmail.com</a> </li>
    <li><i class="hero_icon fa fa-user"></i> <a href="webenlance.com" >Timing 10Am To 2PM</a>  </li>   
    <li><i class="hero_icon fa fa-user"></i> <a href="webenlance.com" >Mon - Sat 9:00 - 19:00</a></li>  

   </div>
   </div>

 </div>



</div>

<nav class="navbar navbar-expand-lg navbar-light" id="dhiraj">
        <div class="container">
          
          <a class="navbar-brand" href="index.php" id="name">
          <img src="icon/Brandlogo.png" class="img-fluid" width="60px;" margin-right="10px;">
          Cosmodente</a>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="toggle-navbar"><i class="fa fa-align-right"></i></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php" id="name1">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php" id="name1">about</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php" id="name1">service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.php" id="name1">gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" id="name1">Contact Us</a>
              </li>
              
              
              
            </li>
          </ul>
        </div>
        
      </div>
      
      </nav>


      
<script>
 

  $(function(){
    setTimeout(function(){
     $("#hero_loader").fadeOut(2000);
       
     },2000);

    });
</script>



  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    













<script type="text/javascript">
  
var height = $('#header').height();

$(window).scroll(function() {
 if ($(this).scrollTop()>30) {

  $('.navbar').addClass('fixed');
 }
 else{
   $('.navbar').removeClass('fixed');

 }

});







</script>





<script type="text/javascript">
  
const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add("active");
  } else {
    toTop.classList.remove("active");
  }
})

</script>








<script>
    // $(document).ready(function(){
      //  $('div#loading').removeAttr('id');
    // });
    var preloader = document.getElementById("loading");
    // window.addEventListener('load', function(){
    //  preloader.style.display = 'none';
    //  })

    function myFunction(){
      preloader.style.display = 'none';
    };
  </script>






















</body>
</html>