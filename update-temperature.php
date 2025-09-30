<?php
if (isset($_GET['temperature'])) {
    $temperature = $_GET['temperature'];
    file_put_contents("latest_temp.txt", $temperature);
    echo "OK";
}
?>
