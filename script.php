<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "user";

$conn = new mysqli($host, $username, $password, $database);

    if (isset($_POST["submit"])) {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $contact_no = $_POST["contact_no"];
        $pass = $_POST["pass"];
        $confirm_pass = $_POST["confirm_pass"];

        if ($pass !== $confirm_pass) {
            echo "Password and confirm password do not match.";
            return;
        } elseif (!preg_match('~^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*:,./;\'\[\]=\']).{8,}$~', $pass)) {
            echo "Password must contain at least one uppercase letter, one number, and one special character.";
        } else {
            $user_query = "INSERT INTO users (first_name, last_name, email, contact_no, pass) VALUES ('$first_name', '$last_name', '$email', '$contact_no', '$pass')";
            
            $user_q = mysqli_query($conn, $user_query);
    
            if ($user_q) {
                echo "Successfully inserted into the database.";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
    
    $conn->close();
    ?>
