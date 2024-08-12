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
        .sidebar a:hover {
            background-color: #444;
        }
        .sidebar a.selected{
            background-color: #aaa;
        }
        .header {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* width: 100% ; */
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius:10px;
            margin-bottom:10px;
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

    </style>
    <script>
        function deleteUser(userId) {
            if (confirm('Are you sure you want to delete this user?')) {
                document.getElementById('delete-form').userId.value = userId;
                document.getElementById('delete-form').submit();
            }
        }
    </script>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <a href="receipt.php">Booked</a>
        <a href="admindashboard.php" class="selected">Customers</a>
        <a href="cars.php">Cars</a>
        <a href="admin.html">Logout</a>
    </div>
    <div class="main-content">
        
       
        <div class="widget">
            <h3>Users</h3>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
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

                    // Handle delete request
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['userId'])) {
                        $userIdToDelete = $_POST['userId'];
                        $deleteSql = "DELETE FROM customers WHERE id = ?";
                        $stmt = $conn->prepare($deleteSql);
                        $stmt->bind_param("i", $userIdToDelete);
                        $stmt->execute();
                        $stmt->close();
                    }

                    $sql = "SELECT id, name, emailid FROM customers";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["emailid"] . "</td>";
                            echo "<td><button class='delete-btn' onclick='deleteUser(" . $row["id"] . ")'>Delete</button></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No users found</td></tr>";
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
</body>
</html>
