<!-- 게시글 수정 -->
<?php
    include $_SERVER['DOCUMENT_ROOT']."/ROOT_WEB/db.php";

    $bno = $_GET['id'];
    $sql = mq("select * from board where id='$bno';");
    $board = $sql->fetch_array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <link rel="stylesheet" href="css/board.css" />
</head>
<body>
    <div id="board_write">
        <h1><a href="/ROOT_WEB/">자유게시판</a></h1>
        <h4>글을 수정합니다.</h4>
        <div id="write_area">
            <form action="modify_input.php?id=<?php echo $bno; ?>" method="post">
                <div id="in_title">
                    <textarea name="title" id="utitle" cols="55" rows="1" autocomplete="off" placeholder="제목" maxlength="100" required><?php echo $board['title']; ?></textarea>
                </div>
                <div class="wi_line"></div>
                <div id="in_author">
                    <textarea name="author" id="uauthor" cols="55" rows="1" readonly><?php echo $_SESSION['username']; ?></textarea>
                </div>
                <div class="wi_line"></div>
                <div id="in_content">
                    <textarea name="content" id="ucontent"placeholder="내용" autocomplete="off" required><?php echo $board['content']; ?></textarea>
                </div>
                <div class="bt_se">
                    <button type="submit">수정</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>