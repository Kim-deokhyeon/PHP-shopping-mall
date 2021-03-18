
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body>
    <form method="post" action = "review_register.php">
		
		<table border = 0 bordercolor = "blue" width=800 cellspacing =1 cellpadding=5>
		
		<tr>
			<td align = right> 리뷰 내용 : </td>
			<td width >
				<input type = "text" size =60 maxlength = 150 name = "review">
			</td>
		</tr>

		<tr>
			<td align = right> 평점 : </td>

			<td>
				<select name = "grade">
					<option value = " "> 선택 </option>
					<option value = "1"> 싫어요 </option>
					<option value = "2"> 별로에요 </option>
                    <option value = "3"> 그럭저럭 </option>
                    <option value = "4"> 볼만해요 </option>
                    <option value = "5"> 좋아요 </option>
				</select>
			</td>
		</tr>	

		<tr>
			<td width =150 align = right> 공개여부 : </td>

			<td>
				<select name = "privacy">
					<option value = " "> 선택 </option>
					<option value = "0"> 공개 </option>
					<option value = "1"> 비공개 </option>
				</select>
			</td>
		</tr>		
		
		</table><br>
      
		<table border = 0 bordercolor = "blue" width=800 cellspacing =1 cellpadding=5>
			<tr>
				<td align = right>
				<input type = "button" value = " ◀ 돌아가기 ▶" onClick="location.href=' review_total.php'">
				</td>
				<td align = left>
				<input type = "submit" value = " ◀ 리뷰 작성 ▶"> &nbsp;&nbsp;&nbsp;&nbsp;
			    
				</td>
			</tr>
		</table>
		<center>
			<input type = "hidden" name = "thema" value = "리뷰작성 서식">
		</center>
		</form>
    </div>
</div>
</body>

</html>