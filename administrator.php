<?php
    // Include necessary files and start session
    include("dbconnect.php");
    session_start();

    // Check if user is logged in
    if(!isset($_SESSION['username'])) {
        header("Location: index.php");
        exit();
    }

    // Fetch user information
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM login WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // Handle form submission for updating user information
    if(isset($_POST['update'])) {
        // Retrieve updated information from form
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        // Update user information in the database
        $update_query = "UPDATE login SET firstname='$firstname', lastname='$lastname', age='$age', address='$address', password='$password' WHERE username='$username'";
        if(mysqli_query($conn, $update_query)) {
            // If update is successful, refresh the page to reflect changes
            header("Refresh:0");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "./css/settings.css"> 
    <style>
        nav ul li a:hover {
            transform: scale(1.2); 
            background-color: white;
            padding: 5px 20px;
            border-radius: 30px;
            color: black;
        }
        .bodyvid{
            height: 100%;
            overflow: hidden;
            margin-top: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #background-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            object-fit: cover;
        }
        .title-logo img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            transition: transform 0.2s; 
            margin-right: 1rem;
            box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
        }
        .box-container {
            display: flex;
            background-color: white;
            border-radius: 20px;
            width: 90%;
            height: 90vh;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.2);
        }
        .upper-logo{
            background-image: linear-gradient(to right, black, rgb(0, 0, 217),black);
        }
        .box{
            background-color: rgb(225, 225, 225);
        }
        .form{
            margin-top: 86px;
            display: flex;
        }
        .nav-left{
            height: 486px;
            background-color: black;
            border-bottom-left-radius: 20px;
        }
        .nav-left-ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 200px;
            background-image: linear-gradient(to right, black,rgb(0, 0, 217));
        }

        .nav-left li a {
            display: block;
            color: white;
            padding: 25px 16px;
            text-decoration: none;
        }

        .nav-left li a.active {
            background-color: white;
            color: black;
        }
        .logout-btn {
            height: 100%;
            text-decoration: none;
            margin-left: 300px;
        }

        .logout-btn button {
            background-color: red;
            color: white;
            padding: 10px;
            border-radius: 30px;
            width: 160px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .logout-btn button:hover {
            background-color: darkred;
            transform: scale(1.05);
            cursor: pointer;
        }
        
        h1 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        form {
            margin-top: 20px;
            width: 300px;
            margin-left: 50px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 390px;
            margin-left: 50px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .right-form{
            display:flex;
        }
    </style>
</head>
<body>
    <div class="bodyvid">
        <video autoplay loop id="background-video" src="./background/background.mp4"></video>

        <div class="box-container">
            <nav class="upper-logo">
                <div class="title-logo">
                    <img src="./logo/new logo.png" alt="logo">
                    <h1 style="color: white;">R.V.M. Cashiering System</h1>
                </div>
                    <ul>
                        <li><a href="#">Administrator</a></li>
                    </ul>   
            </nav>
            <section class="form">
                <div class="nav-left">
                    <ul class="nav-left-ul">
                        <li><a class="li-nav" href="home.php">HOME</a></li>
                        <li><a class="li-nav" href="dashboard.php">DASHBOARD</a></li>
                        <li><a class="li-nav" href="cashiering.php">CASHIERING</a></li>
                        <li><a class="li-nav" href="productlists.php">PRODUCT LISTS</a></li>
                        
                    </ul>
                </div>
                <div class="right-form">
                    <div>
                    <form method="POST" action="">
                        <h1>Welcome, <?php echo $row['firstname']; ?></h1>
                        <label for="firstname">First Name:</label>
                        <input type="text" id="firstname" name="firstname" value="<?php echo $row['firstname']; ?>"><br><br>

                        <label for="lastname">Last Name:</label>
                        <input type="text" id="lastname" name="lastname" value="<?php echo $row['lastname']; ?>"><br><br>

                        <label for="age">Age:</label>
                        <input type="text" id="age" name="age" value="<?php echo $row['age']; ?>"><br><br>

                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>"><br><br>

                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" value="<?php echo $row['password']; ?>"><br><br>

                        
                    </form>
                    </div>
                    <div>
                        <input type="submit" name="update" value="Update">
                        <a class="logout-btn" href="logout.php"><button>LOGOUT</button></a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>