<html>
	<head>
		<title> 로그인 </title>
	<head/>
   
	<body>
		<br><h2><center> 로그인 화면 </center> </h2><hr>
      

		<center>
		<table border = 1 bordercolor = "blue" width=600 cellspacing =1 cellpadding=5>
		<tr>
         
			<td>
			
			<?php 
			session_start();
			
			$connect = mysqli_connect('localhost','root');
			$db = mysqli_select_db($connect, 'member_db');

			$sql = "SELECT * from member where ID like '{$_POST['id']}' and PW like '{$_POST['pw']}' ";
			$result = mysqli_query ($connect, $sql);
		
			
			$row = mysqli_fetch_array($result);
			if(!$row){
				echo "로그인 실패";
				exit;
			}
			echo "로그인 성공<br>";
			$id = $row["ID"];
			$pw = $row["PW"];
			$name = $row["NAME"];

			$_SESSION['ID'] = $id;
			$_SESSION['PW'] = $pw;
			$_SESSION['NAME'] = $name;
			
			echo "세션 id는";
			echo $_SESSION['ID']." ";
			echo "세션 pw는 ";
			echo $_SESSION['PW']."";
			echo "세션 이름은 ";
			echo $_SESSION['NAME'];
			echo "입니다.";
			
			

			mysqli_close($connect);
			?>
		
			

		</tr>
      
      
		</table><br>
      
      
		</form>
	</body>
</html>
         


