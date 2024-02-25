<?php

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="Pictures/login.svg" type="image/png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Login Page</title>
    <style>
      body {
        font-family: 'Poppins';
        background-image: url(Pic/bg.jpeg);
        background-size: cover;
        background-repeat: no-repeat;
      
        margin: 0;
        padding: 0;
        }

        .container {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }

        .card1, .card2 {
            display: inline-block;
            margin-top: 100px;
            
            width: 440px;
            height: 440px;
        }

        .card1 {
            background-color: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(6px);
            border-radius: 10px 0px 0px 10px;
          
            text-align: left;
        }

        .card2 {
            background-color: #ffffff;
            border-radius: 0px 10px 10px 0px;
        }

        .title {
            font-size: 30px;
            font-weight: bolder;
            
            margin-left: 22px;
            
            text-shadow: 2px 2px 6px #8d8d8d;
        }

        .card2-desc {
            margin-left: 50px;
            margin-top: 50px;

            
            width: 340px;
            height: 340px;
        }

        .login {
            font-size: 26px;
            font-weight: bold;

            margin-bottom: 10px;
        }

        .apss {
            margin-bottom: 12px;
        }

        input {
            width: 96%;
            height: 30px;
            
            padding-left: 12px;
            margin-bottom: 12px;    
            font-size: 12px;
            
            border: 0.8px solid #d3d3d3;
            border-radius: 3px;
        }

        .In {
            background-color:  #ED7D31;
            
            width: 100%;
            height: 34px;
            
            border: none;
            border-radius: 4px;
            color: white;
            
            font-family: Poppins;
            letter-spacing: 2px;
            font-size: 16px;
            font-weight: bold;
            
            margin-bottom: 6px;
            margin-top: 20px;
            
            cursor: pointer;

            transition: all 0.8s;
        }

        .In:hover {
            box-shadow: 2px 2px 6px grey;
        }

        .In:active {
            opacity: 0.6;
        }

        .for {
            text-align: right;
            font-size: 12px;
            color: blue;
            margin: 0;
            
            margin-bottom: 28px;
            margin-top: 10px;
        }

        .acc {
            font-size: 12px;
            text-align: center;
        }

        a {
            color: #42a1f5;
            text-decoration: none;
            font-weight: 500;
            
            cursor: pointer;
        }

        .mail {
            margin-bottom: 10px;
        }

        img {
            width: 360px;
            margin-left: 40px;
            margin-top: 8px;
        }

        .pol {
            margin-top: 38px;
            color: #42a1f5;
            font-size: 12px;
            text-align: center;
        }

        .zhar {
            margin-top: 38px;
            margin-left: 10px;
            font-weight: bolder;
            font-size: 26px;
        }

        .logo {
            width: 30px;
            margin-left: 18px;
            margin-top: 14px;
        }

        .header { 
            display: flex;
            align-items: center;
            
            height: 40px;
            
            padding: 0;
            margin-top: 8px;
        }

        .short-message {
            font-size: 12px;
            margin: 0;
            margin-bottom: 20px;
        }
    </style>
  </head>
  <body>
    <nav>
      <div class="header">
        <img class="logo "src="Pic/letter-z.png" alt="Logo">
        <p class="zhar">Zhar Corp</p>
      </div>
    </nav>
    

    <div class="container">
      <div class="card1">
        <div>
          <p class="title">Zhar Space</p>
        </div>
        <div>
          <img src="Pic/11.svg" alt="Pic">
        </div>
      </div>

      <div class="card2">
        <div class="card2-desc">
          <div class="first">
          <p class="login">Login to your Account</p>
          <p class="short-message">Hey&#44; Enter you details to login to your acccount&#x21;</p>
        </div>

        <div>
          <form method="post" action="verify.php">
          <input name="email" class="mail" type="email" placeholder="Email" ><br>
          <input name="pass" class="apss" type="password" placeholder="Password" >
          <button class="In" type="submit" name="submit">LOG IN</button>
        </form>

          <p class="for"><a href="">Forgot Password</a></p>
        </div>
          <div>
            <p class="acc">Don&#39;t have an account? <span class="accs"><a href="regs.php">Create an Account</a></span></p>
          </div>
          <div>
            <p class="pol"><i>Privacy Policy</i></p>
          </div>
      </div>
    </div>
    </div>
  </body>
</html>
