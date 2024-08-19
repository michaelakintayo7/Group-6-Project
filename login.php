<?php 
SESSION_START();

if (isset($_SESSION['auth'])) {
 
    if ($_SESSION['auth'] == 1) {
        if ($_SESSION['role'] == 'admin') {
            header("location: landing-admin.php");
        } else {
            header("location: landing-user.php");
        }
        exit();
    }
}

$error = ''; 

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $pass = $_POST['password'];

    $users = [
        'admin' => ['password' => '1234', 'role' => 'admin'],
        'general_user' => ['password' => '5678', 'role' => 'user']
    ];

    if (isset($users[$id]) && $users[$id]['password'] == $pass) {
        $_SESSION['auth'] = 1;
        $_SESSION['role'] = $users[$id]['role'];

        if ($users[$id]['role'] == 'admin') {
            header("location: landing-admin.php");
        } else {
            header("location: landing-user.php");
        }
        exit();
    } else {
        $error = "Invalid username or password. Please try again."; 
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>ChemManager - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            position: relative;
        }
        .container {
            max-width: 400px;
            width: 100%;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
            z-index: 1;
        }
        .logo {
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 120px; 
            height: auto;
        }
        .separator {
            border-top: 2px solid rgba(0, 123, 255, 0.3); 
            margin: 20px 0;
        }
        .container h1 {
            margin: 20px 0;
            font-size: 28px;
            color: #007bff;
            font-weight: 600;
        }
        .welcome-message {
            margin-bottom: 20px;
            font-size: 16px;
            color: #555;
            font-weight: 300;
            line-height: 1.5;
            display: <?php echo empty($error) ? 'block' : 'none'; ?>; 
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            color: #fff;
            padding: 12px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: 500;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .error {
            color: #dc3545; 
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('img/login-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            opacity: 0.7; 
            z-index: 0; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="img/flinders-logo.png" alt="Flinders Logo">
        </div>
        <div class="separator"></div>
        <h1>ChemManager</h1>
        <?php if (!empty($error)) { ?>
            <div class="error"><?php echo $error; ?></div>
        <?php } ?>
        <p class="welcome-message">Welcome! Enter your details to continue.</p>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group">
                <input type="text" placeholder="Username" name="id" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login" class="btn-primary" name="submit">
            </div>
        </form>
    </div>
</body>
</html>
