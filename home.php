<!doctype htmhead>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop yaSly - Welcome</title>
    
    <?php require('links.php');?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>"
    
    <style>
        *{
    font-family: 'Poppins', sans-serif;
}
.h-font{
    font-family: 'Merienda', cursive;;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button{
    -webkit-appearance: none;
    margin: 0;
}
.custome-bg{
background-color: #2ec1ac;
border:1px solid  #2ec1ac;
}
.custome-bg :hover{
background-color: #279e8c;
background-color: #279e8c;

}

       .availability-form{
        margin-top: -50px;
        z-index: 2;
        position: relative;
       }
       @media screen and (max-with:575px) {
        .availability-form{
        margin-top: 0px;
        padding: 0 35px;
        
       }
        
       }



    </style>
    
  </head>
  <body class="bg-light">
    
  
    <?php require ('header.php'); ?>
<!--IMAGE DISPLAYS-->
<div class="container-fluid px-lg-4 mt-4">
<div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/clothes.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/clothes1.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/clothes2.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/clothes3.jpg" class="w-100 d-block">
      </div>
      
      
    </div>
    
    
  </div>
</div>

</div>


<br>
<br>
<?php require ('footer.php');?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop : true,
      autoplay : {
        delay: 3500,
        diableOnInteraction : false,
      }
      
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
  </body>
</html>
