<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "daily_log_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to add a new log
function addLog($job_type, $job_name, $start_time, $end_time, $status) {
    global $conn;
    $sql = "INSERT INTO daily_log (job_type, job_name, start_time, end_time, status) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $job_type, $job_name, $start_time, $end_time, $status);
    $stmt->execute();
    $stmt->close();
}

// Function to update an existing log
function updateLog($id, $job_type, $job_name, $start_time, $end_time, $status) {
    global $conn;
    $sql = "UPDATE daily_log SET job_type=?, job_name=?, start_time=?, end_time=?, status=?, updated_at=NOW() WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $job_type, $job_name, $start_time, $end_time, $status, $id);
    $stmt->execute();
    $stmt->close();
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        addLog($_POST['job_type'], $_POST['job_name'], $_POST['start_time'], $_POST['end_time'], $_POST['status']);
    } elseif (isset($_POST['update'])) {
        updateLog($_POST['id'], $_POST['job_type'], $_POST['job_name'], $_POST['start_time'], $_POST['end_time'], $_POST['status']);
    }
}

$conn->close();
?>
