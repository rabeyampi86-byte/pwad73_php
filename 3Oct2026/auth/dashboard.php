<?php 
session_start();
    if($_SESSION['email']!=true){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            background: #f5f7fb;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .dashboard {
            width: 100%;
            max-width: 700px;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.05);
            padding: 30px 24px;
        }
        h1 {
            margin: 0 0 18px;
            font-size: 32px;
            color: #111827;
        }
        .session-box {
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 16px;
            margin-bottom: 20px;
            font-size: 14px;
            color: #374151;
            word-break: break-word;
        }
        a {
            display: inline-block;
            background: #2563eb;
            color: #fff;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Welcome to Dashboard</h1>
        <div class="session-box">
            <?php 
            print_r($_SESSION);
            ?>
        </div>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>