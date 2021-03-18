
<link rel="stylesheet" href="style.css">
<html>
	<head>
		<title> 구매 </title>
	<head/>
	<header>
                <br><h2><center> <a href = "Mainhome.php">민경's book store  </a></center> </h2><hr>

    </header>
	<body>
		<br><h2><center> 구매 </center> </h2><br><hr><br>
		<?php
		session_start();
		if($_SESSION['PERMISSION']!='guest'){
			echo "<h3><center>회원이 아닙니다</center></h3>.";
			exit;
		}
	
		$connect = mysqli_connect('localhost','root');
		$db = mysqli_select_db($connect, 'bookstore_db');
		
		$sql = "SELECT * from BOOK where bookNo like '{$_SESSION["BOOKNO"]}'";
		$result = mysqli_query ($connect, $sql);   
		$row = mysqli_fetch_array($result);
      

		?>
      
		<form method="post" action = "Buy1.php">
		<center>
		<table border = 0 bordercolor = "blue" width=300 cellspacing =1 cellpadding=5>
		<tr><td> <?php echo "책 제목 : {$row['bookName']}" ?> </td></tr>
		<tr> <td> <?php echo"가격 : {$row['price']}" ?></td></tr>
		<td align = right > 수량 : </td>
			<td>
				<input type = "text" size =4 name = "quantity" maxlength = 4>
			</td>  
		
     
	  

		</table><br>
      
      <table border = 0 width=800>
         <tr>
            
			<td align = center>
			<input type="button" value="◀ 돌아가기 ▶" onClick="location.href='Mainhome.php'">
			</td>
			<td align = center>
            <input type = "submit" value = " ◀ 장바구니 추가 ▶"> &nbsp;&nbsp;&nbsp;&nbsp;
            </td>
         </tr>
      </table>
     
      </form>
   </body>
</html>

