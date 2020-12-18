<!-- 게시글 글 읽기 페이지 -->
<?php
    include $_SERVER['DOCUMENT_ROOT']."/ROOT_WEB/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <link rel="stylesheet" type="text/css" href="/ROOT_WEB/css/style.css">
</head>
<body>
    <?php
        $bno = $_GET['id']; /* bno 변수에 idx값을 받아와 삽입 */
        // $hit = mysqli_fetch_array(mq("select * from board where id ='".$bno."'"));
        $hit = mysqli_fetch_array(mq("select * from board where id = '".$bno."'"));
        $hit = $hit['hit'] + 1; // idx를 이용해 hit를 가져온 뒤 1증가. 가져올 때마다(글을 열람할 때마다) 조회수 1 증가
        $fet = mq("update board set hit = '".$hit."' where id = '".$bno."'"); // 증가시킨 조회수(hit)를 업데이트
        $sql = mq("select * from board where id='".$bno."'"); /* 받아온 id 값을 선택 */
        $board = $sql->fetch_array();
    ?>
    <!-- 글 불러오기 -->
    <div id="board_read">
        <h2><?php echo $board['title'] ?></h2>
        <div id="user_info">
            <?php echo $board['author']; ?> <?php echo $board['date']; ?> 조회:<?php echo $board['hit']; ?>
            <div id="bo_line"></div>
        </div>
        <div id="bo_content">
            <?php echo nl2br("$board[content]"); ?>
        </div>
        <!-- 목록, 수정, 삭제 -->
        <div id="bo_ser">
            <ul>
                <li><a href="/ROOT_WEB/">목록</a></li>
                <li><a href="modify.php?id=<?php echo $board['id']; ?>">[수정]</a></li>
                <li><a href="delete.php?id=<?php echo $board['id']; ?>">[삭제]</a></li>
            </ul>
        </div>
    </div>
</body>
</html>