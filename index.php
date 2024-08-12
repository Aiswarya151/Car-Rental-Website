<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Required meta tags -->

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <title>Car Rent</title>
    <style>
        * {
  box-sizing: border-box;
}

.bg-img {
            background-image: url('images/rent9.jpg?auto=compress&cs=tinysrgb&h=650&w=940');
            height: 100vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }


/* add style to container */
.container {
    background-color: rgba(255, 255, 255, 0.6); /* White with 80% opacity */
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
}

/* input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
}
label {
    font-weight: bold;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: 1px solid #ccc;
    background: #f8f8f8;
    border-radius: 15px;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #f1f1f1;
    outline: none;
    border-color: #f30c0c;
}

/* style for submit btn */
.btn {
    background-color: #e0a800;
    color: white;
    padding: 16px 20px;
    border: none;
    border-radius: 15px;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}


.about-div {
            
            max-width: 1200px;
            margin: auto; /* Center the entire about section horizontally */
            padding: 50px;
            background-color: rgba(226, 202, 202, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
.about-content {
            width: 100%;
            max-width: 900px; /* Adjust the maximum width to your preference */
            margin: auto; /* Center the content horizontally */
            
            margin-bottom: 20px;
        }

.about-div img {
    width: 360px;
    height: 360px;
    border-radius: 8px;
    border: 7px solid rgb(8, 8, 8);
    display: inline;
    margin-top: 10px;
    box-shadow: 0 3px 10px 0 rgba(100,100,100,.7);
    transition-duration: .5s;
}

.blog-line {
            position: relative;
            width: 150px;
            height: 8px;
            background-image: linear-gradient(-45deg, aqua, rgb(235, 20, 56), aquamarine);
            border-radius: 20px;
            left: 0px;
            margin: auto;
        }
.blog-txt a{
    text-decoration: none;
    color:#f15;
    font-size:30px;
  font-weight:bolder;
  font-family:'Cookie', cursive;
}

.about-div img:hover{
    transform: scale(0.8);
}

.about-txt {
    width: 80%; /* Adjust as needed */
    margin: 0 auto; /* Center the container horizontally */
    font-size: 20px; /* Adjust font size */
    text-align: center; /* Center the text */
    color: #333; /* Text color */
    font-family: 'Open Sans', sans-serif; /* Font family */
    line-height: 1.6; /* Line height for readability */
}

.about-txt a{
    text-decoration: none;
    font-size: 25px;
    color:rgb(8, 8, 8);
    margin-right: 20px;
}

.carousel {
  position: relative;
}

.carousel-inner {
  height: 500px; /* Adjust this height as needed */
}

/* Ensure all images are the same size and fit within the carousel */
.carousel-item img {
  height: 100%;
  width: 100%;
  object-fit: cover; /* or use object-fit: contain; based on your preference */
}

.carousel-item img {
  transition: transform 0.5s ease; /* Adjust the transition duration and timing function as needed */
}

.carousel-item img:hover {
  transform: scale(1.05);
}

/* Controls */
.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-color: rgba(0, 0, 0, 0.1);
  border-radius: 20%;
  width: 50px;
  height: 50px;
}

.carousel-control-prev-icon:hover,
.carousel-control-next-icon:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

.carousel-control-prev,
.carousel-control-next {
  width: 30px;
}

.carousel-control-prev-icon:after,
.carousel-control-next-icon:after {
  font-size: 30px;
  color: white;
}

/* Indicators */
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  transform: translateX(-50%);
}

.carousel-indicators li {
  background-color: rgba(255, 255, 255, 0.7);
  border-radius: 50%;
  width: 10px;
  height: 10px;
}

.carousel-indicators .active {
  background-color: white;
}

.carousel-container {
      position: relative;
      height: 500px; /* Adjust this height as needed */
    }

    .carousel-text h2{
      font-size: 40px;
      font-weight: bold;
      color: #e0a800;
      

    }

    .carousel-text {
      position: absolute;
      top: 50%; /* Adjust vertical position */
      left: 50%; /* Adjust horizontal position */
      transform: translate(-50%, -50%);
      text-align: center;
      z-index: 2;
      font-size: 20px; 
      color: white;/* Ensure the text appears above the carousel */
    }

    .carousel-inner {
      z-index: 1; /* Ensure the carousel stays below the text */
    }
