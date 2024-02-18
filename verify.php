<?php
session_start();

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $passwords = $_POST['pass'];

        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "user";

        $conn = new mysqli($host, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $login_query = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $login_query);

        if ($result) {
            if ($row = mysqli_fetch_assoc($result)) {
                if ($passwords === $row['pass']) {

                    header("Location: home.php");

                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['first_name'] = $row['first_name'];
                    $_SESSION['last_name'] = $row['last_name'];

                } else {
                    echo "Invalid email or password";
                }
            }
         } else {
            echo "Error: " . mysqli_error($conn);
        }

        $conn->close();
    }
?>
