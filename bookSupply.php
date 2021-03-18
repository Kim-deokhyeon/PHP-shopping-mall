<?php session_start(); ?>
<html>
	<head>
		<title> 재고 입고 </title>
	<head/>
	
	<script type="text/javascript:">

	</script>
	
	<body>
	<?php echo $_SESSION['ID']?>
		<br><h2><center> 재고 입고 </center> </h2><hr><br>
      
		<form method="post" action = "bookSupply1.php">
		<center>
		
		<table border = 0 bordercolor = "blue" width=750 cellspacing =1 cellpadding=5>
		
		<tr>
			<td width =450 align = right> 책 : </td>
			<td >
				<select name = "bookNo">
					<option value = " "> 선택 </option>
					<?php
					$connect = mysqli_connect('localhost','root');
					$db = mysqli_select_db($connect, 'bookstore_db');
					$sql = "SELECT * from BOOK where bookPublisher like '{$_SESSION['ID']}'";
					$result = mysqli_query ($connect, $sql);	
					$i=0;	
					while($row = mysqli_fetch_array($result)){
					
					if($i==3){
						echo"<tr>";
					}
					$bookName = $row['bookName'];
					$bookNo = $row['bookNo'];
					echo "<option value = \"$bookNo\"> $bookName </option>"
					;
					$i=$i+1;
					if($i==3){
						echo"</tr>";
						$i=0;
					}
				}
					?>
				</select>
				
			</td>
		</tr>
		
		
		<tr>
			<td width =200 align = right> 수량 : </td>
			<td width = 300>
				<input type = "text" size =20 maxlength = 20 name = "Field">
			</td>
			
			<td width =200 align = right> 공급 단가 : </td>
			<td width = 330>
				<input type = "text" size =20 maxlength = 8 name = "Field2">
			</td>
		</tr>
		
		</table><br>
      
		<table border = 0 width=800>
			<tr>
				<td align = center>
				<input type = "submit" value = " ◀ 입고 하기 ▶"> &nbsp;&nbsp;&nbsp;&nbsp;
			<input type = "reset" value = " ◀ 수정 하기 ▶">
				</td>
			</tr>
		</table>
		<center>
			<input type = "hidden" name = "thema" value = "재고입고 서식">
		</center>
		</form>
	</body>
</html>

         
            
               
      