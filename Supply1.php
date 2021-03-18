
<html>
	<head>
		<title> 책 등록 완료 </title>
	<head/>
	<?php
	session_start();
	if($_SESSION['PERMISSION'] != 'admin'){
		echo "권한이 없습니다.";
		exit;
	}
	
	$connect = mysqli_connect('localhost','root');
	$db = mysqli_select_db($connect, 'bookstore_db');
	
	$bookName = $_POST['bookName'];
	$bookWriter = $_POST['bookWriter'];
	$bookPublisher = $_POST['bookPublisher'];
	$publishingYear = $_POST['publishingYear'];
	$bookContent  = $_POST['bookContent'];
	$category = $_POST['category'];
	$bookNo = $_POST['bookNo'];
	$price = $_POST['price'];
	$Field = $_POST['Field'];
	
	$sql = "SELECT * from BOOK where bookNo like '{$_POST['bookNo']}'  ";
	$result = mysqli_query ($connect, $sql);	
	$row = mysqli_fetch_array($result);
	if($row){
		
		?>
		<script type ="text/javascript">
		var go;
         go=confirm("이미 존재하는 책입니다.");
		 if(go){
         document.location.href="Supply.php";
		 }
		 
		</script>
		<?php
		exit;
	}
	
	

	$sql = "INSERT INTO BOOK VALUES";
	$sql = $sql."('$bookNo','$bookName','$bookWriter','$bookPublisher','$publishingYear','$bookContent','$category',0,'$price',0);";
	mysqli_query($connect, $sql);
	mysqli_close($connect);
	
	?>           
      
	<script type ="text/javascript">
		var go;
         go=confirm("책 등록 성공!!.");
		 if(go){
         document.location.href="Supply.php";
		 }
		 
		</script>
</html>
         
            



