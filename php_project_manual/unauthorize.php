<?php
session_start();
$homeUrl = isset($_SESSION['url']) ? $_SESSION['url'] : 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            display: grid;
            min-height: 100vh;
            margin: 0;
            padding: 24px;
            place-items: center;
            background: #f4f6fb;
            color: #27324a;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        main {
            width: min(100%, 460px);
            padding: 48px 32px;
            border-radius: 16px;
            background: #fff;
            box-shadow: 0 12px 40px rgb(39 50 74 / 10%);
        }

        .icon {
            display: grid;
            width: 72px;
            height: 72px;
            margin: 0 auto 24px;
            place-items: center;
            border-radius: 50%;
            background: #fff0ef;
            color: #dc3545;
            font-size: 36px;
            font-weight: 700;
        }

        h1 {
            margin: 0 0 12px;
            font-size: 28px;
        }

        p {
            margin: 0 0 28px;
            color: #667085;
            line-height: 1.6;
        }

        .home-button {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 8px;
            background: #0d6efd;
            color: #fff;
            font-weight: 600;
            text-decoration: none;
        }

        .home-button:hover,
        .home-button:focus-visible {
            background: #0b5ed7;
        }

        .home-button:focus-visible {
            outline: 3px solid #9ec5fe;
            outline-offset: 3px;
        }
    </style>
</head>
<body>
    <main>
        <div class="icon" aria-hidden="true">!</div>
        <h1>Access denied</h1>
        <p>You don't have permission to view this page. Return to the home page to continue.</p>
        <a class="home-button" href="<?php echo htmlspecialchars($homeUrl, ENT_QUOTES, 'UTF-8'); ?>">Go to Home</a>
    </main>
</body>
</html>