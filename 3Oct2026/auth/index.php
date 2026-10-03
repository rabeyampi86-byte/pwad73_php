<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f5f7fb;
            font-family: Arial, sans-serif;
        }
        .login-box {
            width: 100%;
            max-width: 380px;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            padding: 30px 24px;
        }
        h3 {
            margin: 0 0 20px;
            text-align: center;
            font-size: 28px;
            color: #111827;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
        }
        input:focus {
            outline: none;
            border-color: #2563eb;
        }
        input[type="submit"] {
            background: #2563eb;
            border: none;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
        }
        h1 {
            margin: 10px 0 0;
            font-size: 18px;
            color: #b91c1c;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h3>Login Form</h3>
        <?php 
        if(isset($_POST['submit'])){
            extract($_POST);
            $password = md5($password); //encription
            include_once('dbconfiger.php'); 
            $result = $conn->query ("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
             if($result->num_rows>0){
                session_start();
                $_SESSION['email'] = $email;
                header("Location: dashboard.php");
             } else{
                echo "<h1>Login failed</h1>";
             }
        }
        ?>
        <form action="" method="post">
            <input type="email" name="email" placeholder="Enter email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
            <input type="password" name="password" placeholder="Enter password">
            <input type="submit" name="submit" value="LOGIN">
        </form>
    </div>
</body>
</html>