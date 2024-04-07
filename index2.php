    <?php
        include("dbconnect.php");
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signup</title>
        <link rel = "stylesheet" type = "text/css" href = "./css/stylesignup.css">
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
                <div class="left-upper-box" style="background-color: #120d3f;">
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
                <div class="right-upper-box" style="background-color: #120d3f;">
                </div>
                <div class="signup-box">
                <h3 class="signup-title">SIGN UP</h3>
                <form action="signup.php" method="POST">
                    <div class="inp-form">
                        <input type="text" id="firstname" name="firstname" placeholder="First name" required>
                        <input type="text" id="lastname" name="lastname" placeholder="Last name" required>
                    </div>
                    <div class="inp-form">
                        <input type="text" id="age" name="age" name="firstname" placeholder="Age" required>
                    </div>
                    <div class="inp-form">
                        <input type="address" id="address" name="address" placeholder="Address" required>
                    </div>
                    <div class="inp-form">
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="inp-form">
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <br>
                    <input class="signup-btn" type="submit" name="submit" value="Sign up">
                    <p>Already have an account? <a class="signin-btn" href="index.php">Sign in</a></p>
                </form>
            </div> 
            </div>
        </div>
    </div>
    </div>
    </body>
    </html>
