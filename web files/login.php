<?php
header('Content-Type: application/json');

$username = isset($_GET['username']) ? $_GET['username'] : '';
$password = isset($_GET['password']) ? $_GET['password'] : '';
$hwid = isset($_GET['hwid']) ? $_GET['hwid'] : '';

$response = [
    'status' => 'error',
    'message' => 'Invalid request'
];

if (!empty($username) && !empty($password) && !empty($hwid)) {
    // Подключение к базе данных (пример)
    // $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка соединения
    // if ($conn->connect_error) {
    //    die("Connection failed: " . $conn->connect_error);
    // }

    // Здесь нужно выполнить проверку имени пользователя, пароля и HWID
    // Например:
    // $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND hwid='$hwid'";
    // $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //    // Пользователь найден, успешная аутентификация
    //    $response['status'] = 'success';
    //    $response['message'] = 'Login successful';
    //    $response['data'] = [
    //        'username' => $username,
    //        'token' => 'some_generated_token'
    //    ];
    // } else {
    //    $response['status'] = 'error';
    //    $response['message'] = 'Invalid username, password or HWID';
    // }

    // Пример без базы данных
    if ($username === 'your_username' && $password === 'your_password' && $hwid === 'your_hwid') {
        $response['status'] = 'success';
        $response['message'] = 'Login successful';
        $response['data'] = [
            'username' => $username,
            'token' => 'some_generated_token'
        ];
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Invalid username, password or HWID';
    }
}

// Закрытие соединения с базой данных
// $conn->close();

echo json_encode($response);
?>
