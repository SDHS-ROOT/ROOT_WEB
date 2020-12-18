<!-- 글 입력 페이지 -->
<?php include $_SERVER['DOCUMENT_ROOT']."/ROOT_WEB/db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <link rel="stylesheet" type="text/css" href="css/board.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
    <div id="board_write">
        <h1><a href="/ROOT_WEB/">자유게시판</a></h1>
        <h4>글을 작성하는 공간입니다.</h4>
        <div id="write_area">
            <form action="write_input.php" method="post">
                <!-- <div id="bt_class">
                    <input type="radio" name="class" value="공지">공지
                    <input type="radio" name="class" value="문의">문의
                </div> -->
                <div id="in_title">
                    <!-- required = 필수입력항목 설정 -->
                    <textarea name="title" id="utitle" cols="55" rows="1" placeholder="제목" maxlength="100" required></textarea>
                </div>
                <div class="wi_line"></div>
                <div id="in_author">
                    <textarea name="author" id="uauthor" cols="55" rows="1" readonly><?php echo $_SESSION['username']; ?></textarea>
                </div>
                <div class="wi_line"></div>
                <div id="in_content">
                    <textarea name="content" id="ucontent" placeholder="내용" required></textarea>
                </div>
                <div class="bt_se">
                    <button type="submit">글 작성</button>
                </div>
            </form>   
        </div>
    </div>
</body>
</html>