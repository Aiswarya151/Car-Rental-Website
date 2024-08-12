

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Dashboard</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style>
        body {
            font-family: 'montserrat';
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #343a40;
            color: white;
            padding: 20px;
            margin: 0;
            text-align: center;
        }
        .container-login100 {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            min-height: 100vh;
            background: #ffffff;
        }
        .wrap-login100 {
            width: 100%;
            max-width: 600px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px 50px;
        }
        .login100-form-title {
            font-family: 'montserrat';
            font-size: 30px;
            color: #333333;
            text-align: center;
            margin-bottom: 40px;
        }
        .wrap-input100 {
            position: relative;
            margin-bottom: 30px;
        }
        .label-input100 {
			font-family: 'montserrat';
            font-size: 16px;
            color: #555555;
            margin-bottom: 10px;
            display: block;
        }
        .input100 {
			font-family: 'montserrat';
            font-size: 18px;
            color: #333333;
            line-height: 1.2;
            display: block;
            width: 100%;
            background: #e6e6e6;
            height: 50px;
            border-radius: 5px;
            padding: 0 20px;
            border: 1px solid #e6e6e6;
        }
        .input100:focus {
            outline: none;
            border-color: #333333;
            background: #ffffff;
        }
        .container-login100-form-btn {
            display: flex;
            justify-content: center;
        }
        .login100-form-btn {
            font-size: 18px;
            color: #ffffff;
            line-height: 1.2;
            text-transform: uppercase;
            width: 100%;
            height: 50px;
            border-radius: 5px;
            background: #333333;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 25px;
            transition: background 0.4s;
            border: none;
            cursor: pointer;
        }
        .login100-form-btn:hover {
            background: #e0a800;
        }
    </style>
</head>
<body>
    <h1>Welcome 
    <?php
        session_start();
        if(isset($_SESSION['name'])) {
            echo $_SESSION['name'];
        }
        if(!isset($_SESSION['name'])) {
            header("Location: login.html"); // Redirect to login page
            exit();
        }
        ?>
    </h1>
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="connect_dash.php" method="post">
                <span class="login100-form-title">Skoda Superb</span>
                
                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Username</span>
                    <input class="input100" type="text" name="name" placeholder="Name...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Address is required">
                    <span class="label-input100">Address</span>
                    <input class="input100" type="text" name="address" placeholder="User address..">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Age is required">
                    <span class="label-input100">Age</span>
                    <input class="input100" type="text" name="age" placeholder="">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Car is required">
                <span class="label-input100">Car</span>
                <input class="input100" type="text" name="car" value="Skoda Superb" readonly>
                <span class="focus-input100"></span>
            </div>

                <div class="wrap-input100 validate-input" data-validate="No. of Days required">
                    <span class="label-input100">No. of days</span>
                    <input class="input100" type="number" min="1" max="100" name="days">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Price is required">
                <span class="label-input100">Price</span>
                <input class="input100" type="text" name="price" value="11500" readonly>
                <span class="focus-input100"></span>
            </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="submit" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
