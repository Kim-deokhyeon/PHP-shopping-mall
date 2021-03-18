<html>
<link rel="stylesheet" href="style.css">
   <head>
      <title> mypage </title>
        <style>
            div {
                float: left;
                margin: auto
            }
            nav {clear: both;}
        </style>

        <header>
                <br><h2><center> <a href = "Mainhome.php">민경's book store  </a></center> </h2>

            
        </header>
		<center>

        <nav>
            <ul>
			<hr>
                <li><a href = "Mypage.php">내정보</a></li>
                <li><a href = "Change.php">정보 수정</a></li>
                <li><a href = "Buylist.php">구매 내역</a></li>
     
			<hr>
            </ul>
        </nav>

		</center>
    </head>
   <body>
      <br><h2><center> 구매 내역 </center> </h2>
      

      <center>
	 
   
      <?php
	session_start();
	$connect = mysqli_connect('localhost','root');
	$db = mysqli_select_db($connect, 'bookstore_db');
	
	$sql = "SELECT * from BUYLIST where memberNo like '{$_SESSION["MEMBERNO"]}'";
	$result = mysqli_query ($connect, $sql);   
	while($row = mysqli_fetch_array($result)){
		if($row){
		}
		echo"<table border = 1 bordercolor = \"black\" width=700 cellspacing =1 cellpadding=5>";
		$purchaseNO = $row['purchaseNO'];
		$Key = $row['Key'];
		$purchaseDate = $row['purchaseDate'];
		$paymenthistory = $row['paymenthistory'];
		$totalprice = $row['totalprice'];
		$sql = "SELECT * from BUY where purchaseNO like '{$purchaseNO}'";
		$result1 = mysqli_query ($connect, $sql);   
		while($row1 = mysqli_fetch_array($result1)){
			$bookNo=$row1['bookNo'];
			$quantity=$row1['quantity'];
			$price=$row1['price'];
			$sql = "SELECT * from BOOK where bookNo like '{$bookNo}'";
			$result2 = mysqli_query ($connect, $sql); 
			$row2 = mysqli_fetch_array($result2);
			$bookName=$row2['bookName'];
		
		?>
		
	
	  
	  
		
		<tr>
			<td width =450 align = right> 책 이름 : </td>
			<td width = 330>
				<?php echo $bookName;?>
			</td>
			
			
			<td width = 300>
				<?php echo $quantity;?>권
			</td>
			
			<td width = 330>
				<?php echo $price;?>원
			</td>
			
		</tr>
		<?php
		}
	?>
      
		
		
		<tr>
			<td width =450 align = right> 구매날짜 : </td>
			<td width = 330>
				<?php echo $purchaseDate;?>
			</td>
			
			<td align = right > 결제수단 : </td>
			<td>
				<?php echo $paymenthistory;?>
			</td>
		</tr>
      
		<tr>
			<td align = right > 운송장번호 : </td>
			<td >
				<?php echo $Key;?>
			</td>  
			<td align = right > 총구매금액 : </td>
			<td >
				<?php echo $totalprice;?>
			</td> 			
		</tr>
		</table><br><br>
       <?php
	}
	?>
		
		
		
      
      </form>
   </body>
</html>
         
            

