
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
    
    $sql = "SELECT * from member where memberId like '{$_SESSION['ID']}'";
   $result = mysqli_query ($connect, $sql);
   $row = mysqli_fetch_array($result);
   $feedNo;
   $memberNo = $row['memberNo'];
   $bookNo = $_SESSION['BOOKNO'];
    $review = $_POST['review'];
    $privacy = $_POST['privacy'];
   $reviewDate = date("Y-M-D h:m");
    $grade = $_POST['grade'];

   $sql = "INSERT INTO review_sns VALUES";
   $sql = $sql."('','$memberNo','$bookNo','$review','$privacy','$reviewDate','$grade');";
   mysqli_query($connect, $sql);
   mysqli_close($connect);
   echo "<html><center><h2><b>리뷰 작성 완료</b><br>
   <input type = \"button\" value = \" ◀ 돌아가기 ▶\" onClick=\"location.href=' review_total.php'\">
   </h2></center><br></html>";
   ?>
    </body>

</html>