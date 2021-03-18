
<!DOCTYPE html>

<link rel="stylesheet" href="style.css">
<html>
	<head>
		<title> 장바구니 </title>
	<head/>
   <header>
                <br><h2><center> <a href = "Mainhome.php">민경's book store  </a></center> </h2><hr>

    </header>
                 
            <br><h2><center> 장바구니  </center> </h2><br><hr><br>
			<?php
			$connect = mysqli_connect('localhost','root');
			$db = mysqli_select_db($connect, 'bookstore_db');
      
			session_start();
			$max=sizeof($_SESSION['CART']);
			$totalprice = 0;
			$price=0;
			if($max==0){
				echo"현재 쇼핑카트에 물품이 없습니다.<br>";
			}
			else{
				echo"<center>";
				for($i=0; $i<$max; $i++) { 
					$j=1;
	
					while (list ($key, $val) = each ($_SESSION['CART'][$i])) { 
						if($j%2!=0){
							$sql = "SELECT * from BOOK where bookNo like '{$val}'";
							$result = mysqli_query ($connect, $sql);   
							$row = mysqli_fetch_array($result);
							$bookName = $row['bookName'];
							$price = $row['price'];
							echo "<b>{$bookName}</b>  ";
							
						}
						else{
							echo "{$val}권 = {$price}원<br><br>";
							$totalprice += $price * $val;
						}
						$j++;
	
					} 
					
				} 
				echo "배송료  2500원";
				echo  "<hr>총액 = <b>{$totalprice}원</b></center>";
			}
			?>
			<center>
			<table border = 0 width=800>
			<tr>
				<td align = center>
				<input type="button" value="◀ 돌아가기 ▶" onClick="location.href='Mainhome.php'">
			<input type="button" value="◀ 구매하기 ▶" onClick="location.href='Buy2.php'">
				</td>
			</tr>
		</table></center>
		
        
    </body>
</html>
