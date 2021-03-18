
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
	$review=$_POST['review'];
	$privacy=$_POST['privacy'];
	$grade=$_POST['grade'];
	$sql = "UPDATE review_sns SET review='{$_POST['review']}' where feedNo like '{$_SESSION['FEEDNO']}'";
	mysqli_query($connect, $sql);
	$sql = "UPDATE review_sns SET privacy='{$_POST['privacy']}' where feedNo like '{$_SESSION['FEEDNO']}'";
	mysqli_query($connect, $sql);
	$sql = "UPDATE review_sns SET grade=$grade where feedNo like '{$_SESSION['FEEDNO']}'";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
	echo "<html><center><h2><b>리뷰 수정 완료</b>
	<input type = \"button\" value = \" ◀ 돌아가기 ▶\" onClick=\"location.href=' review_total.php'\">
	</h2></center><br></html>";
   ?>
    </body>

</html>