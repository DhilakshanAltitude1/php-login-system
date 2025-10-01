<?php
require 'config.php';

$sql = "SELECT COUNT(*) as cnt FROM users";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo "DB OK — users table row count: " . $row['cnt'];
} else {
    echo "DB test failed: " . mysqli_error($conn);
}
