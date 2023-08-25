<?php
// Add this at the top of your login.php page
require_once 'functions/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (loginUser($username, $password)) {
        header("Location: index_page.php"); // Redirect to index page on successful login
        exit();
    } else {
        echo "Login failed.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>

    <title>HPLC</title>
    <link rel="shortcut icon" href="imgs/teamspeak.svg" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="login-box">
        <img src="https://placehold.co/300x50/png" alt="">

        <form action="login.php" method="POST">
            <div class="user-box">
                <input type="text" name="username" placeholder="Username or number" required>
            </div>
            <div class="user-box">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="looog">
                <button type="submit">Log in</button>
            </div>
        </form>

        <hr>

        <div class="linky"><a href="change_pass.php">Change password?</a></div>
        <div class="sign-up">
            <p>Don't have an account? <a href="sign_up.php">Sign up</a></p>
        </div>
    </div>



</body>

</html>