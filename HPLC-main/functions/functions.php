<?php
session_start();
$dbconn;
dbConnection();
function dbConnection()
{
    global $dbconn;
    $dbconn = mysqli_connect("localhost", 'root', '', 'hplc');
    if (!$dbconn) {
        die("Deshtoi lidhja me DB" . mysqli_error($dbconn));
    }
}

function registerUsers($username, $password, $position, $role)
{
    global $dbconn;

    $query = "INSERT INTO users (username, password, position, role) VALUES ('$username', '$password', '$position', '$role')";

    if (mysqli_query($dbconn, $query)) {
        return true; // Registration successful
    } else {
        return false; // Registration failed
    }
}

function loginUser($username, $password) {
    global $dbconn;

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' LIMIT 1";
    $result = mysqli_query($dbconn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        return true; // Login successful
    } else {
        return false; // Login failed
    }
}

function logoutUser() {
    session_start();
    session_destroy();
    header("Location: login.php"); // Redirect to login page after logout
    exit();
}

function insertInputData($data) {
    global $dbconn;

    $query = "INSERT INTO divation_details (date_of_receipt, serial_number, column_dimension, internal_column_id, column_make, register_by, position, date, time, comments)
              VALUES ('$data[date_of_receipt]', '$data[serial_number]', '$data[column_dimension]', '$data[internal_column_id]', '$data[column_make]', '$data[register_by]', '$data[position]', '$data[date]', '$data[time]', '$data[comments]')";

    if (mysqli_query($dbconn, $query)) {
        return true; // Insert successful
    } else {
        return false; // Insert failed
    }
}

function insertPrintTextareaData($data) {
    global $dbconn;

    $query = "INSERT INTO print_textarea_data (sr_no, date, product_name, batch_no, test_performed, in_house_no, running_time, no_of_injections, cumulative_no_of_injection, analyzed_by)
              VALUES ('$data[sr_no]', '$data[date]', '$data[product_name]', '$data[batch_no]', '$data[test_performed]', '$data[in_house_no]', '$data[running_time]', '$data[no_of_injections]', '$data[cumulative_no_of_injection]', '$data[analyzed_by]')";

    if (mysqli_query($dbconn, $query)) {
        return true; // Insert successful
    } else {
        return false; // Insert failed
    }
}

function registerUser($username, $position, $password, $role) {
    global $dbconn;

    $query = "INSERT INTO users (username, position, password, role)
              VALUES ('$username', '$position', '$password', '$role')";

    if (mysqli_query($dbconn, $query)) {
        return true; // Insert successful
    } else {
        return false; // Insert failed
    }
}
?>