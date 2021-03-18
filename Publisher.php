
<html>
	<head>
		<title> 업체 등록 </title>
	<head/>
	
	<script type="text/javascript:">

	</script>
	
	<body>
		<br><h2><center> 업체 등록 </center> </h2><hr><br>
      
		<form method="post" action = "Publisher1.php">
		<center>
		
		<table border = 0 bordercolor = "blue" width=800 cellspacing =1 cellpadding=5>
	
		
		<tr>
			<td width =450 align = right> 업체번호 : </td>
			<td>
				<input type = "text" size=20 maxlength = 4  name = "publisherId">
			</td>
			<td width =450 align = right> 업체명 : </td>
			<td width = 330>
				<input type = "text" size =20 maxlength = 20 name = "publisherName">
			</td>
			
			
		</tr>
      
		
		
		<tr>
			<td width =450 align = right> 담당자 : </td>
			<td width = 330>
				<input type = "text" size =20 maxlength = 8 name = "Field4">
			</td>
			
			<td align = right > 전화번호 : </td>
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
			<td align = right> 주소 : </td>
			<td colspan = 3>
				<input type="text" size=85 name ="publisherAdd">
			</td>
		</tr>
		
		
		</table><br>
      
		<table border = 0 width=800>
			<tr>
				<td align = center>
				<input type = "submit" value = " ◀ 업체 등록 ▶"> &nbsp;&nbsp;&nbsp;&nbsp;
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

         
            
               
      