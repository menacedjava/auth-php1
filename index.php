<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if ($user === 'admin' && $pass === '1234') {
        $_SESSION['auth'] = true;
        echo "Welcome, admin!";
    } else {
        echo "Invalid login";
    }
} else {
    if (isset($_SESSION['auth'])) {
        echo "Already logged in!";
    } else {
        echo '<form method="post">
                <input name="user">
                <input type="password" name="pass">
                <button>Login</button>
              </form>';
    }
}
?>
