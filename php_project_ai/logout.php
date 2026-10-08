<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: index.php');
  exit;
}

$csrfToken = $_POST['csrf_token'] ?? '';

if (
  !is_string($csrfToken) ||
  !isset($_SESSION['csrf_token']) ||
  !hash_equals($_SESSION['csrf_token'], $csrfToken)
) {
  http_response_code(403);
  exit('Invalid logout request.');
}

$_SESSION = [];

if (ini_get('session.use_cookies')) {
  $cookieParameters = session_get_cookie_params();
  setcookie(
    session_name(),
    '',
    time() - 42000,
    $cookieParameters['path'],
    $cookieParameters['domain'],
    $cookieParameters['secure'],
    $cookieParameters['httponly']
  );
}

session_destroy();

header('Location: index.php');
exit;
