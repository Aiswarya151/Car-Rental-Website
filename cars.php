<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-color: #f0f2f5;
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
        .sidebar a.selected {
            background-color: #aaa;
        }
        .sidebar a:hover {
            background-color: #444;
        }
        .sidebar a.selected:hover {
            background-color: #aaa;
        }
        .header {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: calc(100% - 250px);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .header .search-box {
            display: flex;
            align-items: center;
        }
        .header .search-box input {
            padding: 10px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-right: 10px;
        }
        .header .search-box button {
            padding: 10px 20px;
            background-color: #ff7300;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s;
        }
        .header .search-box button:hover {
            background-color: #ff5700;
        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
        }
        .widget {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .widget h3 {
            margin-top: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .delete-btn {
            background-color: #d32f2f;
            color: #fff;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
        }
        .modal-content input {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .modal-content button {
            background-color: #00c853;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .modal-content button:hover {
            background-color: #009624;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <script>
        function deleteUser(userId) {
            if (confirm('Are you sure you want to delete this user?')) {
                document.getElementById('delete-form').userId.value = userId;
                document.getElementById('delete-form').submit();
            }
        }
        function openModal() {
            document.getElementById('addModal').style.display = 'block';
        }
        function closeModal() {
            document.getElementById('addModal').style.display = 'none';
        }
        window.onclick = function(event) {
            var modal = document.getElementById('addModal');
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    </script>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <a href="receipt.php">Booked</a>
        <a href="admindashboard.php">Customers</a>
        <a href="#" class="selected">Cars</a>
        <a href="admin.html">Logout</a>
    </div>
    <div class="main-content">
        <div class="header">
            
            <div>
                <button onclick="openModal()" style="background-color: #00c853; padding: 10px 20px; border: none; border-radius: 5px; color: #fff; cursor: pointer;">Add New</button>
            </div>
        </div>
       
        <div class="widget">
            <h3>Cars</h3>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>MODEL YEAR</th>
                        <th>ENGINE</th>
                        <th>TRANSMISSION</th>
                        <th>SEATS</th>
                    </tr>
                </thead>
                <tbody>
                <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "Aishu@0303";
$dbname = "car";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission for adding a new car
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
    $name = $_POST['name'];
    $model_year = $_POST['model_year'];
    $engine = $_POST['engine'];
    $transmission = $_POST['transmission'];
    $seats = $_POST['seats'];

    $sql = "INSERT INTO cars (name, model_year, engine, transmission, seats) VALUES ('$name', '$model_year', '$engine', '$transmission', '$seats')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New car added successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT id, name, model_year, engine, transmission, seats FROM cars";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["model_year"] . "</td>";
        echo "<td>" . $row["engine"] . "</td>";
        echo "<td>" . $row["transmission"] . "</td>";
        echo "<td>" . $row["seats"] . "</td>";
        // Add more columns if needed
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No cars found</td></tr>";
}

$conn->close();
?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Hidden form to handle delete request -->
    <form id="delete-form" method="POST" style="display: none;">
        <input type="hidden" name="userId" value="">
    </form>

    <!-- Modal for adding a new car -->
    <div id="addModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <form method="POST" action="">
                <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="model_year" placeholder="Model Year" required>
                <input type="text" name="engine" placeholder="Engine" required>
                <input type="text" name="transmission" placeholder="Transmission" required>
                <input type="text" name="seats" placeholder="Seats" required>
                <button type="submit">Add Car</button>
            </form>
        </div>
    </div>
</body>
</html>
