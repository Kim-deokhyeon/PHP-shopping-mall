
<html>
	<head>
		<title> 책등록 </title>
	<head/>
	
	<script type="text/javascript:">

	</script>
	
	<body>
		<br><h2><center> 책등록 </center> </h2><hr><br>
      
		<form method="post" action = "Supply1.php">
		<center>
		
		<table border = 0 bordercolor = "blue" width=750 cellspacing =1 cellpadding=5>
		
		<tr>
			<td width =450 align = right> 책 이름 : </td>
			<td >
				<input type = "text" size=20 maxlength = 20 name = "bookName">
			</td>	
			<td align = right> 책 고유 번호 : </td>
			<td >
				<input type = "text" size =15 maxlength = 4 name = "bookNo">
			</td>
			
			
		</tr>
		
		
		<tr>
		<td width =200 align = right> 저자 : </td>
			<td>
				<input type = "text" size =20 maxlength = 20 name = "bookWriter">
			</td>
			<td width =200 align = right> 출판사 : </td>
			<td width = 300>
				<input type = "text" size =20 maxlength = 20 name = "bookPublisher">
			</td>
			
		</tr>
      
		
		
		<tr>
			
			
			<td width =200 align = right> 출판년도 : </td>
			<td width = 330>
				<input type = "text" size =20 maxlength = 8 name = "publishingYear">
			</td>
			
			<td width =300 align = right > 카테고리: </td>
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
		<td align = right> 재고 : </td>
			<td>
				<input type = "text" size =15 maxlength = 4 name = "Field">
			</td>
			
			<td align = right> 가격 : </td>
			<td >
				<input type = "text" size =15 maxlength = 6 name = "price">
			</td>
			
			
			
		</tr>
		
		 <tr>
         <td align= right> 책 내용 : </td>
         <td colspan = 5>
            <textarea  name = "bookContent" rows=5 cols = 90> </textarea>
         </td>
		</tr>
		
		
		</table><br>
      
		<table border = 0 width=800>
			<tr>
				<td align = center>
				<input type = "submit" value = " ◀ 책 등록 ▶"> &nbsp;&nbsp;&nbsp;&nbsp;
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

         
            
               
      