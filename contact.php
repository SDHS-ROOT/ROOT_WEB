<?php
    include $_SERVER['DOCUMENT_ROOT']."/ROOT_WEB/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link rel="stylesheet" href="/ROOT_WEB/css/member.css" />
    <link rel="stylesheet" href="/ROOT_WEB/css/styles.css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->

</head>
<body>
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">ROOT</a>
            <!-- <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="동아리소개.html">동아리 소개</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="대회.html">대회</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">게시판</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="가입신청.html">가입신청</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="contact.php">로그인</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="member.html">회원가입</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="login_box">
        <h3>로그인</h3>
        <form method="post" action="login_input.php">
            <table align="center" border="0" cellspacing="0" width="300">
                <tr>
                    <td width="130" colspan="1">
                        <input type="text" name="userId" class="inph" autocomplete="off">
                    </td>
                    <td rowspan="2" align="center" width="100">
                        <button type="submit" id="btn">로그인</button>
                    </td>
                </tr>
                <tr>
                    <td width="130" colspan="1">
                        <input type="password" name="userpw" class="inph" autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="3" class="mem">
                        <br>
                        <a href="member.html">회원가입</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js%22%3E"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js%22%3E"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/bg.js"></script>
</body>
</html>