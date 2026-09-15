<?php
// dashboard.php

$username = "Yassir";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f4;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background-color: #410202;
            color: white;
            position: fixed;
            padding: 25px 20px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 12px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .sidebar a:hover {
            background-color: #6b0909;
        }

        .main {
            margin-left: 220px;
            min-height: 100vh;
        }

        .header {
            background-color: white;
            padding: 20px 30px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h2 {
            color: #410202;
        }

        .content {
            padding: 30px;
        }

        .welcome {
            margin-bottom: 30px;
        }

        .welcome h1 {
            color: #333;
            margin-bottom: 8px;
        }

        .welcome p {
            color: #666;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            color: #410202;
            margin-bottom: 15px;
        }

        .card p {
            font-size: 28px;
            font-weight: bold;
            color: #333;
        }

        .logout {
            background-color: #410202;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 5px;
        }

        .logout:hover {
            background-color: #700505;
        }

        @media (max-width: 800px) {

            .sidebar {
                width: 180px;
            }

            .main {
                margin-left: 180px;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">

        <h2>My System</h2>

        <a href="dashboard.php">Dashboard</a>
        <a href="profile.php">Profile</a>
        <a href="users.php">Users</a>
        <a href="settings.php">Settings</a>

    </div>


    <!-- Main Content -->
    <div class="main">

        <!-- Header -->
        <div class="header">

            <h2>Dashboard</h2>

            <a href="logout.php" class="logout">Logout</a>

        </div>


        <!-- Dashboard Content -->
        <div class="content">

            <div class="welcome">

                <h1>Welcome, <?php echo $username; ?>!</h1>

                <p>This is your dashboard.</p>

            </div>


            <!-- Dashboard Cards -->
            <div class="cards">

                <div class="card">
                    <h3>Total Users</h3>
                    <p>25</p>
                </div>

                <div class="card">
                    <h3>Total Products</h3>
                    <p>50</p>
                </div>

                <div class="card">
                    <h3>Total Orders</h3>
                    <p>15</p>
                </div>

            </div>

        </div>

    </div>

</body>
</html>