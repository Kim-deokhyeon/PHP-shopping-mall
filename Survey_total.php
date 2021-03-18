
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
            border:1px solid black;
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

         $sql = "SELECT * from publisher";
         $result = mysqli_query ($connect, $sql);

         $row = mysqli_fetch_array($result);
         $num = mysqli_num_rows($result)
         ?>
        
        <div>
         <h1> 설문 조사 결과</h1>
         <table>
            <thead>
            <tr class="head">
               <th>출판사</th>
               <th>담당자</th>
               <th>연락처</th>
               <th>만족도</th>                     
            </tr>   
            </thead>
            <tbody>
				<input type="hidden" name="feedNo"/>
				<input type="hidden" name="memberNo"/>
               <tr>
                  <td><?php echo $row['publisherName'] ?></td>
                  <td><?php echo $row['Field4']?></td>
                  <td><?php echo $row['publisherTel'] ?></td>
                  <td><?php
                  if($row['pubsliherSatis']) echo $row['pubsliherSatis'];
                  else echo "아직 설문에 응답하지 않았습니다"
                   ?></td>
               </tr>
			
               <?php
                  while ($row = $result->fetch_assoc()) {
               ?>
               <tr>
                  <td><?php echo $row['publisherName'] ?></td>
                  <td><?php echo $row['Field4']?></td>
                  <td><?php echo $row['publisherTel'] ?></td>
                  <td><?php
                  if($row['pubsliherSatis']) echo $row['pubsliherSatis'];
                  else echo "아직 설문에 응답하지 않았습니다"
                   ?></td>
               </tr>
               <?php 
               };
               ?>
            </tbody>
         </table>
      </div>
      <body>
		<table border = 0 width=800>
			<tr>
				<td align = center>
				<input type="button" value="◀ 돌아가기 ▶" onClick="location.href='Login1.php'">
				</td>
			</tr>
		</table>
	   </body>
   </body>

</html>