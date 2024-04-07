<?php
    include("dbconnect.php");

    if(isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "SELECT * FROM login where username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result); // Fetching row as associative array

        if(mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            header("Location: welcome.php");
            exit();
        } else {
            echo '<script>
            window.location.href = "index.php";
            alert("Login Failed. Invalid username or password!!!");
            </script>';
        }
    }
?>