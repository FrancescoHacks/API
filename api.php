<?php

require_once("connect.php");
if ($_SERVER['PATH_INFO'] == '/movies') {
    $movies = get_movies();
    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 200,
        'message' => 'method allowed by La Pera',
        'playload' => $movies
    ]);
}


if ($_SERVER['PATH_INFO'] == '/actors') {
    $actors = get_actors();
    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 200,
        'message' => 'method allowed by La Pera',
        'playload' => $actors
    ]);
}


if ($_SERVER['PATH_INFO'] == '/directors') {
    $directors = get_directors();
    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 200,
        'message' => 'method allowed by La Pera',
        'playload' => $directors
    ]);
}


if ($_SERVER['PATH_INFO'] == '/genres') {
    $genres = get_genres();
    http_response_code(200);
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 200,
        'message' => 'method allowed by La Pera',
        'playload' => $genres
    ]);
}



exit;

?>