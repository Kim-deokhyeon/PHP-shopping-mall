
<html>
	<body>
		<h1>MySQL 접속해서 데이터 가져오기</h1>
		<?php 
		$connect = mysqli_connect('localhost','root');
		$db = mysqli_select_db($connect, 'member_db');

		$sql = "SELECT * from member where ID ='kmk007'";
		$result = mysqli_query ($connect, $sql);
		if (!$result) {
        echo 'MySQL Error'. mysqli_error(); 
        exit;
		}
		while($row = mysqli_fetch_array($result)){
			echo $row["PW"];
		}
		

		mysqli_close($connect);
		?>
	</body>
</html>