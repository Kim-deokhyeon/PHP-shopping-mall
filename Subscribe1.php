
<html>
	<head>
		<title> 구입 완료 </title>
	<head/>
	
	<?php
	
	$connect = mysqli_connect('localhost','root');
	$db = mysqli_select_db($connect, 'bookstore_db');
	
	$memberNo=$_SESSION['MEMBERNO'];
	$bookNo = $_POST['bookno'];
	
	$pre_month = strtotime('+1Months');  
	$purchaseDate = date("m/01/Y",$pre_month);
	$purchaseNO=90000+$_SESSION['CARTNO']; //정기 구매는 구별을 두기 위함



	$sql = "SELECT * from BOOK where bookNo like '{$bookNo}'";
	$result = mysqli_query ($connect, $sql);   
	$row = mysqli_fetch_array($result);
	$price = $row['price'];
	$q=$row['Field'];
	$q=$q-1;					
	$sql = "UPDATE BOOK SET Field='{$q}' where bookNo like '{$bookNo}'";
	
	mysqli_query($connect, $sql);
	$totalprice = $price;
	$sql = "INSERT INTO BUY VALUES";
	$sql = $sql."('$purchaseNO','$memberNo','{$bookNo}',1,'$price');";
	mysqli_query($connect, $sql);
	
		

	$sql="SELECT count(*) as cnt from DELIVERY";
	$result=mysqli_query($connect, $sql);
	$row = mysqli_fetch_array($result);
	if(!$row){
		$waybillNum=1;
	}
	else{$waybillNum=$row["cnt"] +1;}

	$sql = "INSERT INTO DELIVERY VALUES";
	$sql = $sql."('$waybillNum','$memberNo');";
	mysqli_query($connect, $sql);
	
	$sql = "INSERT INTO BUYLIST VALUES";
	$sql = $sql."('$purchaseNO','$memberNo','$waybillNum','$purchaseDate','$paymenthistory','$totalprice');";
	mysqli_query($connect, $sql);
	
	$sql="SELECT count(*) as cnt from BUYLIST";
	$result=mysqli_query($connect, $sql);
	$row = mysqli_fetch_array($result);
	if(!$row){
			$_SESSION['CARTNO']=0;
	}
	else{
			$_SESSION['CARTNO']=$row["cnt"] +1;
	}
	$_SESSION['CART']=array();
	mysqli_close($connect);

	?>           
     
	<body>
		<table border = 0 width=800>
			<tr>
				<td align = center>
				<input type="button" value="◀ 돌아가기 ▶" onClick="location.href='Mainhome.php'">
				</td>
				<td align = center>
				<input type = "button" value = " ◀ 마이페이지 ▶" onClick="location.href='Mypage.php'"> 
				</td>
				
			</tr>
		</table>
	</body>
</html>
         
            



