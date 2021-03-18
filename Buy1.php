
<link rel="stylesheet" href="style.css">
<html>

	<head>
		<title> 구매 </title>
	<head/>
	<header>
                <br><h2><center> <a href = "Mainhome.php">민경's book store  </a></center> </h2><hr>

    </header>
	<body>
		<br><h2><center> 장바구니 추가 완료 </center> </h2><br><hr><br>
		<?php
		session_start();
		
		$product = $_SESSION['BOOKNO'];
		$quantity = $_POST['quantity'];
		$b=array("product"=>"$product","quantity"=>$quantity);
		array_push($_SESSION['CART'],$b); 
		
      

		?>
      
	
      <center>
      <table border = 0 width=800>
			<tr>
            
			<td align = center>
			<input type="button" value="◀ 돌아가기 ▶" onClick="location.href='Mainhome.php'">
			</td>
			<td align = center>
            <input type="button" value="◀ 장바구니 확인 ▶" onClick="location.href='Cart.php'">
            </td>
			</tr>
      </table>
	  </center>
      
   
   </body>
</html>

