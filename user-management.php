<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .flex-container {
            display: flex;
            flex-direction: row;
        }

        .container {
            margin-top: 100px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;
        }

        .dropdown {
            width: 100px;
            border-radius: 10px;
        }

    </style>
</head>
<body>
    <header class="header">Admin Page</header>
    <div class="container">
        <table stlye="text-align: center;">
            <tr>
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <select class="dropdown" name="users" size="10">
                        <?php
                        $conn = new mysqli("localhost", "root", "", "practicePhP");
                        $sql = "SELECT * FROM credentials";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $id = $row["id"];
                                $name = $row['username'];
                                echo "<option value='$id'>$name</option>";
                            }
                        }
                        ?>
                    </select>
                    <br>

                    <label for="option" style="font-size: small;">Select Action:</label>
                    <select name="option">
                        <option value="details">View Details</option>
                        <option value="edit">Edit Info</option>
                        <option value="delete">Delete User</option>
                    </select>
                    <h3>New Info:</h1>
                    Username: <input type="text" name="fname">
                    Mobile: <input type="text" name="fnum">
                    <br>

                    <input type="submit">
                </form>
                <br>
                <br>
                <div class="container">
                    <?php
                    $conn = new mysqli("localhost", "root", "", "practicePHP");
                    $id = $_POST["users"];
                    if ($id == "") {
                        print "Please choose an option";
                    }
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        switch($_POST["option"]) {
                            case "details":
                                $sql = "SELECT * FROM credentials WHERE id='$id'";
                                $result = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                    foreach ($row as $key=>$value) {
                                        print "$key: $value |";
                                    }
                                }
                                break;
                            case "edit":
                                $name = $_POST['fname'];
                                $mobile = $_POST['fnum'];
                                if ($name == "" || $mobile == "") {
                                    print "Please enter valid information";
                                }
                                $sql = "UPDATE credentials SET username='$name', mobile='$mobile' WHERE id='$id'";
                                $conn->query($sql);
                                print("Succesfully Edited");
                                break;
                            case "delete":
                                $sql = "DELETE FROM credentials WHERE id='$id'";
                                $conn->query($sql);
                                print("Succesfully Deleted");
                                break;
                        }
                    }
                    ?>
                </div>
                <br>
            </tr>
        </table>
    </div>
</body>
</html>