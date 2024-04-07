<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "./css/home.css"> 
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

        /* Slideshow container */
        .slideshow-container {
        max-width: 600px;
        position: relative;
        margin: auto;
        margin-left: 220px;
        }

        /* Next & previous buttons */
        .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
        right: 0;
        border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
        background-color: #717171;
        }

        /* Fading animation */
        .fade {
        animation-name: fade;
        animation-duration: 1.5s;
        }

        @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
        .prev, .next,.text {font-size: 11px}
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
                        <li><a class="active" href="#home">HOME</a></li>
                        <li><a class="li-nav" href="dashboard.php">DASHBOARD</a></li>
                        <li><a class="li-nav" href="cashiering.php">CASHIERING</a></li>
                        <li><a class="li-nav" href="productlists.php">PRODUCT LISTS</a></li>
                        
                    </ul>
                </div>
                <div class="right-form">
                    <div class="slideshow-container" style="margin-top: 20px">
                        <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="./images/wp1.jpg" style="width:100%; border-radius:30px;">
                        <div class="text"></div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="./images/wp2.png" style="width:100%; border-radius:30px;">
                        <div class="text"></div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="./images/wp3.jpg" style="width:100%; border-radius:30px;">
                        <div class="text"></div>
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>

                    </div>
                        <br>

                    <div style="text-align:center; margin-left:220px;">
                        <span class="dot" onclick="currentSlide(1)"></span> 
                        <span class="dot" onclick="currentSlide(2)"></span> 
                        <span class="dot" onclick="currentSlide(3)"></span> 
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        }
    </script>
</body>
</html>