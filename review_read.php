
<!DOCTYPE html>
<html>
    <head>
        <title>
		</title>        
    </head>
    
    <body>
    <form method="post">
		<?php
		session_start();
		$_SESSION['FEEDNO']=$_POST['feedNo'];
		$connect = mysqli_connect('localhost','root');
		$db = mysqli_select_db($connect, 'bookstore_db');
		
		$sql = "SELECT * from review_sns where feedNo like '{$_POST['feedNo']}'";
		$result = mysqli_query ($connect, $sql);
		$row = mysqli_fetch_array($result);
		?>
		<table border = 0 bordercolor = "blue" width=800 cellspacing =1 cellpadding=5>
		
			<tr>
				<td width = 450 align = right> 작성자 : </td>
				<td width = 330>
				<?php
				$sql2 = "SELECT * from member where memberNo like '{$row['memberNo']}'";
				$tmp = mysqli_query ($connect, $sql2);
				$row2 = mysqli_fetch_array($tmp);
				echo $row2['memberNick'];
				?>
				</td>
			</tr>
		
			<tr>
				<td width = 450 align = right> 리뷰 내용 : </td>
				<td width = 330>
				<?php echo $row['review'] ?>
				</td>
			</tr>

			<tr>
				<td width =450 align = right> 평점 : </td>

				<td>
				<?php echo $row['grade'] ?>
				</td>
			</tr>	
		
		</table><br>

		<table border = 0 width=800>
			<tr>
				<td align = center>
				<a href = "review_total" value = " ◀ 돌아가기 ▶"> 
				</td>
			</tr>
		</table>
		</form>
		<?php
		if($_SESSION['ID']==$row2['memberId']){
		echo "<html><center><table border = 0 width=800>
			<tr>
				<td align = center>
				<input type = \"submit\"  value = \" ◀ 리뷰 수정 ▶ \" onClick=\"location.href='review_edit.php'\">
				</td>
				<td>
				<input type = \"submit\"  value = \" ◀ 리뷰 삭제 ▶ \" onClick=\"location.href='review_del.php'\">
				</td>
			</tr>
		</table></html>";
		}
		?>
		<center>
			<input type = "hidden" name = "thema" value = "리뷰작성 서식">
		</center>
		
    </div>
</div>
</body>

</html>