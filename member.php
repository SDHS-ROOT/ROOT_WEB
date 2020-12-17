<?php
    include $_SERVER['DOCUMENT_ROOT']."/ROOT_WEB/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <form action="member_input.php" method="post">
        <h1>회원가입</h1>
        <fieldset>
            <legend>입력사항</legend>
            <table>
                <tr>
                    <td>아이디</td>
                    <td><input type="text" size="35" name="userId" autocomplete="off" placeholder="아이디"></td>
                </tr>
                <tr>
                    <td>비밀번호</td>
                    <td><input type="password" size="35" name="userpw" autocomplete="off" placeholder="비밀번호"></td>
                </tr>
                <tr>
                    <td>이름</td>
                    <td><input type="text" size="35" name="name" autocomplete="off" placeholder="이름"></td>
                </tr>
                <tr>
                    <td>전화번호</td>
                    <td><input type="text" size="35" name="phone" autocomplete="off" placeholder="전화번호"></td>
                </tr>
                <tr>
                    <td>성별</td>
                    <td>남<input type="radio" name="gender" value="남">
                    여<input type="radio" name="gender" value="여"></td>
                </tr>
                <tr>
                    <td>이메일</td>
                    <td><input type="text" name="email" autocomplete="off">@<select name="emadress">
                        <option value="naver.com">naver.com</option>
                        <option value="nate.com">nate.com</option>
                        <option value="hanmail.com">hanmail.com</option></select>
                    </td>
                </tr>
            </table>
            <input type="submit" value="가입하기" /><input type="reset" value="다시쓰기" />
        </fieldset>
    </form>
</body>
</html>