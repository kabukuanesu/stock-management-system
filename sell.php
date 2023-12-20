<!doctype html>
<html lang="en">

<style type='text/css'>
    * {
        padding: 0;
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }


    body {
        background-image: white;
        background-size: cover;
        font-family: sans-serif;
        margin-top: 40px;
        height: 100vh;
        padding: 0;
        margin: 0;
    }

    table {
        border: 1px;
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 86%;
        margin: auto;
    }

    td,
    th {
        border: 1px solid black !important;
        padding: 5px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    .and {
        font-size: large;
        font-family: 'Times New Roman', Times, serif;
        font-style: italic;
        color: dodgerblue;
    }
</style>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Sales</title>
    <?php require('links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    
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

<body>
<?php require ('header3.php'); ?>

    <div class="row text-center" style="padding: 20px;margin: 20px;margin-left: 350px;margin-right: 350px;">


        <div class="col"
            style="border-radius: 20px;padding: 0px;background-color:rgb(211,211,211,0.5);margin:0px 10px 10px 10px;height: 800px;">
            <form action='selling.php' method="POST" enctype="multipart/form-data">
                <h2 style="border-radius: 20px 20px 0px 0px;background-color: #0b4c61;color: white;padding: 10px;"> SELL <i class="material-icons">control_point_duplicate</i></h2>
                <label style="font-size: 20px; margin-left: 3px;"><b>Product Name*</b></label>
                <br>
                <input type="text" id="name" name='name'
                    style="font-size: 20px;margin-top:10px;margin-bottom:10px;" required>
                <br>
                <label style="font-size: 20px;"><b>Description*</b></label>
                <br>
                <input type="text" id="description" name='description'
                    style="font-size: 20px;margin-top:10px;margin-bottom:10px;" required>
                <br>
                <label style="font-size: 20px;"><b>Size*</b></label>
                <br>
                <input type="text" id="size" name='size'
                    style="font-size: 20px;margin-top:10px;margin-bottom:10px;" required>
                <br>
                <label style="font-size: 20px;"><b>Color*</b></label>
                <br>
                <input type="text" id="color" name='color'
                    style="font-size: 20px;margin-top:10px;margin-bottom:10px;" required>
                <br>
                <label style="font-size: 20px;"><b>Quantity*</b></label>
                <br>
                <input type="number" id="quantity" name='quantity'
                    style="font-size: 20px;margin-top:10px;margin-bottom:10px;" required>
                <br>
                <label style="font-size: 20px;"><b>Price*</b></label>
                <br>
                <input type="number" id="price" name='price'
                    style="font-size: 20px;margin-top:10px;margin-bottom:10px;" required>
                <br>
                <label style="font-size: 20px;"><b>Cashier's Name*</b></label>
                <br>
                <input type="text" id="cashier" name='cashier'
                    style="font-size: 20px;margin-top:10px;margin-bottom:10px;" required>
                <br>
                <button name="stocking" style="width: 232px;margin-top: 20px;font-size: 20px;" type='submit' class='btn btn-dark'>Submit
                </button>
                <br>
            </form>
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
