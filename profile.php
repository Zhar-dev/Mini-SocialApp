<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$profileUserId = $_SESSION['user_id'];

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile</title>
        <link rel="icon" href="Pictures/profile.svg" type="image/png" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700;900&family=Stardos+Stencil:wght@700&display=swap"
            rel="stylesheet"
        />
        <style>
            body {
                font-family: "Poppins";
                color: #4F4A45;
                background-color: #F6F1EE;
            }

            hr {
                border-width: 10px;
                border: solid;
                border-color: #3F72AF;

                width: 94%;

                margin-top: 0px;
            }


            h1 {
                margin-left: 20px;
            }

            img {
                width: 200px;

                border-width: 18px;
                border: solid;
                border-color: #ffffff;

                border-radius: 150px;
            }

            .profile {
                display: inline-block;

                margin-top: 16px;
                margin-left: 80px;
                margin-bottom: 16px;
            }

            .profile-info {
                display: inline-block;

                vertical-align: top;

                margin-left: 60px;
            }

            .name {
                font-size: 42px;
                font-weight: 600;

                margin-top: 10px;
                margin-bottom: 4px;

                text-shadow: 0px 0px 4px #6b6b6b;
            }

            .follow {
                color: rgb(98, 98, 98);
                font-weight: 500;

                margin: 0px;
                margin-bottom: 30px;
            }

            .count {
                font-weight: 600;
                color: black;
            }

            .friend-button {
                width: 150px;
                height: 56px;

                border: none;
                border-radius: 8px;
                
                background-color: #ff8e32;
                color: white;

                font-family: Poppins;
                font-size: 18px;
                font-weight: 600;

                margin-right: 20px;
                margin-top: 10px;

                cursor: pointer;

                transition: color 0.4s, box-shadow 0.4s;
            }

            .friend-button:hover {
                color: black;
                background-color: rgb(4, 159, 255);
                box-shadow: 0px 0px 10px rgb(82, 82, 82);
            }

            .money-button {
                width: 150px;
                height: 56px;

                font-size: 18px;
                font-weight: 600;
                font-family: Poppins;

                border: none;
                border-radius: 8px;

                background-color: #ff8e32;
                color: white;

                cursor: pointer;

                transition: color 0.4s, box-shadow 0.4s;
            }

            .money-button:hover {
                color: black;
                background-color: rgb(43, 233, 100);
                box-shadow: 0px 0px 10px rgb(82, 82, 82);
            }

            .logo {
                width: 60px;

                border-radius: 6px;
                border-radius: 12px;

                margin-bottom: 4px;
            }

            .tops {
                display: inline-block;

                margin-left: 60px;
                margin-top: 6px;
                margin-bottom: 0px;
            }

            .top0 {
                display: inline-block;
                vertical-align: top;

                width: 200px;

                margin-bottom: 0px;
                margin-top: 0px;
                margin-left: 16px;
                
            }

            h1 {
                margin: 0px;
                margin-left: 6px;
                margin-top: 6px;
            }

            .thin {
                width: 1480px;

                border: 0.5px solid #3F72AF;
            }

            .basic {
                margin: 0;
                margin-left: 80px;

                font-size: 24px;
                font-weight: bolder;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .centered-container {
                display: flex;
                justify-content: center;
                align-items: center;
                
                width: 1400px;
                height: 280px;

                margin-top: 10px;

                background-color: white;
                border-radius: 12px;
            }

            .card1, .card2{
                width: 45%;
                text-align: left;
            }

            .info {
                font-weight: bold;
            }

            .links {
                text-align: right;
                margin-top: 30px;
            }

            a {
                text-decoration: none;

                color: black;

                font-weight: bolder;
                font-size: 18px;

                text-align: right;
                margin-right: 60px;
            }
        </style>
    </head>
    <body>
        <div class="profile">
            <img src="Pictures/ID.jpg" alt="profile">
                <div class="profile-info">
                    <p class="name"><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?>!</p>
                    <p class="follow"><span class="count">1M </span> Followers &#183; <span class="count">0 </span> Following</p>
                    <button class="friend-button">Add Friend</button>
                    <button class="money-button">Send Money</button>
                </div>
        </div>

        <hr class="thin">

        <p class="basic">BASIC INFO</p>

        <div class="container">
            <div class="centered-container">
                <div class="card1">
                    <p>Gender:</p>
                    <p>Age:</p>
                    <p>Birthday:</p>
                    <p>Nationality:</p>
                    <p>Laguages:</p>
                    <p>Address:</p>
                </div>
                <div class="card2">
                    <p class="info">Male</p>
                    <p class="info">21 Years Old</p>
                    <p class="info">May 19 2002</p>
                    <p class="info">Filipino</p>
                    <p class="info">Tagalog and Japanese</p>
                    <p class="info">Lives in Pulot, Palawan, Philippines</p>
                </div>
            </div>
        </div>
        <p class="links">
            <a href="Home.php">BACK TO HOMEPAGE</a>
        </p>
    </body>
</html>