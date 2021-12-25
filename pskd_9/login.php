<?php
require_once('./vendor/autoload.php');

use Firebase\JWT\JWT;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

header('Content-Type: applivation/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit();
}
$json = file_get_contents('php://input');

$input = json_decode($json);

if (!isset($input->email) || !isset($input->password)) {
    http_response_code(400);
}

$user = [
    'author' => 'regita cahya',
    'email' => 'regitacahyawulan@student.uns.ac.id',
    'password' => 'Regita20',
    'username' => 'Regita Cahya',
];

if ($input->author !== $user['author'] || $input->email !== $user['email'] || $input->username !== $user['username'] || $input->password !== $user['password']) {
    echo json_encode([
        'message' => 'Data belum sesuai'
    ]);
    exit();
}



$expired_time = time() + (15 * 60);

$payload = [
    'email' => $input->email,
    'exp' => $expired_time
];

$access_token = JWT::encode($payload, $_ENV['ACCESS_TOKEN_SECRET']);
echo json_encode([
    'accessToken' => $access_token,
    'expiry' => date(DATE_ISO8601, $expired_time)
]);

$payload['exp'] = time() + (60 * 60);
$refresh_token = JWT::encode($payload, $_ENV['REFRESH_TOKEN_SECRET']);

setcookie('refreshToken', $refresh_token, $payload['exp'], '', '', false, true);
