<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="icon" href="Pictures/pic.svg" type="image/png" />
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
            border-color: #6C5F5B;

            width: 94%;
        }

        h1 {
            margin-left: 60px;
        }

        .img {
            width: 400px;
            height: 260px;
            transition: box-shadow 0.4s;
            border: solid 2px white;
        }

        .img:hover {
            box-shadow: 6px 6px 0px #6C5F5B;
        }

        .img1 {
            width: 300px;
            height: 200px;
            border-radius: 12px;

            border: solid 2px white;

            transition: box-shadow 0.6s;
        }

        .img1:hover {
            box-shadow: 6px 6px 10px #6C5F5B;
        }

        .container {
            margin-top: 20px;

            display: flex;

            justify-content: center;
            align-items: center;
        }

        .con {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;

            justify-content: center;
            align-items: center;

            row-gap: 20px;
            column-gap: 20px;
        }

        p {
            text-align: right;
            margin-top: 20px;
        }

        a {
            text-decoration: none;

            color: black;

            font-weight: bolder;
            font-size: 18px;

            text-align: right;
            margin-right: 120px;
        }

        .date {
            margin-left: 120px;
        }

        .links {
            margin-top: 20px;
            margin-bottom: 24px;
            color: white;
        }
    </style>
</head>
<body>
    <h1>GALLERY</h1>

    <hr></hr>
    <h2 class="date">Memories</h2>
    <div class="container">
        <div class="con">
            <img class="img1" src="Pictures/Beach.jpg" alt="Profile">
            <img class="img1" src="Pictures/Forest.jpg" alt="Profile">
            <img class="img1" src="Pictures/Lake.jpg" alt="Profile">
        </div>
    </div>
 
    <h3 class="date">Tuesday</h3>
    <div class="container">
        <div class="con">
            <img class="img" src="Pictures/moon.jpg" alt="Profile">
            <img class="img" src="Pictures/nature.jpg" alt="Profile">
            <img class="img" src="Pictures/Mountain.jpg" alt="Profile">s
        </div>
    </div>
    <h3 class="date">Monday</h3>
    <div class="container">
        <div class="con">
            <img class="img" src="Pictures/go.jpg" alt="Profile">
            <img class="img" src="Pictures/goo.jpg" alt="Profile">
            <img class="img" src="Pictures/goooo.jpg" alt="Profile">
        </div>
    </div>
    <p class="links">
        <a href="Home.php">BACK TO HOMEPAGE</a>
      </p>
</body>
</html>