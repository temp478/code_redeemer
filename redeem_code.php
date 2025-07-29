<?php
// Very basic, for demonstration only! Secure as needed.
$code = $_GET['code'] ?? '';
$code = trim($code);
if ($code) {
    file_put_contents('redeemed.txt', $code . "\n", FILE_APPEND | LOCK_EX);
    echo "OK";
} else {
    http_response_code(400);
    echo "No code";
}
?>