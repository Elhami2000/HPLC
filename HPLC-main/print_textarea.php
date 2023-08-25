<?php
require_once 'functions/functions.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['save'])) {
        $data = array(
            'sr_no' => $_POST['sr_no'],
            'date' => $_POST['date'],
            'product_name' => $_POST['product_name'],
            'batch_no' => $_POST['batch_no'],
            'test_performed' => $_POST['test_performed'],
            'in_house_no' => $_POST['in_house_no'],
            'running_time' => $_POST['running_time'],
            'no_of_injections' => $_POST['no_of_injections'],
            'cumulative_no_of_injection' => $_POST['cumulative_no_of_injection'],
            'analyzed_by' => $_POST['analyzed_by']
        );

        if (insertPrintTextareaData($data)) {
            echo "Data inserted successfully.";
        } else {
            echo "Failed to insert data.";
        }
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

    <div class="tabela-com-o">
        <header class="headd-textarea">

            <a href="index_page.php">
                <button type="button"> <i class="fa-solid fa-arrow-left"></i> Go back</button>
            </a>
        </header>



        <form action="print_textarea.php" method="POST"> <!-- Start of the form -->

        <div class="table-form-1">
            <label for="sr_no" class="label">SR No:<input type="text" id="sr_no" name="sr_no" required></label>
            <label for="date" class="label">Date:<input type="date" id="date" name="date" required></label>
            <label for="product_name" class="label">Product Name:<input type="text" id="product_name" name="product_name" required></label>
            <label for="batch_no" class="label">Batch No:<input type="text" id="batch_no" name="batch_no" required></label>
            <label for="test_performed" class="label">Test Performed:<input type="text" id="test_performed" name="test_performed" required></label>
        </div>

        <div class="table-form-2">
            <label for="in_house_no" class="label">In House No:<input type="text" id="in_house_no" name="in_house_no" required></label>
            <label for="running_time" class="label">Running Time:<input type="time" id="running_time" name="running_time" required></label>
            <label for="no_of_injections" class="label">No of Injections:<input type="text" id="no_of_injections" name="no_of_injections" required></label>
            <label for="cumulative_no_of_injection" class="label">Cumulative no of Injection:<input type="text" id="cumulative_no_of_injection" name="cumulative_no_of_injection" required></label>
            <label for="analyzed_by" class="label">Analyzed By:<input type="text" id="analyzed_by" name="analyzed_by" required></label>
        </div>

        <button id="id_button" type="submit" name="save">Save</button> <!-- Save button outside both divs -->

    </form>


    </div>
</body>

</html>