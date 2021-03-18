<link rel="stylesheet" href="style.css">
<script>
function page_move(s_name, s_no){
    var f=document.books; //폼 name
   
    f.bookno.value = s_no; //POST방식으로 넘기고 싶은 값
   f.bookname.value = s_name;
    f.action="book.php";//이동할 페이지
    f.method="post";//POST방식
    f.submit();
}

</script>
<html>
   <head>
      <title> 베스트 셀러 </title>
   <head/>
   
   <header>
        <br><h2><center> <a href = "Mainhome.php">민경's book store  </a></center> </h2>
    </header>
   <body>
      
    <?php
    $connect = mysqli_connect('localhost','root');
   $db = mysqli_select_db($connect, 'bookstore_db');
     $sql = "DELETE from BESTSELLER";
	 
		mysqli_query($connect, $sql);
   $categorytag =1;
   ?>

   <center>
	<form method="post" action = "book.php" name="books" />
				<input type="hidden" name="bookno"/>
				<input type="hidden" name="bookname"/>
   <?php
   for($categorytag=1;$categorytag<=5;$categorytag++){
	   switch($categorytag){
		   case 1:
		   $category ="소설";
		   break;
		   case 2:
		   $category ="수필";
		    break;
		   case 3:
		   $category ="시";
		    break;
		   case 4:
		   $category ="그림책";
		    break;
		   case 5:
		   $category ="자기계발";
		    break;
	   }
		 

		$sql = "SELECT * from BOOK where category like {$categorytag} order by grade desc ";
		$result = mysqli_query ($connect, $sql);   
		$row = mysqli_fetch_array($result);
		$bookNo=$row['bookNo'];
		$bookName=$row['bookName'];
		$bookWriter=$row['bookWriter'];
		$bookPublisher=$row['bookPublisher'];
		$publishingYear=$row['publishingYear'];
		$grade=$row['grade'];
		$price=$row['price'];
		
		$sql = "INSERT INTO BESTSELLER VALUES";
		$sql = $sql."($categorytag,$bookNo,$categorytag,1);";
		mysqli_query($connect, $sql);

   
   ?>
   <table border = 0  width=800 cellspacing =1 cellpadding=5 style="border:1px solid #F78181">


   <tr>
        <td rowspan=9 width=400 > 책 이미지 </td>
      <td> <?php echo "제목 : {$bookName}"; ?> </td>
    </tr>
   <tr><td> <?php echo "저자 : {$bookWriter}"; ?> </td></tr>
   <tr> <td> <?php echo "출판사 : {$bookPublisher}" ;?> </td> </tr>  
   <tr> <td> <?php echo "출판년도 : {$publishingYear}" ;?> </td> </tr>  
   <tr> <td> <?php echo "장르 : $category" ;?> </td> </tr>
   <tr> <td> <?php echo "평점 : {$grade}" ;?> </td> </tr>
    <tr> <td> <?php echo"가격 : {$price}" ;?></td> </tr>
   <tr> <td align=center height=50 width =400>
   <?php echo" <input type = \"button\" value = \"◀ 구매하기 ▶\" onclick= \"page_move( '$bookName', '$bookNo');\">";?>
        
		 </td>
    </tr>
   </table>   
   <?php
   }
   ?>

    </form>
   
    </center>

   </body>
</html>