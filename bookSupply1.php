
<html>
	<head>
		<title> 재고 입고 완료 </title>
	<head/>
	<?php
	session_start();
	if($_SESSION['PERMISSION'] != 'publisher'){
		echo "권한이 없습니다.";
		exit;
	}
	$connect = mysqli_connect('localhost','root');
	$db = mysqli_select_db($connect, 'bookstore_db');	
	
	$sql = "SELECT * from BOOK where bookNo like '{$_POST['bookNo']}'";
	$result = mysqli_query ($connect, $sql);	
	$row = mysqli_fetch_array($result);

	$bookAmount = $_POST['Field']+$row['Field'];
	
	$sql = "UPDATE BOOK SET Field=$bookAmount where bookNo like '{$_POST['bookNo']}'";
	mysqli_query($connect, $sql);
	mysqli_close($connect);
	echo "<html><center><h2><b>재고 입고 완료</b></h2></center><br></html>";
	?>           
      
	<body>
		<table border = 0 width=800>
			<tr>
				<td align = center>
				<input type = "button" value = " ◀ 추가등록 ▶" onClick="location.href='bookSupply.php'"> 
				</td>
				<td align = center>
				<input type="button" value="◀ 돌아가기 ▶" onClick="location.href='Login1.php'">
				</td>
			</tr>
		</table>
	</body>
</html>       