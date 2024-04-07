    <?php
        include("dbconnect.php");
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOG IN</title>
        <link rel = "stylesheet" type = "text/css" href = "./css/stylelogin.css"> 
        <style>
            .bodyvid{
                height: 100%;
                overflow: hidden;
                margin-top: 130px;
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
        </style>
    </head>
    <body>
        <div class="bodyvid">
        <video autoplay loop id="background-video" src="./background/background.mp4"></video>
        
    <div class="container-all">
        <div class="left-right-div">
            <div class="left-box" style="background-image: linear-gradient(to right,black,#100494,black);">
                <div class="left-upper-box" >
                </div>
                <img src="./logo/new logo.png" alt="logo" class="logo" >
                    <div class="title-box">
                        <h1 class="h1t" style="font-family: Merienda;">R.V.M.</h1>
                        <h2 class="h2t" style="font-family: Jacques Francois Shadow;">Cashiering System</h2>
                    </div>
                <div class="left-lower-box">
                </div>
            </div>
            <div class=right-box>
                <div class="right-upper-box">
                </div>
                <div class="input-box">
                    <h2 class="login-title">Login</h2>  
                        <form name = "form" action= "login.php"method = "POST">
                            <label>Username: </label>
                            <input type="text" id="user" name="user"> </br> </br>
                            <label>Password:  </label>
                            <input type="password" id="pass" name = "pass"> </br> </br>
                            <label>
                            <input class="remember-me"type="checkbox" id="remember-me" name="remember-me"> 
                            <span>Remember me</span>
                            </label>
                            <br>
                            <input class="login-btn" type="submit" id="btn" value="Log In" name="submit">
                            <button class="signup-btn"><a href="index2.php" style="color: white;">Create an account</a></button>
                        </form>  
                    </div>
                    <div class="right-lower-box">
                    </div>
                </div> 
            </div>
        </div>
    </div>
    </div>
    </body>
    </html>