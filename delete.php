<!-- 글 삭제 페이지 -->
<?php
    include $_SERVER['DOCUMENT_ROOT']."/ROOT_WEB/db.php";

    $bno = $_GET['id'];
    $sql = mq("delete from board where id='$bno';");
?>

<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/ROOT_WEB/" />