<?php
	session_start();
?>
<html>
	<head>
		<title> 설문 조사 완료 </title>
	<head/>
	<?php
	if($_SESSION['PERMISSION'] != 'publisher'){
		echo "권한이 없습니다.";
		exit;
	}
	$connect = mysqli_connect('localhost','root');
	$db = mysqli_select_db($connect, 'bookstore_db');
	
	$question1 = $_POST['question1'];
	$question2 = $_POST['question2'];
	$question3 = $_POST['question3'];
	$question = ceil(($question1+$question2+$question3)/3);
	$opinion = $_POST['opinion'];

	$sql = "INSERT INTO publishersatisfaction VALUES";
	$sql = $sql."('{$_SESSION['PW']}','$question1','$question2','$question3','$opinion');";
	mysqli_query($connect, $sql);

	$sql = "UPDATE publisher SET pubsliherSatis = '$question' where publisherId like '{$_SESSION['PW']}'";
	mysqli_query($connect, $sql);
	mysqli_close($connect);
	echo "<html><center><h2><b>설문 조사 완료</b></h2></center><br></html>";
	?>           
      
	<body>
		<table border = 0 width=800>
			<tr>
				<td align = center>
				<input type="button" value="◀ 돌아가기 ▶" onClick="location.href='Login1.php'">
				</td>
			</tr>
		</table>
	</body>
</html>
         
            



