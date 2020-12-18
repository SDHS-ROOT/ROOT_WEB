<?php include $_SERVER['DOCUMENT_ROOT']."/ROOT_WEB/db.php" ?>
<!DOCTYPE html>
<html lang="kr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>게시판</title>
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            .pagination {
                display: inline-block;
                padding-left: 0;
                margin: 20px 0;
                list-style: none;
                border-radius: .25rem;
            }
    
            .pagination>li {
                display: inline;
            }
    
            .pagination a {
                float: left;
                padding: 6px 12px;
                margin-left: -1px;
                line-height: 1.6;
                color: #337ab7;
                text-decoration: none;
                background-color: #fff;
                border: 1px solid #ddd;
            }
            body{
                    background-attachment: fixed;
                    background-repeat: no-repeat;
                    background-size: cover;
                }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
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
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="member.html">회원가입</a></li></ul>
                </div>
            </div>
        </nav>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <div id="board_write" class="text-center">
            <p class="text-center font-weight-bold font-weight-bold" style="font-size: 40px;">게시판 작성</p>
            <div id="write_area">
                <form action="write_input.php" method="post">
                    <!-- <div id="bt_class">
                        <input type="radio" name="class" value="공지">공지
                        <input type="radio" name="class" value="문의">문의
                    </div> -->
                    <div id="in_title">
                        <!-- required = 필수입력항목 설정 -->
                        <textarea name="title" id="utitle" cols="55" rows="1" placeholder="제목" maxlength="100" required style="border-radius: 10px;"></textarea>
                    </div>
                    <br>
                    <div class="wi_line"></div>
                    <div id="in_author">
                        <textarea name="author" id="uauthor" cols="55" rows="1" readonly style="border-radius: 10px;"><?php echo $_SESSION['username']; ?></textarea>
                    </div>
                    <br>
                    <div class="wi_line"></div>
                    <div id="in_content">
                        <textarea name="content" id="ucontent" cols="55" rows="12" placeholder="내용" required style="border-radius: 10px;"></textarea>
                    </div>
                    <br>
                    <div class="bt_se">
                        <button class="btn btn-primary" type="submit">작성</button>
                    </div>                    
                </form>   
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/bg.js"></script>
    </body>
</html>
