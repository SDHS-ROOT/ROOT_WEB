<?php
    include $_SERVER['DOCUMENT_ROOT']."/ROOT_WEB/db.php";

    $count = 0;
    $userId = $_POST['userId'];
    $userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
    $username = $_POST['name'];
    if(isset($_POST['phone'])) {
        $phone = $_POST['phone'];
        $count++;
    }        
    if(isset($_POST['gender'])) {
        $gender = $_POST['gender'];
        $count++;
    }
    if(isset($_POST['email'])) {
        $email = $_POST['email'].'@'.$_POST['emadress'];
        $count++;
    }

    switch($count) {
        case 1:
            $sql = mq("insert into member(id, password, name, phone values('".$userId."'
            ,'".$userpw."','".$username."','".$phone."');");
            break;
        case 2:
            $sql = mq("insert into member(id, password, name, phone, gender) values('".$userId."',
            '".$userpw."','".$username."','".$phone."','".$gender."');");
            break;
        case 3:
            $sql = mq("insert into member(id, password, name, phone, gender, email) values('".$userId."',
            '".$userpw."','".$username."','".$phone."','".$gender."','".$email."');");
            break;
        default:
        $sql = mq("insert into member(id, password, name) values('".$userId."',
        '".$userpw."','".$username."');");
    }
?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/ROOT_WEB/contact.php" />
