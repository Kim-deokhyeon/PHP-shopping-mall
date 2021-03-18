
<html>
	<head>
		<title> 공급자 </title>
	<head/>
   <?php 
			session_start();
			
			$connect = mysqli_connect('localhost','root');
			$db = mysqli_select_db($connect, 'bookstore_db');
			
			if($_SESSION['PERMISSION']!='publisher'){
				?>
			<script type ="text/javascript">
				alter("권한이 없습니다.");
				document.location.href="Login.php";
				
		 
			</script>
			<?php
			exit;
			}else{?>
<body>
				<center><h1>공급자 로그인</h1></center>

		<br><hr><br>
		<table border = 0 width=600>
			<tr>
				<td align = center width=300>
				<input type = "button"  value = " ◀재고 공급▶ " onClick="location.href='bookSupply.php'"> 
				</td>
				<td align = center>
				<input type = "submit" value = " ◀만족도 조사 참여▶ " onClick="location.href='Survey.php'"> 
				</td>
			</tr>
		</table>
				
				</body></html>
				<?php

			}
			
			
			?>
		</tr>
		</table><br>
      
		</form>
	</body>
</html>
