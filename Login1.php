
<html>
	<head>
		<title> 로그인 </title>
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
			
			
			
			$sql="SELECT count(*) as cnt from BUYLIST";

			$result=mysqli_query($connect, $sql);
			$row = mysqli_fetch_array($result);
			if(!$row){
				$_SESSION['CARTNO']=0;
			}
			else{
			$_SESSION['CARTNO']=$row["cnt"] +1;
			}
			
			
			$sql = "SELECT * from admin_tb where adminId like '{$_POST['id']}' and adminPw like '{$_POST['pw']}' ";
			$result = mysqli_query ($connect, $sql);
			$row = mysqli_fetch_array($result);
			if($row){
				$_SESSION['ID'] = $row["adminId"];
				$_SESSION['PW'] = $row["adminPw"];
				$_SESSION['NAME'] = '관리자';
				$_SESSION['PERMISSION'] = 'admin';
				
				
				?>
			<script type ="text/javascript">
				var go;
				go=confirm("관리자 로그인 성공!");
				if(go){
				document.location.href="Admin.php";
				}
		 
			</script>
			<?php
				
				exit;
			}

			$sql = "SELECT * from publisher where publisherName like '{$_POST['id']}' and publisherId like '{$_POST['pw']}' ";
			$result = mysqli_query ($connect, $sql);
			$row = mysqli_fetch_array($result);
			if($row){
				$_SESSION['ID'] = $row["publisherName"];
				$_SESSION['PW'] = $row["publisherId"];
				$_SESSION['NAME'] = $row["Field4"];
				$_SESSION['PERMISSION'] = 'publisher';
				?>
			<script type ="text/javascript">
				var go;
				go=confirm("공급자 로그인 성공!");
				if(go){
				document.location.href="Publisher_login.php";
				}
		 
			</script>
			<?php
				
				exit;
			}
			
			
			$row = mysqli_fetch_array($result);
			$sql = "SELECT * from member where memberId like '{$_POST['id']}' and memberPw like '{$_POST['pw']}' ";
			$result = mysqli_query ($connect, $sql);
		
			
			$row = mysqli_fetch_array($result);
			if(!$row){
				?>
				<script type ="text/javascript">
		var go;
         go=confirm("로그인에 실패하셨습니다.");
		 if(go){
         document.location.href="Login.php";
		 }
		 
		</script>
				<?php
				exit;
			}
			
			$id = $row["memberId"];
			$pw = $row["memberPw"];
			$name = $row["memberName"];
			$no=$row['memberNo'];
			$_SESSION['ID'] = $id;
			$_SESSION['PW'] = $pw;
			$_SESSION['NAME'] = $name;
			$_SESSION['MEMBERNO']=$no;
			$_SESSION['PERMISSION'] = 'guest';
			
			mysqli_close($connect);
			?>
			<script type ="text/javascript">
		var go;
         go=confirm("로그인 성공!");
		 if(go){
         document.location.href="Mainhome.php";
		 }
		 
		</script>
	
		</tr>
		</table><br>
      
		</form>
	</body>
</html>
