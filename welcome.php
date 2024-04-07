<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "./css/welcome.css"> 
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
        .box{
            background-color: rgb(225, 225, 225);
        }
        .title-logo img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            transition: transform 0.2s; 
            margin-right: 1rem;
            box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
        }
        .welcome-input{
            justify-content: center;
            align-items: center; 
            text-align:center; 
            margin: auto;
            margin-top: 300px;
        }
        .btn{
            margin-left: 400px;
            margin-top: 30px;
            background-image: linear-gradient(to right,black,#100494,black);
            width: 200px;
            padding: 20px;
            border-radius: 30px;
            a{
                text-decoration: none;
                color:white
            }
        }
        .line{
            margin-top: 70px;
            border: 4px solid #120d3f;
            width: 1000px;
            border-radius: 30px;
        }
        
    </style>
</head>
<body>
    <div class="bodyvid">
        <video autoplay loop id="background-video" src="./background/background.mp4"></video>

        <div class="box-container" style="background-color: white;">
            <nav style="background-color: #120d3f;">
                <div class="title-logo">
                    <img src="./logo/new logo.png" alt="logo">
                    <h1>R.V.M. Cashiering System</h1>
                </div>
                    <ul>
                        <li><a href="administrator.php">Administrator</a></li>
                    </ul>   
            </nav>
            <div class="welcome-input">
                <?php
                    session_start();
                    if(isset($_SESSION['username'])) {
                        $username = $_SESSION['username'];
                        $firstname = $_SESSION['firstname'];
                        $lastname = $_SESSION['lastname'];
                        echo "<h1>Welcome, $firstname $lastname! </h1>";
                        echo "<h1>to R.V.M. Cashiering System
                        </h1>";
                    } else {
                        header("Location: index.php");
                        exit();
                    }
                ?>
                <div class="btn">
                    <a href="home.php">Get Started</a>
                </div>
                <hr class="line">
            </div>
        </div>
    </div>
</body>
</html>