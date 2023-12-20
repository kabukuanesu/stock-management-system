<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DASHBOARD</title>
    
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
    
  
    <?php require ('header4.php') ?>

    <style>
      .pop:hover{
        border-top-color: aquamarine !important;
        transform: scale(1.03);
        transition: all 0.3s;
      }
    </style>

    <div class="my-5 px-4">
      <h2 class="fw-bold h-font text-center">DASHBOARD</h2>
      <br>
       <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">Click the button on your preffered operation
         </p>
    </div>
<form action="#" method="POST">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
        
        </div>
        <div class="col-lg-9 col-md-12 px-4">
        <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-4">
      <img src="images/rooms/sales.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5">
      <div class="card-body">
        <h5 class="card-title mb-1">Sales</h5>
        <div class="features mb-4">
              <h6 class = "mb-3">On Sale</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
               Ladies
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
              Men's Wear
           </span>
           <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
            Children
         </span>
         <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
          Classic
       </span>
          </div>
          <div class="facilities mb-4">
            <h6 class = "mb-1">Special Offer</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
              Shoes
           </span>
           <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
             Stockings
          </span>
          <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
           Hats
        </span>
        <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
         Belts 
      </span>
          </div>
         
            </span>
            
          </div>
          
          
        </div>
        <div class="col-md-2 text-align-center">
        <h5 class = "mb-4">Sales</h5>
        
            <a href="sell.php" class="btn btn-sm w-100 text-white bg-dark shadow-none mb-2">Make A Sale</a><br>
            <a href="sales_history.php" class= "btn btn-sm w-100 text-white bg-dark shadow-none">View Sales</a>

          </div>
        </div>
      </div>
      
      <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-4">
      <img src="images/rooms/stock.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5">
      <div class="card-body">
        <h5 class="card-title mb-1">Add Stock</h5>
        <div class="features mb-4">
              <h6 class = "mb-3">On Demand</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
               Men's Suits
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
              Ladies Dresses
           </span>
           <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
            Children's Jackets
         </span>
         <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
          Classic Wear
       </span>
          </div>
          <div class="facilities mb-4">
            <h6 class = "mb-1">Discounts</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
              Stockings
           </span>
           <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
             Shreds
          </span>
          <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
           Shorts
        </span>
        <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
         Shoes
      </span>
          </div>
         
            </span>
            
          </div>
          
          
        </div>
        <div class="col-md-2 text-align-center">
        <h5 class = "mb-4">Stock</h5>
        
            <a href="add_stock.php" class="btn btn-sm w-100 text-white bg-dark shadow-none mb-2">Add Stock</a><br>
            <a href="stock_history.php" class= "btn btn-sm w-100 text-white bg-dark shadow-none">View Stock</a>

          </div>
        </div>
      </div>
      
      <div class="card mb-4 border-0 shadow">
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-4">
      <img src="images/rooms/statement.jpg" class="img-fluid rounded">
    </div>
    <div class="col-md-5">
      <div class="card-body">
        <h5 class="card-title mb-1">Financial Statement</h5>
        <div class="features mb-4">
              <h6 class = "mb-3">Profit/Loss</h6>
              <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
               Profit
            </span>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
              Loss
           </span>
           <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
            Statement
         </span>
         <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
          Investment
       </span>
          </div>
          <div class="facilities mb-4">
            <h6 class = "mb-1">Uncertainties</h6>
            <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
              Mark-up
           </span>
           <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
             Margin
          </span>
          <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
           Validation
        </span>
        <span class="badge rounded-pill text-bg-light text-dark text-wrap lh-base">
         Bank
      </span>
          </div>
         
            </span>
            
          </div>
          
          
        </div>
        <div class="col-md-2 text-align-center">
        <h5 class = "mb-4">View Statement</h5>
        
            <a href="statementing1.php" class= "btn btn-sm w-100 text-white bg-dark shadow-none mb-2">Genarate</a><br>
            <a href="statement.php" class= "btn btn-sm w-100 text-white bg-dark shadow-none">View</a>

          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
        </div>
        </div>
        

        </form>
        </div>
        
        
    </div>
    <br>
    <br>
<?php require ('footer.php');?>

    
  </body>
</html>
