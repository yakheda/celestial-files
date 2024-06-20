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
    // Ваша логика проверки данных, например:
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

echo json_encode($response);
?>
