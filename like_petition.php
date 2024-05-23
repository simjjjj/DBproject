<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['like_petition'])) {
    $petitionId = $_POST['petition_id'];
    $userId = $_SESSION['userid'];

    // 사용자가 이미 좋아요를 눌렀는지 확인
    $check_like_query = "SELECT * FROM likes WHERE user_id = $userId AND petition_id = $petitionId";
    $result = $con->query($check_like_query);

    if ($result->num_rows == 0) {
        // 좋아요 추가
        $con->query("INSERT INTO likes (user_id, petition_id) VALUES ($userId, $petitionId)");

        // 현재 좋아요 수 가져오기
        $result = $con->query("SELECT COUNT(*) as like_count FROM likes WHERE petition_id = $petitionId");
        $row = $result->fetch_assoc();
        $like_count = $row['like_count'];

        // 좋아요 수 업데이트
        $con->query("UPDATE petitions SET likes = $like_count WHERE id = $petitionId");

        // 좋아요 수가 10명을 넘으면 인기 청원 게시판으로 이동
        if ($like_count >= 10) {
            $con->query("UPDATE petitions SET is_popular = 1 WHERE id = $petitionId");
        }

        echo "Likes updated successfully.";
    } else {
        echo "You have already liked this petition.";
    }
}
?>