@media screen and (max-width:768px){
  
.about-div{
    width:100%;
    height: auto;
    padding: 0px;
    background-color: #d4f8f2;
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: wrap;
}
.about-div img{
   
    border-radius: 50%;
    border:8px solid rgb(12, 12, 12);
    display: inline;
    margin-top: 10px;
    box-shadow: 0 3px 10px 0 rgba(100,100,100,.7);
    transition-duration: .5s;
}

.about-div img:hover{
    transform: scale(1.1);
}

.about-div {
    width: 80%;
    max-width: 1200px;
    margin: auto; /* Center the entire about section horizontally */
    padding: 50px;
    background-color: rgba(226, 202, 202, 0.9);
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column; /* Stack items vertically */
    align-items: center; /* Center items horizontally */
}


.about-txt a{
    text-decoration: none;
    font-size: 25px;
    color:rgb(17, 16, 17);
    margin-right: 20px;
} 
}

.contact-section {
    background-color: #f8f9fa; /* Light grey background */
    padding: 40px 0; /* Vertical padding */
    text-align: center; /* Center align text */
    border-radius: 20px; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Subtle shadow */
    font-family: 'Montserrat', sans-serif; /* Font family */
    margin: 20px; /* Margin around the section */
}

.contact-section h2 {
    font-size: 36px; /* Large font size */
    color: #333; /* Dark text color */
    margin-bottom: 20px; /* Space below heading */
    font-weight: 500; /* Medium weight font */
}

.contact-icons {
    display: flex; /* Use flexbox */
    justify-content: center; /* Center align items */
    gap: 20px; /* Space between icons */
}

.contact-icon {
    color: #fff; /* White icon color */
    background-color: #007bff; /* Blue background color */
    border-radius: 50%; /* Circular shape */
    padding: 15px; /* Space inside the icon */
    font-size: 24px; /* Large icon size */
    text-decoration: none; /* Remove underline */
    transition: transform 0.3s, background-color 0.3s; /* Smooth transition */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

.contact-icon:hover {
    transform: scale(1.1); /* Slightly enlarge icon on hover */
    background-color: #0056b3; /* Darker blue on hover */
}

#phone-icon {
    background-color: #28a745; /* Green background */
}

#phone-icon:hover {
    background-color: #218838; /* Darker green on hover */
}

#email-icon {
    background-color: #ffc107; /* Yellow background */
}

#email-icon:hover {
    background-color: #e0a800; /* Darker yellow on hover */
}

#whatsapp-icon {
    background-color: #25d366; /* WhatsApp green background */
}

#whatsapp-icon:hover {
    background-color: #1ebc57; /* Darker WhatsApp green on hover */
}



        footer {
    background-color: #273f44; /* Dark background color */
    color: #fff; /* White text color */
    padding: 20px 0; /* Vertical padding */
    text-align: center; /* Center align text */
    font-family: 'Montserrat', sans-serif; /* Font family */
}

footer .content1 {
    margin: 0; /* Remove default margin */
    font-size: 16px; /* Font size */
    line-height: 25px; /* Line height */
}

footer .icons {
    margin-top: 10px; /* Space above icons */
}

footer .icons a {
    text-decoration: none; /* Remove underline from links */
    color: #fff; /* White icon color */
    font-size: 20px; /* Icon size */
    margin: 0 10px; /* Space between icons */
    transition: color 0.3s; /* Smooth transition for hover effect */
}

footer .icons a:hover {
    color: #f30c0c; /* Red color on hover */
}

      .navbar{
      position: fixed;
      width: 100%;
      background: #23393d !important;
      box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.25);
      transition: .6s;
      z-index: 10;
    }

    .logo-one{
      height:50px; 
      margin: 10px 50px 10px;
    }

    .navbar-nav{
      font-family: 'montserrat';
      font-weight: bold;
    }

    .nav-link{
      margin-right: 10px;
      color: #fff !important;
    }

    .nav-link:hover{
      color: #F0c540 !important;
    }

    nav.sticky{
      margin-right: 5px;
    }

    @media (max-width:768px){

      .navbar{
        z-index: 10;
      }

      .navbar-brand .logo-one{
        margin-left: 5px !important;
        height: 40px;
      }

      .icons{
        margin-bottom: 1rem;
      }

    }

    html {
    scroll-behavior: smooth;
}
    
    </style>
  </head>
  <body>
    <!-- Add this inside the body tag -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
      const icons = document.querySelectorAll('.contact-icon');
      
      icons.forEach(icon => {
          icon.addEventListener('mouseover', () => {
              icon.style.transform = 'scale(1.1)';
          });
          icon.addEventListener('mouseout', () => {
              icon.style.transform = 'scale(1)';
          });
      });
  });

  document.querySelectorAll('a[href^="#]').forEach(anchor => {anchor.addEventListener('click', function(e){e.preventDefault()

    document.querySelector(this.getAttribute('href')).scrollIntoView({behavior : 'smooth'});
  });
});
  </script>


