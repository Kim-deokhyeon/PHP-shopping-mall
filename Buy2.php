
<html>
	<head>
		<title> 구매 </title>
	<head/>
	
	<script type="text/javascript:">

	</script>
	
	<body>
		<br><h2><center> 구매정보를 입력하세요 </center> </h2><hr><br>
      
		<form method="post" action = "Buy3.php">
		<center>
		
		<table border = 0 bordercolor = "blue" width=600 cellspacing =1 cellpadding=5>

		<tr>
			<td width=300 align = right> 받는 사람 : </td>
			<td width = 330>
				<input type = "text" size=20 maxlength = 20 name = "subName">
			</td>
			
			
		</tr>

		
		<tr>
			<td width=300 align = right > 핸드폰 : </td>
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
			<td width=300 align = right > 결제수단 : </td>
			<td>
				<select name = "paymenthistory">
					<option value = " "> 선택 </option>
					<option value = "카드"> 카드 </option>
					<option value = "계좌이체"> 계좌이체 </option>
					<option value = "무통장입금"> 무통장입금 </option>
				</select> 
				
			</td>
		</tr>
        
		<tr>
			<td  align = right> 주소 : </td>
			<td colspan = 5>
			(우편번호) <input type = "text" size =15 name = "postCode" maxlength = 20><br>
			(도로명) <input type = "text" size =18 name = "roadAddress" maxlength = 20><br>
			(지번) <input type = "text" size =20 name = "jibunAddress" maxlength = 20><br>
			(상세) <input type = "text" size =20 name = "detailAddress" maxlength = 20><br>
			(참고항목) <input type = "text" size =15 name = "extraAddress" maxlength = 20></td>
			
		</tr>
		
		<tr>
         <td width=300 align= right> 배송 메모 : </td>
         <td colspan = 5>
            <input type="text" size=26 name ="subTerm" maxlength = 20>
         </td>
		</tr>
		</table><br>
		<center>
		<table border = 0 width=800>
			<tr>
				<td align = center>
			<input type="button" value="◀ 돌아가기 ▶" onClick="location.href='Mainhome.php'">
			</td>
			<td align = center>
            <input type="submit" value="◀ 구매 ▶">
            </td>
			</tr>
		</table>
		</center>
		<center>
			<input type = "hidden" name = "thema" value = "회원등록 서식">
		</center>
		</form>
	</body>
</html>

         
            
               
      