<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    $status = $_POST['status'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];

    $data = [
        'title' => $title,
        'content' => $content,
        'category' => $category,
        'status' => $status,
        'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];

    $ch = curl_init('http://localhost:8000/api/add');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

    $response = curl_exec($ch);
    curl_close($ch);

    $responseData = json_decode($response, true);
    if ($responseData['code'] === 200) {
        echo $responseData['message'];
    } else {
        echo $responseData['message'];
    }
} else {
    echo "Invalid request method.";
}
header("location:index.php");
?>