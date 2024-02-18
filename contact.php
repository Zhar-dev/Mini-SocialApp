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
        <title>Contact</title>
        <link rel="icon" href="Pictures/post.svg" type="image/png" />
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
            }

            h1 {
                padding-left: 60px;
            }

            h3 {
                margin-left: 200px;
            }

            .head {
                margin-left: 20px;

                font-size: 36px;
                font-weight: bold;

                padding-bottom: 20px;
            }

            p {
                text-align: right;
                
                margin-top: 20px;
                margin-bottom: 40px;
            }

            a {
                text-decoration: none;

                color: black;

                font-weight: bolder;
                font-size: 18px;

                text-align: right;
                margin-right: 120px;
            }

            .head {
                font-size: 28px;
                margin-left: 80px;

            }

            .links {
                margin-top: 0px;
                margin-bottom: 0PX;
            }

            button {
                margin-left: 360px;
                width: 120px;
                height: 40px;
                border: none;
                border-radius: 8px;
                font-family: "Poppins";
                font-weight: 700;
                font-size: 17px;
                cursor: pointer;
                text-align: center;
                transition: all 0.4s;
            }

            button:hover {
                box-shadow: 0px 0px 8px #000;
            }

            .fb {
                background: linear-gradient(45deg, #3b5998, #2672cb);
                color: white;
                width: 200px;
                height: 46px;
            }

            .tel {
                background: linear-gradient(45deg, #0088cc, #00a8e8);
                width: 140px;
                height: 46px;
            }

            .mess {
                background: linear-gradient(45deg, #0084ff, #00c6ff);
                width: 200px;
                height: 46px;
            }

            .mail {
                background: linear-gradient(45deg, #D44638, #E1AA7D);
                width: 140px;
                height: 46px;
            }

        </style>
    </head>
    <body>
        <h1>Get In Touch with <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?>!</h1>
        <ul>
        <h2 class="head">Contact Me At:</h2>

        <h3>Connect with us on Facebook:</h3>
        <a href="https://www.facebook.com/zharwahab" target="_blank"><button class="fb">Send us a Message</button></a>

        <h3>Join us on Telegram:</h3>
        <a href="https://t.me/Zharz07" target="_blank"><button class="tel">Join Now</button></a>

        <h3>Message us on Messenger:</h3>
        <a href="https://www.facebook.com/zharwahab" target="_blank"><button class="mess">Send in Messenger</button></a>

        <h3>Email us at Gmail:</h3>
        <a href="mailto:2021100007bp@psu.palawa.edu.ph"><button class="mail">Email Now</button></a>

        </ul>
                    
        <p class="links">
            <a href="Home.php">BACK TO HOMEPAGE</a>
        </p>
    </body>
</html>