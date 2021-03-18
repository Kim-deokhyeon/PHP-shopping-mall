
<html>
	<head>
		<title> 업체등록 완료 </title>
	<head/>
	<?php
	
	$connect = mysqli_connect('localhost','root');
	$db = mysqli_select_db($connect, 'bookstore_db');
	
	$publisherId = $_POST['publisherId'];
	$publisherName = $_POST['publisherName'];
	$Field4 = $_POST['Field4'];
	$p1  = $_POST['p1'];
	$p2 = $_POST['p2'];
	$p3 = $_POST['p3'];
	$publisherTel=$p1."-".$p2."-".$p3;
	$publisherAdd = $_POST['publisherAdd'];

	
	$sql = "SELECT * from PUBLISHER where publisherId like '{$_POST['publisherId']}'";
	$result = mysqli_query ($connect, $sql);	
	$row = mysqli_fetch_array($result);
	if($row){
		echo "<HTML><body>
		
		<table border = 0 width=800>
			<tr><td colspan = 3 align = center><h2> 이미 존재하는 출판사 입니다.  </h2></td></tr>
			<tr>
				
				<td align = center>
				<input type=\"button\" value=\"◀ 돌아가기 ▶\" onClick=\"Login1.href='Signup.php'\">
				</td>
			</tr>
		</table>
		</body>";
		exit;
	}
	
	$sql = "INSERT INTO PUBLISHER VALUES";
	$sql = $sql."('$publisherId','$publisherName','$Field4','$publisherTel','$publisherAdd','0');";
	mysqli_query($connect, $sql);
	mysqli_close($connect);
	echo "<html><center><h2><b>업체등록 완료</b></h2></center><br></html>";
	?>           
      
	<body>
		<table border = 0 width=800>
			<tr>
				<td align = center>
				<input type = "button" value = " ◀ 로그인 ▶" onClick="location.href='Login.php'"> 
				</td>
				<td align = center>
				<input type="button" value="◀ 돌아가기 ▶" onClick="location.href='Publisher.php'">
				</td>
			</tr>
		</table>
	</body>
</html>
         
            



