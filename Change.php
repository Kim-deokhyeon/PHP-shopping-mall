<?php
	session_start();

	$connect = mysqli_connect('localhost','root');
	$db = mysqli_select_db($connect, 'bookstore_db');
	
	$sql = "SELECT * from member where memberId like '{$_SESSION["ID"]}'";
	$result = mysqli_query ($connect, $sql);   
	$row = mysqli_fetch_array($result);

	$result = mysqli_query ($connect, $sql);	
	$row = mysqli_fetch_array($result);	
?>
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
	
	<script type="text/javascript:">

	</script>
	
	<body>
		<br><h2><center> 정보 수정 </center> </h2><br>
      
		<form method="post" action = "Change1.php">
		<center>
		
		<table border = 0 bordercolor = "blue" width=800 cellspacing =1 cellpadding=5>
		
		<tr>
			<td width =200 align = right> 이메일 : </td>
			<td colspan = 3>
			<?php echo $row['memberId']; ?>
			</td>			
		</tr>
		
		<tr>
			<td width =450 align = right> 이름 : </td>
			<td width = 330>
			<?php echo $row['memberName']; ?>
			</td>
			
			<td width =200 align = right> 닉네임 : </td>
			<td width = 300>
				<input type = "text" size =20 maxlength = 20 name = "nick">
			</td>
		</tr>
      
		<tr>
			<td align = right> 비밀번호 : </td>
			<td>
				<input type = "password" size= 20 name = "pw1" maxlength =20 >
			</td>
         
			<td align = right> 비밀번호 확인 : </td>
			<td>
				<input type = "password" size=20 name="pw2" maxlength=20 >
			</td>
		</tr>
		
		<tr>
			<td width =450 align = right> 생년월일 : </td>
			<td width = 330>
			<?php echo $row['memberBirth']; ?>
			</td>
			
			<td align = right > 핸드폰 : </td>
			<td>
				<select name = "p1">
					<option value = " "> 선택 </option>
					<option value = "010"> 010 </option>
					<option value = "011"> 011 </option>
					<option value = "016"> 016 </option>
					<option value = "017"> 017 </option>
					<option value = "019"> 019 </option>
				</select> -
				<input type = "text" size =4 name = "p2" maxlength = 4>-
				<input type = "text" size =4 name = "p3" maxlength = 4>
			</td>
		</tr>
      
		<tr>
			<td align = right > 성별 : </td>
			<td>
			<?php echo $row['memberGender']; ?>
			</td>  
			<td align = right > 구독여부 : </td>
			<td>
				<input type = "radio" name = "subcheck" value= 1 checked> 구독 
				<input type = "radio" name = "subcheck" value= 0> 미구독
			</td> 			
		</tr>
        
		<tr>
			<td align = right> 주소 : </td>
			<td colspan = 3>
				<input type="text" size=85 name ="addr">
			</td>
		</tr>
		
		
		</table><br>
      
		<table border = 0 width=800>
			<tr>
				<td align = center>
				<input type = "submit" value = " ◀ 회원 정보 수정 ▶">
				</td>
			</tr>
		</table>
		<center>
			<input type = "hidden" name = "thema" value = "회원 수정 서식">
		</center>
		</form>
	</body>
</html>

         
            
               
      