
<html>
	<head>
		<title> 설문조사 </title>
	<head/>
	
	<script type="text/javascript:">

	</script>
	
	<body>
		<br><h2><center> 설문조사 </center> </h2><hr><br>
      
		<form method="post" action = "Survey1.php">
		<center>
		
		<table border = 0 bordercolor = "blue" width=750 cellspacing =1 cellpadding=5>		
		
		<tr>
			<td width =300 align = right > 문항1 : 귀사는 귀사의 책이 잘 팔리고 있다고 생각하십니까? </td>
			<td>
				<select name = "question1">
					<option value = "3"> 선택 </option>
					<option value = "1"> 전혀 그렇지 않다 </option>
					<option value = "2"> 그렇지 않다 </option>
					<option value = "3"> 보통이다 </option>
					<option value = "4"> 그렇다 </option>
					<option value = "5"> 매우 그렇다 </option>
				</select>
			</td>
		</tr>

		<tr>
			<td width =300 align = right > 문항2 : 귀사는 귀사의 마진에 대해 만족하십니까? </td>
			<td>
				<select name = "question2">
					<option value = "3"> 선택 </option>
					<option value = "1"> 전혀 그렇지 않다 </option>
					<option value = "2"> 그렇지 않다 </option>
					<option value = "3"> 보통이다 </option>
					<option value = "4"> 그렇다 </option>
					<option value = "5"> 매우 그렇다 </option>
				</select>
			</td>
		</tr>

		<tr>
			<td width =300 align = right > 문항3 : 귀사는 본사가 귀사의 홍보에 도움이 된다고 생각하십니까?? </td>
			<td>
				<select name = "question3">
					<option value = "3"> 선택 </option>
					<option value = "1"> 전혀 그렇지 않다 </option>
					<option value = "2"> 그렇지 않다 </option>
					<option value = "3"> 보통이다 </option>
					<option value = "4"> 그렇다 </option>
					<option value = "5"> 매우 그렇다 </option>
				</select>
			</td>
		</tr>

		<tr>
			<td width =450 align = right> 기타 의견 : </td>
			<td>
				<input type = "text" size=20 maxlength = 40 name = "opinion">
			</td>
		</tr>
		
		</table><br>
      
		<table border = 0 width=800>
			<tr>
				<td align = center>
				<input type = "submit" value = " ◀ 설문 제출 ▶"> &nbsp;&nbsp;&nbsp;&nbsp;
			<input type = "reset" value = " ◀ 다시 작성 ▶">
				</td>
			</tr>
		</table>
		<center>
			<input type = "hidden" name = "thema" value = "공급자 설문 서식">
		</center>
		</form>
	</body>
</html>

         
            
               
      