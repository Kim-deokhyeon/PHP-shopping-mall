
<html>
	<head>
		<title> 회원정보 수정 완료 </title>
	<head/>
	<body>
	<?php

	session_start();
    $connect = mysqli_connect('localhost','root');
    $db = mysqli_select_db($connect, 'bookstore_db');
	$sql = "UPDATE member SET memberNick='{$_POST['nick']}' where memberId like '{$_SESSION['ID']}'";
	mysqli_query($connect, $sql);
	$sql = "UPDATE member SET memberPw='{$_POST['pw1']}' where memberId like '{$_SESSION['ID']}'";
	mysqli_query($connect, $sql);
	
	$sql = "UPDATE member SET subcheck='{$_POST['subcheck']}' where memberId like '{$_SESSION['ID']}'";
	mysqli_query($connect, $sql);
	$sql = "UPDATE member SET memberAdd='{$_POST['addr']}' where memberId like '{$_SESSION['ID']}'";
	
	$p1 = $_POST['p1'];
	$p2 = $_POST['p2'];
	$p3 = $_POST['p3'];
	$p=$p1."-".$p2."-".$p3;
	$sql = "UPDATE member SET memberTel='$p' where memberId like '{$_SESSION['ID']}'";	
	mysqli_query($connect, $sql);
	mysqli_close($connect);

	?>
	<script>
	confirm("[정보수정성공] \n회원 정보가 수정되었습니다.");
	document.location.href="Mypage.php";
	</script>
    </body>
	
</html>
         
            



