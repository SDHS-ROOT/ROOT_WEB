<!-- 글 쓰기 후 데이터 입력 페이지 -->
<?php
    include $_SERVER['DOCUMENT_ROOT']."/ROOT_WEB/db.php";

    $author = $_SESSION['username'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $class = $_SESSION['class'];
    if($author && $title && $content) {
        $mqq = mq("alter table board auto_increment = 1"); // auto_increment 값 초기화
        // auto_increment 속성의 id는 primary key이기 때문에 값이 중복될 수 없음. 그래서 중복되지 않는 값을 찾아 그 값부터 시작하게 됨.

        $sql = mq("insert into board(class, title, author, content) values('".$class."','".$title."','".$author."','".$content."');");
        echo "<script>
        alert('글쓰기 완료되었습니다.');
        location.href='/ROOT_WEB/';</script>";
    }
    else {
        echo "<script>
        alert('글쓰기에 실패했습니다.');
        history.back(); </script>"; // history.back() = 이전 페이지로 이동
    }
?>