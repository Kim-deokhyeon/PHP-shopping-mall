
<html>
	<head>
		<title> 회원가입창 </title>
	<head/>
	
	<script type="text/javascript:">

	</script>
	
	<body>
		<br><h2><center> 환영합니다! </center> </h2><hr><br>
      
		<form method="post" action = "Signup1.php">
		<center>
		
		<table border = 0 bordercolor = "blue" width=800 cellspacing =1 cellpadding=5>
		
		<tr>
			<td width =450  align = right> 이메일 : </td>
			<td >
				<input type = "text" size=20 maxlength = 30 name = "id">
			</td>	
				<td width =300 align = right > 선호장르: </td>
			<td>
				<select name = "category">
					<option value = " "> 선택 </option>
					<option value = "1"> 소설 </option>
					<option value = "2"> 수필 </option>
					<option value = "3"> 시 </option>
					<option value = "4"> 그림책</option>
					<option value = "5"> 자기계발 </option>
				</select>
			</td>
		</tr>
		
		<tr>
			<td width =450 align = right> 이름 : </td>
			<td width = 330>
				<input type = "text" size =20 maxlength = 20 name = "name">
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
				<input type = "text" size =20 maxlength = 8 name = "birth">
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
				<input type = "radio" name = "sex" value= "남" checked> 남 
				<input type = "radio" name = "sex" value= "여"> 여
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
				<input type = "submit" value = " ◀ 회원 등록 ▶"> &nbsp;&nbsp;&nbsp;&nbsp;
			<input type = "reset" value = " ◀ 다시 작성 ▶">
				</td>
			</tr>
		</table>
		<center>
			<input type = "hidden" name = "thema" value = "회원등록 서식">
		</center>
		</form>
	</body>
</html>

         
            
               
      