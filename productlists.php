<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "./css/productlist.css"> 
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
            background-color: white;
        }
        .upper-form{
            display: flex;
            align-items: center;
            margin-top: 10px;
            gap: 660px;
            h1{
                color: black;
                margin-left: 30px;
            }
            .btn-create-new{
                background-color: #100494;
                color: white;
                padding-left: 10px;
                padding-right: 10px;
                padding: 5px;
                border-radius: 10px;
                font-size: large;
            }
        }
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 3px solid #dddddd;
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
        .btn-active{
            background-color:#ff3434; color: white;
            padding: 5px;
            width: 80px;
            border-radius: 30px;
        }
        .btn-action{
            background-color:white; border:2px solid black;
            padding: 5px;
            width: 80px;
            border-radius: 30px;
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
                        <li><a class="active" href="#productlists">PRODUCT LISTS</a></li>
                        
                    </ul>
                </div>
                <div class="right-form">
                    <hr class="hrf">
                        <section class="box-form">
                        <div class="upper-form">
                            <h1>List of Product</h1>
                            <button class="btn-create-new" onclick="createNewProduct()">CREATE NEW</button>
                        </div>
                        <div id="productTableContainer" style="overflow-x: auto; overflow-y: auto; max-height: 360px; max-width:1000px;margin:10px; color:black;">
                                    <table>
                                        <tr>
                                            <th>CODE</th>
                                            <th>DESCRIPTION</th>
                                            <th>STOCK</th>
                                            <th>PRICE</th>
                                            <th>STATUS</th>
                                            <th>ACTION</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 100px;"><button class="btn-active">Inactive</button></td>
                                            <td style="width: 100px;"><button class="btn-action">Action&#10549;</button></td>
                                            
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 100px;"><button class="btn-active">Inactive</button></td>
                                            <td style="width: 100px;"><button class="btn-action">Action&#10549;</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 100px;"><button class="btn-active">Inactive</button></td>
                                            <td style="width: 100px;"><button class="btn-action">Action&#10549;</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 100px;"><button class="btn-active">Inactive</button></td>
                                            <td style="width: 100px;"><button class="btn-action">Action&#10549;</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 100px;"><button class="btn-active">Inactive</button></td>
                                            <td style="width: 100px;"><button class="btn-action">Action&#10549;</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 100px;"><button class="btn-active">Inactive</button></td>
                                            <td style="width: 100px;"><button class="btn-action">Action&#10549;</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 100px;"><button class="btn-active">Inactive</button></td>
                                            <td style="width: 100px;"><button class="btn-action">Action&#10549;</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 100px;"><button class="btn-active">Inactive</button></td>
                                            <td style="width: 100px;"><button class="btn-action">Action&#10549;</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 100px;"><button class="btn-active">Inactive</button></td>
                                            <td style="width: 100px;"><button class="btn-action">Action&#10549;</button></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td style="width: 100px;"><button class="btn-active">Inactive</button></td>
                                            <td style="width: 100px;"><button class="btn-action">Action&#10549;</button></td>
                                        </tr>
                                    </table>
                                </div>
                        </section>
                </div>
            </section>
        </div>
    </div>
    <script>
        // Function to add a new product
        function createNewProduct() {
            let code = prompt("Enter product code:");
            let description = prompt("Enter product description:");
            let stock = prompt("Enter product stock:");
            let price = prompt("Enter product price:");

            // Create a new product object
            let product = {
                code: code,
                description: description,
                stock: stock,
                price: price,
                status: "Inactive"
            };

            // Retrieve existing products from localStorage or initialize an empty array
            let products = JSON.parse(localStorage.getItem('products')) || [];

            // Add the new product to the products array
            products.push(product);

            // Save the updated products array back to localStorage
            localStorage.setItem('products', JSON.stringify(products));

            // Update the product table
            updateProductTable(products);
        }

        // Function to update the product table
        function updateProductTable(products) {
            let tableHTML = '<table><tr><th>CODE</th><th>DESCRIPTION</th><th>STOCK</th><th>PRICE</th><th>STATUS</th><th>ACTION</th></tr>';

            // Loop through each product and add a table row
            products.forEach((product, index) => {
                tableHTML += '<tr>';
                tableHTML += '<td>' + product.code + '</td>';
                tableHTML += '<td>' + product.description + '</td>';
                tableHTML += '<td>' + product.stock + '</td>';
                tableHTML += '<td>' + product.price + '</td>';
                tableHTML += '<td><button class="btn-active">' + product.status + '</button></td>';
                tableHTML += '<td><button class="btn-action" onclick="editProduct(' + index + ')">Edit</button>';
                tableHTML += '<button class="btn-action" onclick="deleteProduct(' + index + ')">Delete</button></td>';
                tableHTML += '</tr>';
            });

            tableHTML += '</table>';

            // Update the product table container with the generated HTML
            document.getElementById('productTableContainer').innerHTML = tableHTML;
        }

        // Function to edit a product
        function editProduct(index) {
            // Retrieve existing products from localStorage
            let products = JSON.parse(localStorage.getItem('products')) || [];

            // Assuming you want to edit all fields, you can prompt for each field
            let product = products[index];
            product.code = prompt("Enter new product code:", product.code);
            product.description = prompt("Enter new product description:", product.description);
            product.stock = prompt("Enter new product stock:", product.stock);
            product.price = prompt("Enter new product price:", product.price);

            // Save the updated products array back to localStorage
            localStorage.setItem('products', JSON.stringify(products));

            // Update the product table
            updateProductTable(products);
        }

        // Function to delete a product
        function deleteProduct(index) {
            // Retrieve existing products from localStorage
            let products = JSON.parse(localStorage.getItem('products')) || [];

            // Remove the product from the array based on its index
            products.splice(index, 1);

            // Save the updated products array back to localStorage
            localStorage.setItem('products', JSON.stringify(products));

            // Update the product table
            updateProductTable(products);
        }

        // Retrieve products from localStorage and update the table on page load
        let products = JSON.parse(localStorage.getItem('products')) || [];
        updateProductTable(products);
    </script>
</body>
</html>