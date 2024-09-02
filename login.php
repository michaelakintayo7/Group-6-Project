<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="form-box box">

            <?php
            include "connection.php";

            if (isset($_POST['login'])) {

                $email = $_POST['email'];
                $pass = $_POST['password'];

                // Retrieve the user record based on the provided email
                $sql = "SELECT * FROM users WHERE email='$email'";

                $res = mysqli_query($conn, $sql);

                if (mysqli_num_rows($res) > 0) {

                    $row = mysqli_fetch_assoc($res);

                    $password = $row['password']; // Get the stored password from the database

                    // Compare the input password with the stored password
                    if ($pass === $password) {
                        // If password matches, create session and redirect to admin_user.php
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['username'] = $row['username'];

                        // header("location: admin_user.php");

                        //Add0826 check roles
                        if ($row['role'] === 'admin') {

                            header("location: admin_dashboard.php");
                        } else {

                            header("location: user_dashboard.php.php");
                        }
                    } else {
                        // If password doesn't match, show error message
                        echo "<div class='message'>
                    <p>Wrong Password</p>
                    </div><br>";
                        echo "<a href='login.php'><button class='btn'>Go Back</button></a>";
                    }
                } else {
                    // If email does not exist, show error message
                    echo "<div class='message'>
                    <p>Wrong Email or Password</p>
                    </div><br>";
                    echo "<a href='login.php'><button class='btn'>Go Back</button></a>";
                }
            } else {
            ?>


                <!-- <header>Login</header> -->
                <!-- <hr> -->
                <!-- <form action="#" method="POST"> -->
                <form action="#" method="POST">
                    <div class="form-box">
                        <div class="logo"> <img src="img/flinders-logo.png" alt="Flinders Logo"></div>
                        <div class="separator"></div>

                        <h3>Welcome to ChemManager!</h3>
                        <br>
                        <div class="input-container">
                            <i class="fa fa-envelope icon"></i>
                            <input class="input-field" type="email" placeholder="Email Address" name="email">
                        </div>

                        <div class="input-container">
                            <i class="fa fa-lock icon"></i>
                            <input class="input-field password" type="password" placeholder="Password" name="password">
                            <i class="fa fa-eye toggle icon"></i>
                        </div>

                    </div>

                    <input type="submit" name="login" id="submit" value="Login" class="button">

                    <!-- <div class="links">
                        Don't have an account? <a href="signup.php">Signup Now</a>
                    </div> -->

                    <div class="links">
                        <a href="mailto:huan0722@flinders.edu.au">Email to Admin to get an account </a>
                    </div>

                </form>
        </div>
    <?php
            }
    ?>
    </div>
    <script>
        const toggle = document.querySelector(".toggle"),
            input = document.querySelector(".password");
        toggle.addEventListener("click", () => {
            if (input.type === "password") {
                input.type = "text";
                toggle.classList.replace("fa-eye-slash", "fa-eye");
            } else {
                input.type = "password";
            }
        })
    </script>
</body>

</html>