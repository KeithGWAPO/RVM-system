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

        .nav-left li a:hover:not(.active) {
            background-color: #555;
            color: white;
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
                    <h1>R.V.M. Cashiering System</h1>
                </div>
                    <ul>
                        <li><a href="administrator.php">Administrator</a></li>
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
                    
                </div>
            </section>
        </div>
    </div>
</body>
</html>