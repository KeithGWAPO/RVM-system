<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "./css/cashiering.css"> 
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
        
        .hrf{
            margin-top: 15px;
            border: 3px solid #100494;
            margin-left: 40px;
            width: 940px;
        }
        .box-form{
            border: 2px solid grey;
            width: 980px;
            height: 450px;
            margin-left: 25px;
            color: white;
            background-color: black;
        }
        .search-bar{
            margin-top:10px;
            margin-left:540px;
            padding: 10px;
            border-radius: 30px;
            font-weight: bold;
            background-color: black;
            color: white;
            border: 2px solid white;
        }
        .column {
            display: flex;
            flex-direction: row;
            height: 100%;
        }

        .left-column, .right-column {
            width: 40%;
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 20px;
            padding-top: 10px;
        }
        .right-column{
            width: 60%;
        }

        .left-column h1, .right-column h1 {
            color: white;
        }
        .customer-name-input{
            margin-right: 500px;
            padding: 8px;
            border-radius: 30px;
            width: 350px;
        }
        .product-code-input{
            margin-right: 500px;
            padding: 8px;
            border-radius: 30px;
            width: 350px;
            margin-top: 10px;
        }
        .product-image-holder{
            border: 2px solid white ;
            width: 40%;
            height: 30%;
            margin-top: 10px;
            margin-left: 100px;
        }
        .display-price{
            border: 2px solid white;
            padding: 8px;
            border-radius: 30px;
            width: 350px;  
            margin-right: 500px;
            margin-top: 10px;
        }
        .quantity-input{
            margin-right: 500px;
            padding: 8px;
            border-radius: 30px;
            width: 350px;
            margin-top: 10px;
        }
        .discount-option{
            display: flex;
            gap: 60px;
            margin-top: 11px;
            align-items: center;
            justify-content: center;
            button{
                font-size: 20px;
                width: 30%;
                border-radius: 10px;
                border: 3px solid #100494;
                color: #100494;
                padding: 8px;
            }
        }
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        th{
            background-color: #dddddd;
            color: black;
        }
        td{
            padding: 10px ;
        }
        .right-column-total{
            background-color: white;
            width: 100%;
            height: 25%;
            margin-top: 10px;
            color: #000;
            .changed{
                background-color: rgb(216, 216, 216);
            }
            h4{
                padding-top: 8px;
                padding-bottom: 8px;
                padding-left: 30px;
                background-color: grey;
                
            }
        }
        .btn-save-sale{
                font-size: 20px;
                width: 30%;
                border-radius: 10px;
                border: 3px solid grey;
                color: white;
                padding: 8px;
                background-color: #100494;
                margin-top: 10px;
                float: right;
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
                        <li><a class="active" href="#cashiering">CASHIERING</a></li>
                        <li><a class="li-nav" href="productlists.php">PRODUCT LISTS</a></li>
                        
                    </ul>
                </div>
                <div class="right-form">
                    <hr class="hrf">
                    <section class="box-form">
                        <div class="upper-form" style="display: flex; align-items: center;">
                            <?php
                                date_default_timezone_set('Asia/Manila');

                                $currentDate = date('F j, Y');

                                $currentTime = date('g:i A');

                                echo "<div style='margin-top:10px; margin-left:30px; display: flex; align-items: center;'>";
                                echo "<span style='border: 1px solid grey; padding: 5px; margin-right: 30px; border-radius:7px; background-color:rgb(220, 220, 220); color:#100494;'>$currentDate</span>";
                                echo "<span style='color:rgb(220, 220, 220);'>$currentTime</span>";
                                echo "</div>";
                            ?>
                            <input class="search-bar" type="text" placeholder="Search">
                        </div>
                        <div class="column">
                            <div class="left-column">
                                <input class="customer-name-input" type="text" placeholder="Customer's Name">
                                <input class="product-code-input" type="text" placeholder="Barcode/Product code">
                                    <div class="product-image-holder">
                                    </div>
                                    <div class="display-price">Price    </div>
                                
                                <input class="quantity-input" type="text" placeholder="Quantity">
                                
                                <div class="discount-option">
                                <h3>Discount?</h3>
                                <button>ADD</button>
                                </div>
                                
                            </div>
                            <div class="right-column">
                                <div style="overflow-x: auto; overflow-y: auto; max-height: 200px; max-width:600px;">
                                    <table>
                                        <tr>
                                            <th>CODE</th>
                                            <th>PRICE</th>
                                            <th>QUANTITY</th>
                                            <th>TOTAL</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 60px;">
                                            <a href=""><span style="float:left;">&#9998;</span></a>
                                            <a href=""><span style="float: right;">&#9746;</span></a></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 60px;">
                                            <a href=""><span style="float:left;">&#9998;</span></a>
                                            <a href=""><span style="float: right;">&#9746;</span></a></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 60px;">
                                            <a href=""><span style="float:left;">&#9998;</span></a>
                                            <a href=""><span style="float: right;">&#9746;</span></a></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 60px;">
                                            <a href=""><span style="float:left;">&#9998;</span></a>
                                            <a href=""><span style="float: right;">&#9746;</span></a></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 60px;">
                                            <a href=""><span style="float:left;">&#9998;</span></a>
                                            <a href=""><span style="float: right;">&#9746;</span></a></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 60px;">
                                            <a href=""><span style="float:left;">&#9998;</span></a>
                                            <a href=""><span style="float: right;">&#9746;</span></a></td>
                                        </tr>
                                    </table>
                                </div>
                                    <div class="right-column-total">
                                        <h4>Total:</h4>
                                        <h4>Tendered:</h4>
                                        <h4 class="changed">Changed:</h4>
                                    </div>
                                    <button class="btn-save-sale">SAVE SALE</button>
                            </div>
                        </div>

                    </section>
                </div>
            </section>
        </div>
    </div>
    
</body>
</html>