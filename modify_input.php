<!-- 글 수정 후 데이터베이스에 입력 -->
<?php 
    include $_SERVER['DOCUMENT_ROOT']."/ROOT_WEB/db.php";

    $bno = $_GET['id'];
    $author = $_POST['author'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = mq("update board set author='".$author."', title='".$title."', content='".$content."' where id='".$bno."'");
?>

<script type="text/javascript">alert("수정되었습니다."); </script>
<meta http-equiv="refresh" content="0 url=read.php?id=<?php echo $bno; ?>" />