<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booked</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }
        
        .logo-container {
            margin-bottom: 20px;
        }
        .logo {
            display: block;
            width: 150px;
            height: auto;
        }
        .receipt {
            background-color: #444;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            color: #fff;
            margin-left: 400px;
        }
        .receipt h1 {
            background-color: #ff7300;
            color: black;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            margin: -20px -20px 20px -20px;
            text-align: center;
        }
        .receipt h2 {
            color: #fff;
            margin: 10px 0;
        }
        .receipt p {
            font-size: 18px;
            margin: 5px 0;
        }
        .receipt .total {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }
        .button {
            background: linear-gradient(45deg, #ff0000, #ff7300);
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
            font-size: 24px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background 0.3s, transform 0.3s;
        }
        
        .button:hover {
            background: linear-gradient(45deg, #ff7300, #ff0000);
            transform: translateY(-2px);
        }
        .print-button {
            background: linear-gradient(45deg, #00c853, #b2ff59);
            margin-top: 20px;
        }
        .print-button:hover {
            background: linear-gradient(45deg, #b2ff59, #00c853);
        }
        .center {
            text-align: center;
        }
        .yellow-text {
            color: yellow;
        }
        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: absolute;
            left:0;
            top:0;
        }
        .sidebar h2 {
            margin: 0;
            margin-bottom: 40px;
        }
        .sidebar a {
            text-decoration: none;
            color: #fff;
            width: 100%;
            padding: 15px 20px;
            margin: 5px 0;
            border-radius: 5px;
            text-align: center;
            transition: background 0.3s;
        }
        .sidebar a:hover {
            background-color: #444;
        }
        .sidebar a.selected{
            background-color: #aaa;
        }

        @media print {
            body {
                display: block;
                background-color: white;
                color: black;
            }
            
            .receipt {
                box-shadow: none;
                max-width: none;
                width: 100%;
                padding: 0;
                background-color: white;
                color: black;
                margin-left: 400px;
            }
            .receipt h1 {
                margin: 0;
                border-radius: 0;
                padding: 10px 0;
            }
            .button {
                display: none;
            }
            .print-button {
                display: none;
            }
            .center h3 {
                display: none;
            }
            .logo-container {
                display: block;
                margin-bottom: 20px;
            }
            .logo {
                width: 150px;
                height: auto;
            }
        }
    </style>
</head>
<body>
<div class="sidebar">
        <h2>Admin Dashboard</h2>
        <a href="receipt.php" class="selected">Booked</a>
        <a href="admindashboard.php">Customers</a>
        <a href="cars.php">Cars</a>
        <a href="admin.html">Logout</a>
    </div>
    <div class="logo-container">
        <img src="https://motors.stylemixthemes.com/rent-a-car/wp-content/uploads/sites/7/2017/01/motors_car_rental_logo.svg" alt="logo" class="logo">
    </div>
    <div class="receipt">
        <h1>User Receipt</h1>
        <h2>
        <?php
        $date = date("Y-m-d");
        if(isset($_SESSION['username']) && isset($_SESSION['address']) && isset($_SESSION['car']) && isset($_SESSION['days']) && isset($_SESSION['price'])) {
            echo "Username: " . $_SESSION['username'] . "<br>";
            echo "Address: " . $_SESSION['address'] . "<br>";
            echo "Car: " . $_SESSION['car'] . "<br>";
            echo "Starting date: " . $date . "<br>";
            echo "Days: " . $_SESSION['days'] . "<br>";
            echo "Rent: ₹ " . $_SESSION['price'] . "<br>";
            echo "<span class='total'>Total: ₹ " . ($_SESSION['price'] * $_SESSION['days']) . "</span>";
        } else {
            echo "No user booked.";
        }
        ?>
        </h2>
    </div>
</body>
</html>
