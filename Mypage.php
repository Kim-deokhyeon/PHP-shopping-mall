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
   <body>
      <br><h2><center> 내정보 </center> </h2>
      

      <center>
	 
      <table border = 1 bordercolor = "black" width=700 cellspacing =1 cellpadding=5>
      <?php
	session_start();
	$connect = mysqli_connect('localhost','root');
	$db = mysqli_select_db($connect, 'bookstore_db');
	
	$sql = "SELECT * from member where memberId like '{$_SESSION["ID"]}'";
	$result = mysqli_query ($connect, $sql);   
	$row = mysqli_fetch_array($result);
	
	$memberName = $row['memberName'];
	$memberNick = $row['memberNick'];
	$memberBirth = $row['memberBirth'];
	$memberTel = $row['memberTel'];
	$memberId = $row['memberId'];
	$memberGender = $row['memberGender'];
	$memberAdd = $row['memberAdd'];
	//$category = $row['category'];
	$subcheck = $row['subcheck'];
	if($subcheck==1){
		$subcheck = "구독";
	}else{ $subcheck="미구독";}
	?>
	  
	  <tr>
			<td width =200 align = right> 이메일 : </td>
			<td colspan = 3>
				<?php echo "{$memberId}";?>
			</td>			
		</tr>
		
		<tr>
			<td width =450 align = right> 이름 : </td>
			<td width = 330>
				<?php echo $memberName;?>
			</td>
			
			<td width =200 align = right> 닉네임 : </td>
			<td width = 300>
				<?php echo $memberNick;?>
			</td>
		</tr>
      
		
		
		<tr>
			<td width =450 align = right> 생년월일 : </td>
			<td width = 330>
				<?php echo $memberBirth;?>
			</td>
			
			<td align = right > 핸드폰 : </td>
			<td>
				<?php echo $memberTel;?>
			</td>
		</tr>
      
		<tr>
			<td align = right > 성별 : </td>
			<td>
				<?php echo $memberGender;?>
			</td>  
			<td align = right > 구독여부 : </td>
			<td>
				<?php echo $subcheck;?>
			</td> 			
		</tr>
        
		<tr>
			<td align = right> 주소 : </td>
			<td colspan = 3>
				<?php echo $memberAdd;?>
			</td>
		</tr>
		
		
		</table><br>
      
      </form>
   </body>
</html>
         
            

