<?php
header('Content-Type: application/json');
require_once "/var/www/html/config/bootstrap.php";

global $entityManager;

// Получаем сырые данные JSON из тела запроса
$json = file_get_contents('php://input');

// Преобразуем JSON в ассоциативный массив
$data = json_decode($json, true);

$response = new \Entity\Response();

try {
    $response->setName($data["name"]);
    $response->setEmail($data["email"]);
    $response->setPhone($data["phone"]);
    $response->setPosition($data["position"]);
    $response->setResume($data["resume"]);

    $entityManager->persist($response);
    $r = $entityManager->flush();
    $result = [
        'status' => true
    ];
} catch (Exception $e) {
    $result = [
        'status' => false,
        'message' => $e->getMessage()
    ];
}


echo json_encode(['status' => true]);
die();