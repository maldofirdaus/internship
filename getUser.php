<?php

header("Content-Type: AppLication/json");

$array = [
    'users' => [
        "name" => "Nyayu",
        "team" => "mds"
    ]
];

echo json_encode($array);
  