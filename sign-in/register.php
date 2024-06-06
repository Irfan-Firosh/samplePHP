<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Register!</title>
    <script type="text/javascript" src="./func.js"></script>
</head>
<body>
    <?php
    function checkMail($mail) {
        $conn = new mysqli("localhost", "root", "", "practicePHP");
        $sql = "SELECT email FROM credentials WHERE email='$mail'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "Email already exists: ";
        }
    }
    ?>
    <div class="login">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" onsubmit="return validateReg()" name="rform">
            <label for="fname">Username: </label>
            <input type="text" name="fname"> <span>*</span>
            <br>
            <br>
            <label for="fmail">Email: </label>
            <input type="text" name="fmail"> <span>*</span>
            <br>
            <span style="font-size:smaller"><?php checkMail($_POST['fmail']) ?></span>
            <br>
            <label for="fnum">Mobile Number:</label>
            <input type="text" name="fnum"> <span>*</span>
            <br>
            <br>
            <label for="fpass">Password: </label>
            <input type="password" name="fpass" id="pass1"> <span>*</span>
            <br>
            <br>
            <label for="cpass">Confirm Password: </label>
            <input type="password" name="cpass"> <span>*</span>
            <br>
            <br>
            <input type="submit">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = htmlspecialchars($_POST['fname']);
            $mail = htmlspecialchars($_POST['fmail']);
            $number = htmlspecialchars($_POST['fnum']);
            $fpass = htmlspecialchars($_POST['fpass']);



            //Establishing connection to database
            $conn = new mysqli("localhost", "root", "", "practicePHP");
            if ($conn->connect_error) {
                print "Error connecting to the server";
            }
            $sql = "INSERT INTO credentials (username, email, mobile, password) VALUES ('$name', '$mail', '$number', '$fpass')";

            $conn->query($sql);

            $conn->close();

            header("Location: ../dashboard-user.php");
            die();
        }
        ?>
    </div>
</body>
</html>