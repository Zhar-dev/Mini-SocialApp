<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Database Data</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 70%;
            margin: 30px auto;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 10px;
        }


        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #FF8E61;
            color: #fff;
            text-shadow: 2px 2px 4px #333333;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
    <body>
        <h1>USER DATA FROM DATABASE</h1>

        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "user";
        
        $conn = new mysqli($host, $username, $password, $database);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>
                    <th>ID</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>EMAIL</th>
                    <th>CONTACT NO</th>
                    <th>PASSWORD</th>
                </tr>";
        
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["user_id"] . "</td>
                        <td>" . $row["first_name"] . "</td>
                        <td>" . $row["last_name"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["contact_no"] . "</td>
                        <td>" . $row["pass"] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        
        $conn->close();
        ?>
    </body>
</html>
