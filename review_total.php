
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<script>
function page_move(f_no, m_no){
    var f=document.reviews; //폼 name
	
    f.feedNo.value = f_no; //POST방식으로 넘기고 싶은 값
	 f.memberNo.value = m_no;
    f.action="review_read.php";//이동할 페이지
    f.method="post";//POST방식
    f.submit();
}



</script>
<html>
<head>
      <style>
         *{
            text-align: center;
         }
         h1{
            color:#2FCCF6;
         }
         table{
            border-collapse:collapse;
  
            padding:10px;
            width:100%;
            height:100%;
         }
         thead{
            background-color:grey;
         }
         div{
            border:1px solid black;
         }
      </style>
   </head>
   <body>
        <?php
        
        session_start();

         $connect = mysqli_connect('localhost','root');
         $db = mysqli_select_db($connect, 'bookstore_db');

         $sql = "SELECT * from review_sns where bookNo like '{$_SESSION['BOOKNO']}'";
         $result = mysqli_query ($connect, $sql);

         if(!$result) {
            echo "현재 리뷰가 없습니다.";
            exit;
         }

        
         $num = mysqli_num_rows($result)
         ?>
        
        <div>
         <h1><a href="review_write.php">Writing a post</a></h1>
         <table>
            <thead>
            <tr class="head">
               <th>피드 번호</th>
               <th>작성 일자</th>
               <th>작성자</th>
               <th>평점</th>                     
            </tr>   
            </thead>
            <tbody>
			<form method="post" action = "review_read.php" name="reviews" />
				<input type="hidden" name="feedNo"/>
				<input type="hidden" name="memberNo"/>
			
               <?php
                  while ($row = $result->fetch_assoc()) {
               ?>
               <tr>
                  <td><?php echo $row['feedNo'] ?></td>
                  <td><?php echo $row['reviewDate']?></td>
                  <td><?php
                  $sql = "SELECT * from member where memberNo like '{$row['memberNo']}'";
                  $tmp = mysqli_query ($connect, $sql);
                  $row2 = mysqli_fetch_array($tmp);
				  $privarcy = $row['privacy'];
				  
				  if($privarcy==0){
                   echo "
				   <a href=\"javascript:page_move('{$row['feedNo']}', '{$row['memberNo']}');\"><b>{$row2['memberNick']}의 리뷰</b></a>
                     
                   " ;
				  }
				  elseif($_SESSION['MEMBERNO']==$row['memberNo']){
					  echo "<a href=\"javascript:page_move('{$row['feedNo']}', '{$row['memberNo']}');\"><b>{$row2['memberNick']}의 리뷰</b></a>" ;
				  }else{
					  echo"<b>{$row2['memberNick']}의 리뷰</b>";
				  }
                   ?></td>
                  <td><?php echo $row['grade']?></td>
               </tr>
               <?php 
               };
               ?>
			   
			   
            </tbody>
         </table>
      </div>
	  <br>
	  <center>
			   <table><tr><td>
				<input type = "button" value = " ◀ 돌아가기 ▶" onClick="location.href='Mainhome.php'">
				</td></tr></table>
				</center>
   </body>

</html>