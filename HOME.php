<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!--BOOTSTRAP meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--BOOTSTRAP stylesheet-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!--home style sheet-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--navbar style sheet-->
  <link rel="stylesheet" type="text/css" href="css/header.css">

  <!--BOOTSTRAP-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!--navbar script-->
  <script type="text/javascript" src="js/Header.js"></script>

  <title>Home Page</title>
</head>
<body>

  <!--------------------------------------------------------------------navigation bar----------------------------------------------------------------->
  <nav class="navbar navbar-dark bg-dark">
      
    <div class="pagetop">
      
      <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <button class="dropdown-btn">Clothes
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="#">Men</a>
          <a href="#">Women</a>
        </div>
        <a href="#" class="category">Makeup</a>
        <a href="#" class="category">Accessories</a>
        <a href="#" class="category">Toys</a>
        <a href="#" class="category">Baby Care</a>
        <a href="#" class="category">Electronics</a>
        <a href="#" class="category">Home and Office</a>
      </div>

      <!-------open btn------>
      <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776;</button>
      </div>
      <div class="nav_bar">
       <!----------------------------Home Page---------------------->
       <a href="HOME.html" target="_self"> 
       <svg width="1em" height="20px" viewBox="0 2 16 16" class="bi bi-house-door-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
       <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/><path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
       </svg>Home</a>

       <!----------------------------Report a Problem---------------->
       <a href=""><span>
       <svg width="1em" height="20px" viewBox="0 2 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
       </svg>Report</span></a>

       <!----------------------------All Products-------------------->
       <a href="">
       <svg width="1em" height="20px" viewBox="0 2 16 16" class="bi bi-question-octagon-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
       <path fill-rule="evenodd" d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM5.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
       </svg>About Us</a>

       <!----------------------------New Offers---------------------->
       <a href="">
       <svg width="1em" height="20px" viewBox="0 2 16 16" class="bi bi-tags-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
       <path fill-rule="evenodd" d="M3 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 7.586 1H3zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/><path d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
       </svg>Offers</a> 

      </div>

      <!-------search bar-------->
      <form class="search_bar" action="secondSearchPage.php">
        <input type="text" id="search1" placeholder="Search.." name="k">
        <!-----search bar button------>
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>

      <div class="log_in">
        <a href="shrook2.html">Sign Up</a>
        <a href="#">Login</a>
      </div>
    </div>
  </nav>

  
  <!--------------------------------------------------------------------home page image slider using bootstrap------------------------------------------------>
  <div class="image_slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://www.plasticstoday.com/sites/cet.com/files/PTI-ecommerce-AdobeStock_207963206.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://cdn.shopify.com/s/files/1/0898/4708/articles/global-ecommerce-marketplace.png?v=1538348244" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://v5c5v6u7.stackpathcdn.com/wp-content/uploads/2018/10/global-ecommerce.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-------------------------------------------------------------------------------------------------------------------------------------------------------------->
  
  <div class="card-group">
  
      <!-------image1------>
      <div class="col-md-3">
        <div class="card">
          <a href="cardtest.html">
            <img src="8.PNG" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
          <h3 class="card-title"> Card title</h3>
          <p class="item-price">$Price</p>
          </div>
          <div class="add-btn">
            <form action="cart.php">
              <input class="card-btn2" placeholder="Number of items" type="number" id="quantity" name="quantity" min="1">
              <button href="#" class="card-btn">Add to Cart</button>
            </form>         
          </div>
        </div>
      </div>
    
      <!-------image2------>
      <div class="col-md-3">
        <div class="card">
          <a href="cardtest.html">
            <img src="8.PNG" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
          <h3 class="card-title"> Card title</h3>
          <p class="item-price">$Price</p>
          </div>
          <div class="add-btn">
            <form action="cart.php">
              <input class="card-btn2" placeholder="Number of items" type="number" id="quantity" name="quantity" min="1">
              <button href="#" class="card-btn">Add to Cart</button>
            </form>    
          </div>
        </div>
      </div>

      <!-------image3------>
     <div class="col-md-3">
        <div class="card">
          <a href="cardtest.html">
            <img src="8.PNG" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
          <h3 class="card-title"> Card title</h3>
          <p class="item-price">$Price</p>
          </div>
          <div class="add-btn">
            <form action="cart.php">
              <input class="card-btn2" placeholder="Number of items" type="number" id="quantity" name="quantity" min="1">
              <button href="#" class="card-btn">Add to Cart</button>
            </form>   
          </div>
        </div>
      </div>

      <!-------image4------>
      <div class="col-md-3">
        <div class="card">
          <a href="cardtest.html">
            <img src="8.PNG" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
          <h3 class="card-title"> Card title</h3>
          <p class="item-price">$Price</p>
          </div>
          <div class="add-btn">
            <form action="cart.php">
              <input class="card-btn2" placeholder="Number of items" type="number" id="quantity" name="quantity" min="1">
              <button href="#" class="card-btn">Add to Cart</button>
            </form>   
          </div>
        </div>
      </div>
  </div>

  <div class="card-group">

    <!-------image5------>
    <div class="col-md-3">
        <div class="card">
          <a href="cardtest.html">
            <img src="8.PNG" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
          <h3 class="card-title"> Card title</h3>
          <p class="item-price">$Price</p>
          </div>
          <div class="add-btn">
            <form action="cart.php">
              <input class="card-btn2" placeholder="Number of items" type="number" id="quantity" name="quantity" min="1">
              <button href="#" class="card-btn">Add to Cart</button>
            </form>   
          </div>
        </div>
      </div>

    <!-------image6------>  
    <div class="col-md-3">
        <div class="card">
          <a href="cardtest.html">
            <img src="8.PNG" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
          <h3 class="card-title"> Card title</h3>
          <p class="item-price">$Price</p>
          </div>
          <div class="add-btn">
            <form action="cart.php">
              <input class="card-btn2" placeholder="Number of items" type="number" id="quantity" name="quantity" min="1">
              <button href="#" class="card-btn">Add to Cart</button>
            </form>    
          </div>
        </div>
      </div>
     
    <!-------image7------>
    <div class="col-md-3">
        <div class="card">
          <a href="cardtest.html">
            <img src="8.PNG" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
          <h3 class="card-title"> Card title</h3>
          <p class="item-price">$Price</p>
          </div>
          <div class="add-btn">
            <form action="cart.php">
              <input class="card-btn2" placeholder="Number of items" type="number" id="quantity" name="quantity" min="1">
              <button href="#" class="card-btn">Add to Cart</button>
            </form>   
          </div>
        </div>
      </div>

    <!-------image8------> 
    <div class="col-md-3">
        <div class="card">
          <a href="cardtest.html">
            <img src="8.PNG" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
          <h3 class="card-title"> Card title</h3>
          <p class="item-price">$Price</p>
          </div>
          <div class="add-btn">
            <form action="cart.php">
              <input class="card-btn2" placeholder="Number of items" type="number" id="quantity" name="quantity" min="1">
              <button href="#" class="card-btn">Add to Cart</button>
            </form>    
          </div>
        </div>
      </div>
  </div>

  <!--------------------------recommended products section-------------------------------->
  <div class="recommended">
    <h2>Recommended for You</h2>
  </div>
  <!--------------------------------------------------------------------------------------->
  
 <form class="cards-center">
  <div class="total">
    <div class="card-group card2">
      <div class="col-md-12">
        <div class="card">
          <a href="cardtest.html">
            <img src="8.PNG" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <h3 class="card-title"> Card title</h3>
            <p class="item-price">$Price</p>
          </div>
          <div class="add-btn">
            <form action="cart.php">
              <input class="card-btn2" placeholder="Number of items" type="number" id="quantity" name="quantity" min="1">
              <button href="#" class="card-btn">Add to Cart</button>
            </form>    
          </div>
        </div>
      </div>
    </div>
    <div class="card-group card2">
      <div class="col-md-12">
        <div class="card">
          <a href="cardtest.html">
            <img src="8.PNG" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <h3 class="card-title"> Card title</h3>
            <p class="item-price">$Price</p>
          </div>
          <div class="add-btn">
            <form action="cart.php">
              <input class="card-btn2" placeholder="Number of items" type="number" id="quantity" name="quantity" min="1">
              <button href="#" class="card-btn">Add to Cart</button>
            </form>    
          </div>
        </div>
      </div>
    </div>
    <div class="card-group card2">
      <div class="col-md-12">
        <div class="card">
          <a href="cardtest.html">
            <img src="8.PNG" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <h3 class="card-title"> Card title</h3>
            <p class="item-price">$Price</p>
          </div>
          <div class="add-btn">
            <form action="cart.php">
              <input class="card-btn2" placeholder="Number of items" type="number" id="quantity" name="quantity" min="1">
              <button href="#" class="card-btn">Add to Cart</button>
            </form>    
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
  
  <div class="footer">
    <br>
    <p>Shoppera is an online store where you can get anything you imagine. While using Shoppera, you agree to have read and accepted our terms of use, cookie and privacy policy.</p>
    <br>
    <p>All rights reserved.</p>
  </div>

</body>
</html>
