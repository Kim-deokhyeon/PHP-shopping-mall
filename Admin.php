
<html>
	<head>
		<title> 관리자</title>
	<head/>
   
	<body>

      

		<center>
		<table border = 0 bordercolor = "blue" width=600 cellspacing =1 cellpadding=5>
		<tr>
         
			<td>
			
			<?php 
			session_start();
			
			$connect = mysqli_connect('localhost','root');
			$db = mysqli_select_db($connect, 'bookstore_db');
			
			if($_SESSION['PERMISSION']!='admin'){
				?>
			<script type ="text/javascript">
				alter("권한이 없습니다.");
				document.location.href="Login.php";
				
		 
			</script>
			<?php
			exit;
			}else{?>
			<html><body>
			<center><h1>관리자 로그인</h1></center>

		<br><hr><br>
		<table border = 0 width=600>
			<tr>
				<td align = center width =200> 
				<input type = "button"  value = " ◀재고관리▶ " onClick="location.href='Supply.php'"> 
				</td>
				<td align = center width =200>
				<input type = "submit" value = " ◀공급자관리▶ " onClick="location.href='Publisher.php'"> 
				</td>
				<td align = right width =200>
				<input type = "submit" value = " ◀공급자만족도조사 결과▶ " onClick="location.href='Survey_total.php'"> 
				</td>
			</tr>
		</table>
				
		</body></html>
				<?php
			
		}
		?>
