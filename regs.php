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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="Pictures/reg.svg" type="image/png" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <title>Registration</title>
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

            .centered-card {
                display: inline-block;

                background-color: rgb(255, 255, 255);
                border-radius: 14px;
                margin-top: 40px;
                text-align: left;

                box-shadow: 0px 0px 16px rgb(99, 99, 99);

                width: 560px;
                height: 640px;
            }

            label {
                text-align: left;
                margin-left: 40px;

                text-shadow: 2px 2px 10px gray;
                
                font-size: 15px;
                font-weight: 500;
            }

            input {
                width: 476px;
                height: 30px;
                padding-left: 6px;

                margin-top: 4px;
                margin-bottom: 16px;
                margin-left: 40px;
                
                font-size: 10px;
                font-family: Poppins;   
                border: 0.8px solid #d3d3d3;
                border-radius: 3px;
              }

            h1 {
                text-align: center;
                font-size: 28px;
                margin-top: 20px;
                margin-bottom: 40px;
            }

            button {
                margin-top: 20px;
                margin-left: 12px;
                background-color: #ED7D31;
                border: none;
                padding: 10px 20px;
                cursor: pointer;
              }
            .sub {
                width: 120px;
                height: 36px;

                margin-left: 220px;
                background-color:  #ED7D31;
                
                border: none;
                border-radius: 4px;
                color: white;

                padding: 0;
                
                font-family: 'Poppins';
                letter-spacing: 2px;
                font-size: 16px;
                font-weight: bold;
                
                cursor: pointer;

                transition: all 0.8s;
            }
            .sub:hover {
                box-shadow: 2px 2px 6px rgb(122, 122, 122);
            }
            .sub:active {
                opacity: 0.6;
            }

            a {
                color: #ffffff;
                text-decoration: none;
                font-weight: bold;
                
                cursor: pointer;
            }
        </style>
  </head>
    </head>
    <body>
        <div class="container">
            <div class="centered-card">
              <h1>REGISTRATION FORM</h1>
                <form method="post" action="script.php">
                    <label for="first_name" required>
                      First name:</label><br>
                    <input name="first_name" type="text" maxlength="30" placeholder="Your First name"><br>

                    <label for="last_name"  required>
                      Last name:</label><br>
                    <input name="last_name" type="text" maxlength="30" placeholder="Your Last name" ><br>

                    <label for="email"  required>
                      Email:</label><br>
                    <input name="email" type="email" placeholder="Use unique email address"><br>

                    <label for="contact_no">
                      Contact no:</label><br>
                    <input name="contact_no" type="number"  type="text" pattern="[0-9]{11}" title="Please enter 11 digit contact number" placeholder="Please enter 11 digit contact number" required><br>

                    <label for="pass">
                      Password:</label><br>
                    <input name="pass" type="password" pattern="^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*:,./;'[]\=']).{8,}$" required placeholder="Must contain at least one uppercase, number, and one special character" title="Password must meet the specified criteria"><br>

                    <label for="confirm_pass">Confirm Password:</label><br>
                    <input name="confirm_pass" type="password" required placeholder="Confirm your password"><br>

                    <button class="sub" type="submit" name="submit">SUBMIT</button>
                  </form>
            </div>
        </div>
    </body>
</html>