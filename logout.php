<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logout'])) {
    session_start();
    session_destroy();
    $_SESSION['message'] = "성공적으로 로그아웃되었습니다.";
    header("Location: index.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
