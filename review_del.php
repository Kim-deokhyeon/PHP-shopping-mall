
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    
    <body>
    <?php
    session_start();
    $connect = mysqli_connect('localhost','root');
    $db = mysqli_select_db($connect, 'bookstore_db');

    $sql = "DELETE FROM review_sns WHERE feedNo='{$_SESSION['FEEDNO']}'";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    echo "<html><center><h2><b>리뷰 제거 완료</b><br>
    <input type = \"button\" value = \" ◀ 돌아가기 ▶\" onClick=\"location.href=' review_total.php'\">
    </h2></center><br></html>";
    ?>
    </body>

</html>