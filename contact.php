<?php
    include $_SERVER['DOCUMENT_ROOT']."/ROOT_WEB/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link rel="stylesheet" type="text/css" href="/ROOT_WEB/css/member.css" />
</head>
<body>
    <div id="login_box">
        <h1>로그인</h1>
        <form method="post" action="login_input.php">
            <table align="center" border="0" cellspacing="0" width="300">
                <tr>
                    <td width="130" colspan="1">
                        <input type="text" name="userId" class="inph">
                    </td>
                    <td rowspan="2" align="center" width="100">
                        <button type="submit" id="btn">로그인</button>
                    </td>
                </tr>
                <tr>
                    <td width="130" colspan="1">
                        <input type="password" name="userpw" class="inph">
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="3" class="mem">
                        <a href="member.php">회원가입 하시겠습니까?</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>