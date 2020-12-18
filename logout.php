<?php
    include $_SERVER['DOCUMENT_ROOT']."/ROOT_WEB/db.php";
    session_destroy();
?>
<meta charset="utf-8">
<script>alert("로그아웃되었습니다."); location.href="/ROOT_WEB/contact.php"; </script>