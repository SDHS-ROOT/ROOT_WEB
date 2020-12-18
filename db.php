<!-- db 연결 -->
<?php
    session_start();
    header('Content-Type: text/html; charset=utf-8'); // utf-8 인코딩

    // localhost = DB 주소, DB계정아이디, DB계정 비밀번호, DB이름
    $db = new mysqli("localhost", "rootWeb", "iloveminseong", "root_board");
    $db->set_charset("utf8");

    function mq($sql) {
        global $db;
        return $db->query($sql);
    }
?>