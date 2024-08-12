<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  </head>

  <style>

html {
    scroll-behavior: smooth;
}

    h1{
      font-family: 'montserrat';
      position: relative;
      top:10rem;
    }


    .card{
      margin-top: 8rem;
    }

    .card-img-top{
      padding: 25px;
      transition: transform .5s;

    }

    .button{
      float: right;
    }

    .card{
      background-color: #f5f5f5;
      border-style: none !important;
    }

    hr{
      border-color: #dbdbdb;
    }

    .card-text{
      font-weight: bold;
    }

    .card-img-top:hover{
      transform: scale(1.1);
    }

    @media (min-width: 1024px) and (max-width: 2000px){
      .car-section{
        margin: 5rem !important;
      }
    }


     /* Navbar section */

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

      .row{
        margin: 1rem;
        margin-top: 2rem;
      }

      h1{
        font-size: 1.8rem;
        top:8rem;
      }


    }


    /*contact section*/

    
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

      /* footer section */
      footer{
        background: #273f44;
        color: #fff;
        font-family: 'montserrat';
      }
      .logo2{
        height:50px; 
        margin:30px 20px 5px;
      }

      .content1{
        margin:20px;
        font-size: 16px;
        line-height: 25px;
        
      }

      .content2{
        margin-top: 50px;
        margin-left: 30px;
        font-weight: bold;
        border-bottom-width: 1px;
        border-bottom-style: solid;
        display: inline-block;
        font-family: 'open sans';
        font-size: 12px;
        letter-spacing: 2px;
      }

      .icons{
        margin-left: 14%;
        margin-top: 4%;
      }

      .icons .icon-link{
        color: #fff;
        margin-right: 10px;
      }

      .footer2{
        background: #333;
        color: grey;
        padding: 3px;
        text-align: center;
        font-family: 'open sans';
      }


  </style>
  <body>
      
  <script>
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

    <h1 class="text-center">Choose the best here.</h1>

    <div class="row car-section">
      <div class="col-lg-4 mb-5">
        <div class="card shadow rounded">
          <a href="brezza.html">
          <img src="images/img1.png" class="card-img-top" alt="...">
        </a>
          <div class="card-body">
            <h5 class="card-title">Maruti Suzuki Breeza</h5> <hr>
            <p class="card-text">₹6000/day <a href="brezza.html" class="button btn btn-dark">view</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="card shadow rounded">
          <a href="freestyle.html">
          <img src="images/img2.png" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <h5 class="card-title">Ford Freestyle</h5> <hr>
            <p class="card-text">₹5000/day <a href="freestyle.html" class="button btn btn-dark">view</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="card shadow rounded">
          <a href="hyndai.html">
          <img src="images/img3.png" class="card-img-top" alt="...">
        </a>
          <div class="card-body">
            <h5 class="card-title">Hyundai i20</h5> <hr>
            <p class="card-text">₹5700/day <a href="hyundai.html" class="button btn btn-dark">View</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="card shadow rounded">
          <a href="swift.html">
          <img src="images/img4.png" class="card-img-top" alt="...">
        </a>
          <div class="card-body">
            <h5 class="card-title">Maruti Suzuki Swift</h5>
            <hr><p class="card-text">₹4800/day <a href="swift.html" class="button btn btn-dark">view</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="card shadow rounded">
          <a href="scorpio.html">
          <img src="images/img6.png" class="card-img-top" alt="...">
        </a>
          <div class="card-body">
            <h5 class="card-title">Mahindra Scorpio</h5>
            <hr><p class="card-text">₹8000/day <a href="scorpio.html" class="button btn btn-dark">view</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="card shadow rounded">
          <a href="hexa.html">
          <img src="images/img7.png" class="card-img-top" alt="...">
        </a>
          <div class="card-body">
            <h5 class="card-title">Tata Hexa</h5>
            <hr><p class="card-text">₹7500/day <a href="hexa.html" class="button btn btn-dark">View</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="card shadow rounded">
          <a href="tiago.html">
          <img src="images/img8.png" class="card-img-top" alt="...">
        </a>
          <div class="card-body">
            <h5 class="card-title">Tata Tiago</h5>
            <hr><p class="card-text">₹5300/day <a href="tiago.html" class="button btn btn-dark">View</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="card shadow rounded">
          <a href="baleno.html">
          <img src="images/img9.png" class="card-img-top" alt="...">
        </a>
          <div class="card-body">
            <h5 class="card-title">Maruti Suzuki Baleno</h5>
            <hr><p class="card-text">₹5000/day <a href="baleno.html" class="button btn btn-dark">View</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="card shadow rounded">
          <a href="creta.html">
          <img src="images/img10.png" class="card-img-top" alt="...">
        </a>
          <div class="card-body">
            <h5 class="card-title">Hyundai Creta</h5>
            <hr><p class="card-text">₹6850/day <a href="creta.html" class="button btn btn-dark">view</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="card shadow rounded">
          <a href="manza.html">
          <img src="images/img11.png" class="card-img-top" alt="...">
        </a>
          <div class="card-body">
            <h5 class="card-title">Tata Manza</h5>
            <hr><p class="card-text">₹5500/day <a href="manza.html" class="button btn btn-dark">view</a></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-5">
        <div class="card shadow rounded">
          <a href="skoda.html">
          <img src="images/img12.png" class="card-img-top" alt="...">
        </a>
          <div class="card-body">
            <h5 class="card-title">Skoda Superb</h5>
            <hr><p class="card-text">₹11500/day <a href="skoda.html" class="button btn btn-dark">view</a></p>
          </div>
        </div>
      </div>
    </div>



    <div class="contact-section" id="contact">
      <h2>Customer Support</h2>
      <div class="contact-icons">
          <a href="tel:+254790569647" class="contact-icon" id="phone-icon"><i class="fa fa-phone"></i></a>
          <a href="mailto:alfredmukebo2021@gmail.com" class="contact-icon" id="email-icon"><i class="fa fa-envelope"></i></a>
          <a href="https://wa.me/254790569647" class="contact-icon" id="whatsapp-icon"><i class="fa fa-whatsapp"></i></a>
      </div>
  </div>

    <footer>
      <div class="footer-top" id="con">
        <div class="container">
          <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12">
              <a href="#">
                <img class="logo2" src="https://motors.stylemixthemes.com/rent-a-car/wp-content/uploads/sites/7/2017/01/motors_car_rental_logo.svg" alt="logo two">
              </a>
              <p class="content1">
                Best cars at low cost.
              </p>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <h6 class="content2">SOCIAL MEDIA</h6>
              <div class="icons">
                <a class="icon-link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a class="icon-link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a class="icon-link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a class="icon-link" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a><br>
                <i class="fa fa-envelope" aria-hidden="true"><span style="font-family: 'montserrat';">&nbsp;&nbsp;moters@customer.in</span></i>
              </div>
            </div>
          </div>
        </div>

        <div class="footer2">
          &copy;2024 <span style="font-family: 'montserrat';">Motors.</span>
          All Rights Reserved.
        </div>
      </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>