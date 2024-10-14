<?php

$name = $_POST['name'];
$email = $_POST['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* General Reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #007bff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px;
        }

        .user-info {
            color: white;
            margin-right: 20px;
        }

        /* Date and Time Section */
        .datetime-container {
            text-align: center;
            margin: 20px 0;
        }

        /* Course Grid Styles */
        .course-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .course-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
            text-align: center;
        }

        .course-card:hover {
            transform: translateY(-5px);
        }

        .course-card img {
            border-bottom: 1px solid #ddd;
        }

        .course-card h3 {
            margin: 10px 0;
            font-size: 1.2em;
        }

        .course-card p {
            color: #555;
        }

        /* Logout Button */
        .logout-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }

        /* Cart Logo */
        .cart-logo {
            font-size: 24px;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="#">HOME</a>
        <a href="#">COURSES</a>
        <a href="#">AFFILIATIONS</a>
        <a href="#">HOW TO JOIN</a>
        <a href="#">TESTIMONIALS</a>
        <div class="user-info">
            <?php echo "Welcome " . ucfirst($name); ?>
        </div>
        <button class="logout-btn" onclick="window.location.href='logout.php';">Logout</button>
        <a href="#" class="cart-logo">🛒</a>
    </div>

    <!-- Date and Time Section -->
    <div class="datetime-container">
        <p id="datetime"></p>
    </div>

    <!-- Course Grid -->
    <div class="course-container">
        <div class="course-card">
            <small>EC0001</small>
            <img src="images/bs1.png" alt="Course Image" class="course-image" width="50%">
            <h3>Quantitative Analysis in Business (45 H)</h3>
            <p>Rs. 35,000/-</p>
        </div>
        <div class="course-card">
            <small>EC0002</small>
            <img src="images/bs2.png" alt="Course Image" class="course-image" width="50%">
            <h3>Information Technology in Retailing (45 H)</h3>
            <p>Rs. 35,000/-</p>
        </div>
        <div class="course-card">
            <small>EC0003</small>
            <img src="images/bs3.png" alt="Course Image" class="course-image" width="50%">
            <h3>Brand Innovation and Development (30 H)</h3>
            <p>Rs. 25,000/-</p>
        </div>
        <div class="course-card">
            <small>EC0004</small>
            <img src="images/bs4.png" alt="Course Image" class="course-image" width="50%">
            <h3>Packaging & Logistic Management (30 H)</h3>
            <p>Rs. 25,000/-</p>
        </div>
        <div class="course-card">
            <small>EC0005</small>
            <img src="images/bs5.jpg" alt="Course Image" class="course-image" width="50%">
            <h3>Service Marketing (40 H)</h3>
            <p>Rs. 30,000/-</p>
        </div>
        <div class="course-card">
            <small>EC0006</small>
            <img src="images/bs6.png" alt="Course Image" class="course-image" width="50%">
            <h3>E-Commerce (45 H)</h3>
            <p>Rs. 35,000/-</p>
        </div>
    </div>

    <!-- Link to external JS file -->
    <script src="script.js"></script>
</body>
</html>
