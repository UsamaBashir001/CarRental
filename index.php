<?php
  session_start();
  if (!isset($_SESSION['log'])) {
    header("location:login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    
    <!-- 
        box icons
     -->

     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!--
        link bootstrap 5 css
    -->

    <link rel="stylesheet" href="bootstrap.min.css">
    
    
    <!--
        link bootstrap 5 js
    -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- 
        cdn link
     -->
    
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- 
        linking style.css file
     -->
     
     <link rel="stylesheet" href="css/style.css">

     <!-- 
        media queries
      -->
      <style>


         @media (max-width: 720px) {
            .img-center img{
      width: 300px;
    }
  }
         @media (max-width: 416px) {
            .img-center img{
      width: 200px;
    }
  }
         @media (max-width: 720px) {
            .cent-btn {
      margin-top:-100px;
    }
  }
         @media (max-width: 720px) {
            .cent-btn {
      display: none;
    }
  }
      </style>
</head>
<body>

    <!-- 
        Navbar
     -->

     <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="javascript:void(0)">WAS <span class=" text-info">SYSTEM</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-info" href="javascript:void(0)">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="orders.php">Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Cars.php">Rent</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- 
    Hero Section
 -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md p-0">
                <div class="img-center position-absolute w-100">
                    <img src="hero-logo.png">
                </div>
                <div class="cent-btn">
                    <a href="" class="">Rent Now</a>
                    <a href="" class="" style="margin-left: 200px;">Contact</a>
                </div>
                <video autoplay loop muted width="100%">
                    <source src="video/video.mp4" class="border-bottom-5">
                </video>
            </div>
        </div>
    </div>

    <!-- 
        Services Boxes
     -->

     <div class="container mt-5">
        <div class="text-center">
            <h2 class="">Our <span class="text-info"> Services</span></h1>
                <div class="container d-flex justify-content-center align-items-center h-100 mb-5">
                    <div class="line"></div>
                  </div>                  
        </div>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-icon">
                <i class='bx bxs-car'></i>
              </div>
              <h3>Car Selection</h3>
              <p>Choose from a wide range of cars for your rental needs.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-icon">
                <i class="bx bxs-calendar"></i>
              </div>
              <h3>Flexible Booking</h3>
              <p>Book your car rental with flexible pick-up and drop-off dates.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-icon">
                <i class='bx bxs-check-shield'></i>
              </div>
              <h3>Safe and Secure</h3>
              <p>Ensuring your safety and security during your car rental journey.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-icon">
                <i class='bx bxs-cog' ></i>
              </div>
              <h3>Vehicle Maintenance</h3>
              <p>Well-maintained vehicles to provide a smooth driving experience.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-icon">
                <i class="bx bxs-dollar-circle"></i>
              </div>
              <h3>Affordable Prices</h3>
              <p>Competitive prices to fit your budget for car rentals.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-icon">
                <i class="bx bxs-credit-card"></i>
              </div>
              <h3>Easy Payments</h3>
              <p>Convenient and secure payment options for hassle-free transactions.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- 
        Available Stock
       -->
      <div class="container mt-5">
        <div class="text-center">
            <h2 class="">Avail <span class="text-info">Stock</span></h1>
                <div class="container d-flex justify-content-center align-items-center h-100 mb-5">
                    <div class="line"></div>
                  </div>                  
        </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="cars/civic.png" class="card-img-top" alt="Card Image">
            <div class="overlay">
              <div class="card-body">
                <h5 class="card-title">Honda Civic</h5>
                <p class="card-text">Honda Civic is a sporty look stylish car for car lovers.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="cars/corola.png" class="card-img-top" alt="Card Image">
            <div class="overlay">
              <div class="card-body">
                <h5 class="card-title">Toyota Corolla</h5>
                <p class="card-text">Toyota Corolla is a reliable and fuel-efficient sedan.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="cars/fortuner.png" class="card-img-top" alt="Card Image">
            <div class="overlay">
              <div class="card-body">
                <h5 class="card-title">Toyota Fortuner</h5>
                <p class="card-text">Toyota Fortuner is a rugged and powerful SUV for adventurous journeys.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-2">
          <div class="card">
            <img src="cars/hilux.png" class="card-img-top" alt="Card Image">
            <div class="overlay">
              <div class="card-body">
                <h5 class="card-title">Toyota Hilux</h5>
                <p class="card-text">Toyota Hilux is a tough and versatile pickup truck for various purposes.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-2">
          <div class="card">
            <img src="cars/Mehran.png" class="card-img-top" alt="Card Image">
            <div class="overlay">
              <div class="card-body">
                <h5 class="card-title">Suzuki Mehran</h5>
                <p class="card-text">Suzuki Mehran is an affordable and compact car for everyday use.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-2">
          <div class="card">
            <img src="cars/wagonar.png" class="card-img-top" alt="Card Image">
            <div class="overlay">
              <div class="card-body">
                <h5 class="card-title">Maruti Suzuki Wagon R</h5>
                <p class="card-text">Maruti Suzuki Wagon R is a spacious and practical hatchback for families.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- 
      Terms And Conditions
     -->
     <div class="container mt-5">
      <div class="text-center">
          <h2 class="">Terms & <span class="text-info">Conditions</span></h1>
              <div class="container d-flex justify-content-center align-items-center h-100 mb-5">
                  <div class="line"></div>
                </div>                  
      </div>
  </div>
     <div class="container">
      <hr>
      <div class="row">
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-body">
              <div class="d-flex align-items-start">
                <div class="icon-box">
                  <i class="bx bxs-check-circle bx-md"></i>
                </div>
                <div class="ms-3">
                  <h5 class="card-title">Reservation</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt semper diam quis finibus.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-body">
              <div class="d-flex align-items-start">
                <div class="icon-box">
                  <i class="bx bxs-check-circle bx-md"></i>
                </div>
                <div class="ms-3">
                  <h5 class="card-title">Payment</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt semper diam quis finibus.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-body">
              <div class="d-flex align-items-start">
                <div class="icon-box">
                  <i class="bx bxs-check-circle bx-md"></i>
                </div>
                <div class="ms-3">
                  <h5 class="card-title">Cancellation</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt semper diam quis finibus.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-body">
              <div class="d-flex align-items-start">
                <div class="icon-box">
                  <i class="bx bxs-check-circle bx-md"></i>
                </div>
                <div class="ms-3">
                  <h5 class="card-title">Insurance</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt semper diam quis finibus.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- 
    
   -->
   <div class="container mt-5">
    <div class="text-center">
        <h2 class="">Contact <span class="text-info">Us</span></h1>
            <div class="container d-flex justify-content-center align-items-center h-100 mb-5">
                <div class="line"></div>
              </div>                  
    </div>
</div>
<div class="container" id="contact">
  <form action="process_form.php" method="POST">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<!-- 
  footer
 -->
 <footer class="footer mt-4 bg-info">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>About Us</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed lectus eget dolor congue semper.</p>
        <ul class="list-unstyled">
          <li><i class='bx bxs-check-square'></i> Quality car rentals</li>
          <li><i class='bx bxs-check-square'></i> Competitive prices</li>
          <li><i class='bx bxs-check-square'></i> 24/7 customer support</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Contact Info</h5>
        <ul class="list-unstyled">
          <li><i class='bx bx-map'></i> 123 Main St, City, State</li>
          <li><i class='bx bx-phone'></i> +1 234 567 890</li>
          <li><i class='bx bx-envelope'></i> info@carrentalsystem.com</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Follow Us</h5>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><i class='bx bxl-facebook'></i></a></li>
          <li class="list-inline-item"><a href="#"><i class='bx bxl-twitter'></i></a></li>
          <li class="list-inline-item"><a href="#"><i class='bx bxl-instagram'></i></a></li>
          <li class="list-inline-item"><a href="#"><i class='bx bxl-linkedin'></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">
            © 2023 Car Rental System. All rights reserved. 
            <a class="footer-link" href="#">Terms of Service</a> 
            | 
            <a class="footer-link" href="#">Privacy Policy</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

</body>
</html>