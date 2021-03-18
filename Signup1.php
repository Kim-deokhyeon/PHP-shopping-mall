
<html>
	<head>
		<title> 회원가입 완료 </title>
	<head/>
	<?php
	
	$connect = mysqli_connect('localhost','root');
	$db = mysqli_select_db($connect, 'bookstore_db');
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$nick = $_POST['nick'];
	$pw = $_POST['pw1'];
	$p1  = $_POST['p1'];
	$p2 = $_POST['p2'];
	$p3 = $_POST['p3'];
	$p=$p1."-".$p2."-".$p3;
	$birth = $_POST['birth'];
	$sex = $_POST['sex'];
	$subcheck = $_POST['subcheck'];
	$addr = $_POST['addr'];
	$category = $_POST['category'];
	
	$sql = "SELECT * from member where memberId like '{$_POST['id']}'";
	$result = mysqli_query ($connect, $sql);	
	$row = mysqli_fetch_array($result);
	if($row){
		?>
		<script type ="text/javascript">
		var go;
         go=confirm("이미 존재하는 이메일 입니다");
		 if(go){
         document.location.href="Signup.php";
		 }
		 
		</script>
		<?php
		exit;
	}
	
	$sql="SELECT count(*) as cnt from member";
	$result=mysqli_query($connect, $sql);
	$row = mysqli_fetch_array($result);
	if(!$row){
		$memberNo=1;
	}
	else{$memberNo=$row["cnt"] +1;}

	$sql = "INSERT INTO member VALUES";
	$sql = $sql."('$memberNo','$name','$nick','$pw','$birth','$p','$id','$sex','$addr','$category','$subcheck');";
	mysqli_query($connect, $sql);
	mysqli_close($connect);
	?>           
      
	<script type ="text/javascript">
		var go;
         go=confirm("회원가입 성공!");
		 if(go){
         document.location.href="Login.php";
		 }
		 
	</script>
</html>
         
            



