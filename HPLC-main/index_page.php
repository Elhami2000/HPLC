<?php
require_once 'functions/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["logout"])) {
    logoutUser(); // Call the logout function if the "logout" button is clicked
}
?>

<!DOCTYPE html>
<html>

<head>

    <title>HPLC</title>
    <script src="js/index.js"></script>

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
        <h2>HPLC COLUMN REGISTER</h2>
        <form method="POST">
            <button type="submit" name="logout" id="button_shfaq">Log out <i class="fa-solid fa-right-from-bracket"></i></button>
        </form>
    </header>







        <div class="together">


            <div class="position-2">


                <div class="search">
                    <p>Search by Column Name</p>
                    <input type="search" placeholder="Search by column name">
                </div>



                <div class="line-titler">

                    <p>Preview List</p>
                </div>
                <div class="title-diva">

                    <a href="preview_list.php"><input type="button" value="Preview list"></a>


                </div>


            </div>




            <div class="position-1">


                <div class="line-title">
                    <p>Register</p>
                </div>

                <div class="title-diva">
                    <!-- kjo u kane tek value: Performance check of HPLC column -->
                    <a href="divation_details.php"><input type="button" value="New column"></a>
                    </br>
                    <!-- kjo u kane tek value: Register of using HPLC column  -->
                    <a href="print_textarea.php"><input type="button" value="Column utilization register"></a>

                </div>

                <div class="line-title">

                    <p>Action</p>
                </div>
                <div class="title-diva">

                    <a href="user_details.php"><input type="button" value="Edit/add users"></a>
                </div>

            </div>





        </div>






    </div>









</body>

</html>