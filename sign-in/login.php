<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login!</title>
    <link rel="stylesheet" href="./styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- JQuery Make invalid dissapear -->
    <script>
        $(document).ready(function dip() {
            setTimeout(function () {$(".invalid").fadeOut('fast');}, 1500);
        });
    </script>
    <script>
        function validateLogin() {
            let form = document.forms["lform"];
            if (form["fmail"].value == "" || form["fpass"].value == "") {
                alert("All fields are required");
                return false;
            }
            if (!form["fmail"].value.includes("@")) {
                alert("Please enter a vaild email");
                return false;
            }
            /* $(document).ready(function() {
                $("#submit-but").click(function() {
                    alert()
                });
            }); */
        }
    </script>
</head>
<body>
    <div class="login">
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" onsubmit="return validateLogin()" name="lform" method="post">
            <label for="fmail">Email Id: </label>
            <input type="text" name="fmail"> <span>*</span>
            <br>
            <br>
            <label for="fpass">Password: </label>
            <input type="password" name="fpass"> <span>*</span>
            <br>
            <br>
            <input type="submit">
            <a href="./register.php" style="color:red; padding-left: 20px;">Register</a><br>
        </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $usermail = $_POST['fmail'];
        $userpass = $_POST['fpass'];
        $conn = new mysqli("localhost", "root", "", "practicePHP");
        $sql = "SELECT email, password FROM credentials where email='$usermail';";
        $result = $conn->query($sql);
        if ($result->num_rows != 0) {
            $row = $result->fetch_assoc();
            if ($row['password'] == $userpass) {
                header("Location: ../dashboard-user.php");
                die();
            }
            else {
                echo "<div class='invalid' style='margin-left: 650px; padding: left 100px; width: 150px; height: 50px; background-color: red; border-radius: 15px; display: flex; align-items: center; justify-content: center; text-align: center;'>Invalid Credentials</div>";
            }
        } else {
            echo "<div class='invalid' style='margin-left: 650px; width: 150px; height: 50px; background-color: red; border-radius: 15px; display: flex; align-items: center; justify-content: center; text-align: center;'>Invalid Credentials</div>";
        }
    }
    ?>
</body>
</html>