<?php
session_start();
$servername = "localhost";
$username = "btssio";
$password = "btssio";
$dbname = "series_tv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_POST['txtComment'])
{

    $rate = $_POST['hdnRateNumber'];
    $title = 'NULL';
    $comment = $_POST['txtComment'];
    $date = date('Y-m-d H:i:s');
    $pseudo = $_SESSION['username'];
    $sql = "INSERT INTO item_rating (rate_number,title,comment,created,pseudo) VALUES ('".$rate."', '".$title."', '".$comment."','".$date."','".$pseudo."')";

    if (mysqli_query($conn, $sql) === TRUE) {
        echo "success";
    } else {
        echo "error";
    }

}

?>