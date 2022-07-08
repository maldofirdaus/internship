<?php

header('Content-Type: application/json');

$data = [
    'name' => htmlspecialchars($_POST['name']),
    'banyak' => htmlspecialchars($_POST['banyak']),
];

$response = [
    'response' => null
];
for ($i = 1; $i <= $data['banyak']; $i++) {
    $response['response'][] = [
        'hasil' => $data['name'] . " $i"
    ];
}
echo json_encode($response);