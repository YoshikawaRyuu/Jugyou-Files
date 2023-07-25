<?php
    session_start();
    $sessionName = $_SESSION['session_name'];
    echo "Session Name is ". $sessionName;
?>