<?php

if (isset($_GET['key']) && $_GET['key'] == "rahasia") {
    header('content-Disposition: attachment; filename="profile.html"');
    header('Content-Type : image/png');
    readfile(__DIR__ . '/FILE/unnamed.png');
    exit();
} else {
    echo "INVALID KEY";
}
