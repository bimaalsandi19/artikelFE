<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_GET['id'];
    $ch = curl_init("http://127.0.0.1:8000/api/delete/{$id}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');

    $response = curl_exec($ch);
    curl_close($ch);

    $responseData = json_decode($response, true);
    echo $responseData['message'];
    header("location:index.php");     
// }
// echo $id;      
?>