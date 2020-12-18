<?php
    include $_SERVER['DOCUMENT_ROOT']."/ROOT_WEB/db.php";

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $moti = $_POST['motivation'];
    $content = $_POST['content'];

    $sql = mq("insert into apply_member (name, phone, motivation, content) 
    values('".$name."','".$phone."','".$moti."','".$content."');");
?>
<meta charset="utf-8" />
<script type="text/javascript">alert('가입 신청되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/ROOT_WEB/동아리소개.html" />
