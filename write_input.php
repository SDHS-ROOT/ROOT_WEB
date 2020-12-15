<!-- 글 쓰기 후 데이터 입력 페이지 -->
<?php
    include $_SERVER['DOCUMENT_ROOT']."/ROOT_WEB/db.php";

    // 각 변수에 write.php에서 input name값들을 저장
    // $userclass = $_POST['class'];
    // if($userclass == 1) { // $userclass가 1이면(True) 관리자 권한. 즉, 공지글

    // }
    // else { // 1이 아닌 값이라면 일반 사용자. 즉, 문의/질문글

    // }
    $author = $_POST['author'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date('Y-m-d');
    if($author && $title && $content) {
        $sql = mq("insert into board(title, author, content, date) values('".$title."','".$author."','".$content."','".$date."')");
        // $sql = mq("insert into board(class, title, author, content, date) values('".$userclass."','".$title."','".$author."','".$content."','".$date."')");
        echo "<script>
        alert('글쓰기 완료되었습니다.');
        location.href='/';</script>";
    }
    else {
        echo "<script>
        alert('글쓰기에 실패했습니다.');
        history.back(); </script>";
        // history.back() = 이전 페이지로 이동
    }
?>