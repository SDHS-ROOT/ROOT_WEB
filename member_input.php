<?php
    include $_SERVER['DOCUMENT_ROOT']."/ROOT_WEB/db.php";

    $userId = $_POST['userId'];
    $userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
    $userName = $_POST['name'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $email = $_POST['email'].'@'.$_POST['emadress'];

    $sql = mq("insert into member(id, password, name, phone, gender, email) values('".$userId."',
    '".$userpw."','".$username."','".$phone."','".$gender."','".$email."');");
?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/ROOT_WEB/index.php" />
