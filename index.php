<!-- 게시글 메인 페이지 -->
<?php include $_SERVER['DOCUMENT_ROOT']."/ROOT_WEB/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <link rel="stylesheet" type="text/css" href="/ROOT_WEB/css/style.css" />
</head>
<body>
    <div id="board_area">
        <h1>자유게시판</h1>
        <h4>자유롭게 글을 쓸 수 있는 게시판입니다.</h4>
        <?php
            if(isset($_SESSION['userId'])) {
                echo "<h2>{$_SESSION['userId']} 님 환영합니다.</h2>";
        ?>
        <a href="/ROOT_WEB/logout.php"><input type="button" value="로그아웃" /></a>
        <?php
            }
            else {
               echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
            }
        ?>
        
        <table class="list-table">
            <thead>
                <tr>
                    <th width="70">번호</th>
                    <th width="150">분류</th>
                    <th width="500">제목</th>
                    <th width="120">글쓴이</th>
                    <th width="100">작성일</th>
                    <th width="100">조회수</th>
                </tr>
            </thead>
            <?php
                if(isset($_GET['page']))
                    $page = $_GET['page'];
                else // 처음 접속시에는 page값이 없기 때문에 현재 페이지는 1로 설정
                    $page = 1;
                // board 테이블에서 id를 기준으로 내림차순해서 5개까지 표시
                $sql = mq("select * from board");
                $row_num = mysqli_num_rows($sql); // 게시판 총 레코드 수
                $list = 5; // 한 페이지에 보여줄 글 개수
                $block_ct = 5; // 블록당 보여줄 페이지 개수

                $block_num = ceil($page / $block_ct); // 현재 페이지 블록 구하기
                $block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작 번호
                $block_end = $block_start + $block_ct - 1; // 블록 마지막 번호

                $total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
                if($block_end > $total_page) $block_end = $total_page; // 만약 블록의 마지막 번호가 페이지 수보다 많다면 마지막 번호는 페이지 수
                $start_num = ($page - 1) * $list;

                $sql2 = mq("select * from board order by id desc limit $start_num, $list");

                while($board = $sql2->fetch_array()) { // fetch_array() = 한 행식 패치하여 배열로 저장
                    // title 변수에 DB에서 가져온 title을 선택
                    $title=$board["title"];
                    if(strlen($title) > 30) {
                        // title이 30을 넘으면 ...표시
                        $title=str_replace($board["title"], mb_substr($board["title"], 0, 30, "utf-8")."...", $board["title"]);
                    }
            ?>
            <tbody>
                <tr>
                    <td width="70"><?php echo $board["id"]; ?></td>
                    <td width="100"><?php if($board["class"] == 0) { echo "문의"; } else { echo "공지"; } ?></td>
                    <td width="500"><a href="read.php?id=<?php echo $board["id"];?>"><?php echo $board["title"]; ?></a></td>
                    <td width="120"><?php echo $board["author"]; ?></td>
                    <td width="100"><?php echo $board["date"]; ?></td>
                    <td width="100"><?php echo $board["hit"]; ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
        <!-- 페이징 넘버 -->
        <div id="page_num">
            <ul>
                <?php
                    if($page <= 1) // 현재 페이지가 1이라면
                        {echo "<li class='fo_re'>[<<]</li>";} // 링크 불가
                    else {echo "<li><a href='?page=1'>[<<]</a></li>";} // 1번 페이지로 링크        
                    for($i = $block_start; $i <= $block_end; $i++) {
                        // 초기값을 블록의 시작번호를 조건으로 블록 시작 번호가 마지막 블록보다 작거나 같을 때까지 반복
                        if($page == $i) {echo "<li class='fo_re'>[$i]</li>";} // 현재 페이지 표시
                        else {echo "<li><a href='?page=$i'>[$i]</a></li>";}
                    }
                    if($page >= $total_page) {echo "<li class='fo_re'>[>>]</li>";} // 마지막 페이지 표시
                    else {echo "<li><a href='?page=$total_page'>[>>]</a></li>";} // 마지막 페이지로 링크

                ?>
            </ul>
        </div>
        <div id="write_btn">
                <a href="writer.php"><button>글쓰기</button></a>
        </div>
    </div>
</body>
</html>