<?php

function OpenCon()
{
    $conn = mysqli_connect('localhost', 'sergio', 'test1234', 'bleach');

    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    } else {
        // echo 'connection succcess';
        return $conn;
    }
}
