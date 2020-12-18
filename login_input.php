<meta charset="utf-8">
<?php
    include $_SERVER['DOCUMENT_ROOT']."/ROOT_WEB/db.php";

    // POST로 받아온 아이디와 비밀번호가 비었다면 알림창을 띄우고 전 페이지로
    if($_POST["userId"] == "" || $_POST["userpw"] == "") {
        echo '<script> alert("아이디나 패스워드를 입력하세요"); history.back(); </script>';
    }
    else {
        // password 변수에 POST로 받아온 값을 저장하고 sql 문으로 POST로 받아온 아이디 값 검색
        $password = $_POST['userpw'];
        $sql = mq("select * from member where id='".$_POST['userId']."'");
        $member = $sql->fetch_array();
        $hash_pw = $member['password']; // $hash_pw에 POST로 받아온 아이디 열의 비밀번호를 저장

        if(password_verify($password, $hash_pw)) { // 만약 password변수와 hash_pw변수가 같다면 세션값을 저장하고 알림
            $_SESSION['userId'] = $member["id"];
            $_SESSION['userpw'] = $member["password"];
            $_SESSION['class'] = $member["class"];
            $_SESSION['username'] = $member["name"];

            echo "<script>alert('로그인되었습니다.'); location.href='/ROOT_WEB/notice.php';</script>";
        }
        else {
            echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.');
            history.back(); </script>";
        }
    }
?>