<nav class="navbar navbar-expand-md navbar-light" style="background-color: #273f44;">
    <a href="#" class="navbar-brand">
        <img src="https://motors.stylemixthemes.com/rent-a-car/wp-content/uploads/sites/7/2017/01/motors_car_rental_logo.svg" height="50" alt="kissan">
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="index.php" class="nav-item nav-link" style="color: white;">Home</a>
            <a href="book.php" class="nav-item nav-link" style="color: white;">Book Now</a>
            <a href="#abo" class="nav-item nav-link" style="color: white;">About Us</a>
            <a href="#contact" class="nav-item nav-link" style="color: white;">Contact Us</a>
        </div>

        <div class="navbar-nav ml-auto">
            <?php
            if (isset($_SESSION['name'])) {
                echo '<a href="#" class="nav-item nav-link" style="color: white;">' . $_SESSION['name'] . '</a>';
                echo '<a href="logout.php" class="nav-item nav-link" style="color: white;">Log Out</a>';
            } else {
                echo '<a href="login.html" class="nav-item nav-link" style="color: white;">Log in</a>';
            }
            ?>
        </div>
    </div>
</nav>


  
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-text">
    <h2>Welcome to Our Car Rental Service</h2>
    <p>Your journey starts here. Explore our wide range of cars and book the perfect ride for your next adventure.</p>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="images/rent7.jpg" class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="images/rent3.jpg" class="d-block w-100" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="images/rent2.jpg" class="d-block w-100" alt="Slide 3">
    </div>
    <div class="carousel-item">
      <img src="images/rent6.jpg" class="d-block w-100" alt="Slide 3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

      <div class="bg-img">
        <form action="login.php" method="post">
          <div class="container">
            <h1>Login</h1>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass" required>
            
            <button type="submit" class="btn" name="login">Login</button>
          </div>
        </form>
      </div>
      

      <div class="about-div" id="abo">
        <div class="about-content">
            <strong><h1 style="color: rgb(5, 0, 10);">About Us</h1></strong>
            <div class="blog-line"></div>
            <div class="about-txt">
                <p>
                    With many rental companies, you must be at least 21 years of age to rent a car, and any driver under 25 may have to pay a Young Driver Fee. Similarly, people aged 70+ may find some companies will charge a Senior Driver Fee,
                     or may not rent to them at all. So car rental for the under-25 or over-70 can be more expensive which is one more reason to book with motors.com as we work with all the big brands. Just check each car terms and conditions to see if your age would make any difference. Before you buy any car rental insurance, you should find out what coverage is provided by your credit card company, your homeowner renter policy, and your own car insurance.
                </p>
            </div>
        </div>
        <img src="images/rent4.jpg" alt="Image 1">
        <img src="images/1.jpg" alt="Image 2">
    </div>

    <div class="contact-section" id="contact">
      <h2>Customer Support</h2>
      <div class="contact-icons">
          <a href="tel:+917034784219" class="contact-icon" id="phone-icon"><i class="fa fa-phone"></i></a>
          <a href="mailto:aiswaryashaji55@gmail.com" class="contact-icon" id="email-icon"><i class="fa fa-envelope"></i></a>
          <a href="https://wa.me/7034784219" class="contact-icon" id="whatsapp-icon"><i class="fa fa-whatsapp"></i></a>
      </div>
  </div>
  
</div>

<footer>
  <div class="content1">
      <p>&copy; 2024 Car Rent. All rights reserved.</p>
  </div>
  <div class="icons">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
  </div>
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
</html>