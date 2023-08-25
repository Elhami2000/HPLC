<?php
// Add this at the top of your user_details.php page
require_once 'functions/functions.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['register'])) {
        $user_name = $_POST['user_name'];
        $position = $_POST['position'];
        $password = $_POST['password'];
        $user_role = $_POST['user_role'];

        if (registerUser($user_name, $position, $password, $user_role)) {
            echo "User registered successfully.";
        } else {
            echo "Failed to register user.";
        }
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



    <div class="com-o">


        <header class="headd">

            <h2>Register </h2>
            <a href="index_page.php"><button type="button" value="Go back "> <i class="fa-solid fa-arrow-left"></i> Go
                    back</button> </a>
        </header>









        <div class="user_info">

            <form action="user_details.php" method="POST"> <!-- Start of the form -->

                <h2>Register User</h2>
                <input type="text" id="user-name" name="user_name" placeholder="User name"><br>
                <input type="text" id="position" name="position" placeholder="Position"><br>
                <input type="password" id="password" name="password" placeholder="Password"><br>
                <label for="user_role">User Role:</label>
                <select id="user_role" name="user_role">
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                </select><br>

                <div class="info_button_new_user">
                    <button type="submit" name="register">New User</button>
                    <button type="button">Add</button>
                </div>

            </form>


        </div>









    </div>










</body>

</html>