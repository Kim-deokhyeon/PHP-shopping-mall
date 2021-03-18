
<html>
	<head>
		<title> 구입 완료 </title>
	<head/>
	<?php
	
	$connect = mysqli_connect('localhost','root');
	$db = mysqli_select_db($connect, 'bookstore_db');
	
	$subName = $_POST['subName'];
	$p1  = $_POST['p1'];
	$p2 = $_POST['p2'];
	$p3 = $_POST['p3'];
	$p=$p1."-".$p2."-".$p3;
	$postCode = $_POST['postCode'];
	$roadAddress = $_POST['roadAddress'];
	$jibunAddress = $_POST['jibunAddress'];
	$detailAddress = $_POST['detailAddress'];
	$extraAddress = $_POST['extraAddress'];
	$subTerm = $_POST['subTerm'];
	$paymenthistory=$_POST['paymenthistory'];
	$purchaseDate =date("Y-M-D h:m");
	$bookNo;
	$quantity;
	session_start();
	$purchaseNO=$_SESSION['CARTNO'];
	$memberNo=$_SESSION['MEMBERNO'];
	$max=sizeof($_SESSION['CART']);
			$totalprice = 2500; //배송비
			$price=0;
			if($max==0){
				echo"현재 쇼핑카트에 물품이 없습니다.<br>";
				exit;
			}
			else{
				
				for($i=0; $i<$max; $i++) { 
					$j=1;
	
					while (list ($key, $val) = each ($_SESSION['CART'][$i])) { 
						if($j%2!=0){
							$bookNo=$val;
	
						}
						else{
							$quantity =$val;
							$sql = "SELECT * from BOOK where bookNo like '{$bookNo}'";
							$result = mysqli_query ($connect, $sql);   
							$row = mysqli_fetch_array($result);
							$price = $row['price'];
							$q=$row['Field'];
							$q=$q-$quantity;
							
							$sql = "UPDATE BOOK SET Field='{$q}' where bookNo like '{$bookNo}'";
							mysqli_query($connect, $sql);
							$totalprice += $price * $val;
							$sql = "INSERT INTO BUY VALUES";
							$sql = $sql."('$purchaseNO','$memberNo','{$bookNo}','$quantity','$price');";
							mysqli_query($connect, $sql);
						}
						$j++;
	
					} 
	
				} 
				echo  "<hr>총액 = <b>{$totalprice}원이 결제되었습니다.</b></center>";
			}
			
	
	$sql="SELECT count(*) as cnt from DELIVERY";
	$result=mysqli_query($connect, $sql);
	$row = mysqli_fetch_array($result);
	$sql="SELECT count(*) as cnt from DELIVERY";
	$result=mysqli_query($connect, $sql);
	$row = mysqli_fetch_array($result);
	if(!$row){
		$waybillNum=1;
	}
	else{$waybillNum=$row["cnt"] +1;}

	$sql = "INSERT INTO DELIVERY VALUES";
	$sql = $sql."('$waybillNum','$subName','$p','$subTerm','$postCode','$roadAddress','$jibunAddress','$detailAddress','$extraAddress');";
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
         
            



