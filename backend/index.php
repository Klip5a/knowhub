<?php
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
// header("Access-Control-Allow-Headers: Content-Type, Authorization");


// $host = getenv('DB_HOST');
// $db = getenv('DB_DATABASE');
// $user = getenv('DB_USERNAME');
// $password = getenv('DB_PASSWORD');

// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $pdo->query('SELECT * FROM users');
//     $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     echo json_encode($users);
// } catch (PDOException $e) {
//     echo json_encode(['error' => $e->getMessage()]);
// }
error_reporting(E_ALL);
ini_set('display_errors', 'on');

include 'code.php';

require 'db.php';

// Устанавливаем заголовки для API
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

// Чтение метода запроса
$method = $_SERVER['REQUEST_METHOD'];

// Обработка маршрутов и запросов
if () {

}



?>
