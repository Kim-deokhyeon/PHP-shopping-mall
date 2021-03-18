
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body>
    <form method="post" action = "review_edit2.php">
		
		<table border = 0 bordercolor = "blue" width=800 cellspacing =1 cellpadding=5>
		
		<tr>
			<td width = 450 align = right> 리뷰 내용 : </td>
			<td width = 330>
				<input type = "text" size =160 maxlength = 150 name = "review">
			</td>
		</tr>

		<tr>
			<td width =450 align = right> 평점 : </td>

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
			<td width =450 align = right> 공개여부 : </td>

			<td>
				<select name = "privacy">
					<option value = " "> 선택 </option>
					<option value = "0"> 공개 </option>
					<option value = "1"> 비공개 </option>
				</select>
			</td>
		</tr>		
		
		</table><br>
      
		<table border = 0 width=800>
			<tr>
				<td align = center>
				<input type = "submit" value = " ◀ 리뷰 수정 ▶"> &nbsp;&nbsp;&nbsp;&nbsp;
			    <input type = "reset" value = " ◀ 다시 작성 ▶">
				</td>
			</tr>
		</table>
		<center>
			<input type = "hidden" name = "thema" value = "리뷰수정 서식">
		</center>
		</form>
    </div>
</div>
</body>

</html>