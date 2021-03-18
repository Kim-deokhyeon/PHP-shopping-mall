
<link rel="stylesheet" href="style.css">

<html>
   <head>
      <title> 책 상세 페이지 </title>
   <head/>
   
	<header>
                <br><h2><center> <a href = "Mainhome.php">민경's book store  </a></center> </h2>

    </header>
   <body>
      <br><h2><center> 
	  <?php 
	 session_start();
	  $_SESSION['BOOKNO']=$_POST["bookno"]; 
	
	  ?> 
	  </center> </h2><hr><br>
      
      <?php
      $connect = mysqli_connect('localhost','root');
      $db = mysqli_select_db($connect, 'bookstore_db');
      
	  $sql = "SELECT * from review_sns where bookNo like '{$_POST["bookno"]}'";
      $result2 = mysqli_query ($connect, $sql);   
      $num = mysqli_num_rows($result2);
      
      $review_grade=0;
		
		if($num!=0){
			while ($row2 = $result2->fetch_assoc()) {
				$review_grade+=$row2['grade'];
				
			};
			$grade=ceil($review_grade/$num);
			
			$sql = "UPDATE BOOK set grade = $grade where bookno = '{$_POST["bookno"]}'";
			mysqli_query ($connect, $sql);   
	
		}
	  
      $sql = "SELECT * from BOOK where bookNo like '{$_POST["bookno"]}'";
      $result = mysqli_query ($connect, $sql);   
      $row = mysqli_fetch_array($result);
      $categoryno=$row['category'];
	  $categoty ='';
	  switch($categoryno){
		case 1 :
			$category="소설";
			break;
		case 2:
			$category="수필";
			break;
		case 3:
			$category="시";
			break;
		case 4:
			$category="그림책";
			break;
		case 5:
			$category="사전";
			break;
			
	  }
	  
	  
      ?>
      
      <center>
      
      <table border = 0 bordercolor = "blue" width=800 cellspacing =1 cellpadding=5 style="border:1px solid #F78181">
         <tr>
            <td rowspan=8 > 책 이미지 </td>
			<td> <?php echo "제목 : {$row['bookName']}"; ?> </td>
            
         </tr>
		 <tr><td> <?php echo "저자 : {$row['bookWriter']}"; ?> </td></tr>
		<tr> <td> <?php echo "출판사 : {$row['bookPublisher']}" ;?> </td> </tr>  
		<tr> <td> <?php echo "출판년도 : {$row['publishingYear']}" ;?> </td> </tr>  
		<tr> <td> <?php echo "장르 : {$category}" ;?> </td> </tr>
		<tr> <td> <?php echo "평점 : {$row['grade']}" ;?> </td> </tr>
         <tr> <td> <?php echo"가격 : {$row['price']}" ;?></td> </tr>
          
         <tr> <td> <?php echo "남은 수량 : {$row['Field']}";?> </td> </tr>
		 <tr><td colspan=2><hr></td></tr>

         <tr> <td colspan=2> <?php echo "{$row['bookContent']}...이하 생략";?>  </td> </tr>
      </table><br>

      <table border = 0 width=800>
         <tr height =100>
            <td align = center>
			<input type = "button" value = " ◀ 구매하기 ▶" onClick="location.href='Buy.php'"> 
			<input type = "button" value = " ◀ 리뷰 게시판 ▶" onClick="location.href='review_total.php'"> 

            </td>
         </tr>
      </table>
      
      <center>
         <input type = "hidden" name = "thema" value = "책 세부 서식">   
      </center>

   </body>
</html>

         
            
               
      