<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "user";

$conn = new mysqli($host, $username, $password, $database);

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="Pictures/landing.svg" type="image/png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Landing Page</title>
        <style>
            body {
                font-family: Montserrat, "Poppins";
                background-image: url(Pic/bg.jpeg);
                background-size: cover;
                margin: 0;
                padding: 0;
            }

            nav {
                display: flex;
                justify-content: right;
            }

            .top-nav ul {
                list-style: none;
                margin-right: 20px;
                display: flex;
                vertical-align: top;
            }

            .container {
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
            }
            .main-card {
                background-color: rgba(255, 255, 255, 0.271);
                backdrop-filter: blur(8px);
                border-radius: 6px;
                display: flex;
                margin-top: 60px;
                width: 1000px;
                height: 500px;
            }
            h1 {
                margin-top: 4rem;
                margin-bottom: 4rem;
            }
            .sub1, .sub2 {
                flex: 1;
                padding: 20px;
            }
            .sub1 {
                padding-top: 60px;
                padding-left: 40px;
                font-size: 20px;
                border-radius: 6px 0px 0px 6px;
                background-color: #fff;
                color: #282725;
                text-shadow: 2px 2px 4px rgba(169, 169, 169, 0.34);
            }

            .img {
                margin-top: 60px;
                margin-left: 55px;
                max-width: 80%;
            }

            .login-but,
            .signin-but {
                margin-top: 20px;
                background-color: #3e3e3e;
                border-radius: 2px;
                width: 100px;
                height: 40px;
                border: none;
                margin-right: 20px;
                transition: all 0.4s;
                cursor: pointer;
            }

            .login-but:hover,
            .signin-but:hover {
                background-color: #ffa569;
                box-shadow: 4px 4px 12px 1px #717171;
            }

            a {
                font-family: 'Poppins', sans-serif;
                text-decoration: none;
                font-size: 16px;
                font-weight: 600;
                color: white;
            }
            p{
                font-weight: 600;
                color: #3b3b3b;
            }
        </style>
    </head>
    <body>
        <nav class="top-nav">
            <button class="login-but"><a href="login.php">Log In</a></button>
            <button class="signin-but"><a href="regs.php">Sign Up</a></button>
        </nav>

        <div class="container">
            <div class="main-card">
                <div class="sub1">
                    <h1>Welcome to<br>  Zhar Corp&#46;</h1>
                    <p>By: Al-nizar S. Wahab</p>
                </div>
                <div class="sub2">
                    <img class="img" src="Pic/proud.svg" alt="proud">
                </div>
                
            </div>
        </div>
    </body>
</html>