<?php
// Add this at the top of your divation.php page
require_once 'functions/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["save"])) {
    $inputData = array(
        'date_of_receipt' => $_POST['date_of_receipt'],
        'serial_number' => $_POST['serial_number'],
        'column_dimension' => $_POST['column_dimension'],
        'internal_column_id' => $_POST['internal_column_id'],
        'column_make' => $_POST['column_make'],
        'register_by' => $_POST['register_by'],
        'position' => $_POST['position'],
        'date' => $_POST['date'],
        'time' => $_POST['time'],
        'comments' => $_POST['comments']
    );

    if (insertInputData($inputData)) {
        echo "Data inserted successfully!";
    } else {
        echo "Data insertion failed.";
    }
}
?>


<!DOCTYPE html>
<html>

<head>

    <title>HPLC</title>
    <script src="index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>
    <link rel="shortcut icon" href="imgs/teamspeak.svg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="divation-com-o">
        <div class="fa-head">
            <header class="headd">
                <h2>Create List </h2>
                <a href="index_page.php">
                    <button type="button"> <i class="fa-solid fa-arrow-left"></i> Go back</button>
                </a>
            </header>
        </div>

        <form action="divation_details.php" method="POST"> <!-- Start of the form -->

            <div class="title-head">
                <h5>Date of receipt: <span id="title-date"><input type="date" name="date_of_receipt"></span></h5>
            </div>

            <!-- Pjesa e dyte -->
            <div class="divation-no">
                <div class="divation_number_class">
                    <h5>Serial Number: <span id="divation-number"><input type="text" name="serial_number"></span></h5>
                </div>
                <div class="divation-category">
                    <h5>Column Dimension: <span id="divation-number"><input type="text" name="column_dimension"></span>
                    </h5>
                </div>
            </div>

            <!-- Pjesa e pare -->
            <div class="divation-nu">
                <div class="divation_serialn_internal">
                    <h5>Internal Column ID: <span id="divation-number"><input type="text"
                                name="internal_column_id"></span></h5>
                </div>
                <div class="divation_column_make">
                    <h5>Make: <span id="divation-number"><input type="text" name="column_make"></span></h5>
                </div>
            </div>

            <div class="info_button_add">
                <!-- Input fields with labels and input elements -->
                <label for="register-by" class="label">Register by: <input type="text" id="register-by"
                        name="register_by"></label>
                <label for="position" class="label">Position: <input type="text" id="position" name="position"
                        list="position-suggestions"></label>
                <datalist id="position-suggestions">
                    <option value="Analyst">
                    <option value="Scientist">
                    <option value="Senior Scientist">
                    <option value="Principal Scientist">
                    <option value="Manager">
                </datalist>
                <label for="date" class="label">Date: <input type="date" id="date" name="date"></label>
                <label for="time" class="label">Time: <input type="time" id="time" name="time"></label>
                <label for="comments" class="label">Comments: <input type="text" id="comments" name="comments"></label>
                
            </div>
            <button id="id_button" type="submit" name="save">Save</button>
        </form> <!-- End of the form -->
    </div>
</body>

</html>