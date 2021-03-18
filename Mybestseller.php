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
   <link rel="stylesheet" href="style.css">
   <head>
      <title> 추천도서   </title>
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
                <li><a href = "Subscribe.php">정기구독이란?</a></li>
                <li><a href = "Bestseller1.php">베스트 셀러</a></li>
                 <li><a href = "Mybestseller.php">나의 추천 도서</a></li>
     
			<hr>
            </ul>
        </nav>

		</center>
    </head>
   <body>
      
    <?php
    $connect = mysqli_connect('localhost','root');
	$db = mysqli_select_db($connect, 'bookstore_db');
    session_start();
	
	$sql = "SELECT * from MEMBER where memberNo like {$_SESSION['MEMBERNO']}";
	$result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_array($result);
	$category=$row['category'];
	
  
   ?>

   <center>
	<form method="post" action = "book.php" name="books" />
				<input type="hidden" name="bookno"/>
				<input type="hidden" name="bookname"/>
   <?php
   
   

		$sql = "SELECT * from BOOK where category like {$category} order by grade desc ";
		$result = mysqli_query ($connect, $sql);   
		$row = mysqli_fetch_array($result);
		$bookNo=$row['bookNo'];
		$bookName=$row['bookName'];
		$bookWriter=$row['bookWriter'];
		$bookPublisher=$row['bookPublisher'];
		$publishingYear=$row['publishingYear'];
		$grade=$row['grade'];
		$price=$row['price'];
		
		
		
		
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
   <tr> <td> <?php echo "평점 : {$grade}" ;?> </td> </tr>
    <tr> <td> <?php echo"가격 : {$price}" ;?></td> </tr>
   <tr> <td align=center height=50 width =400>
   <?php echo" <input type = \"button\" value = \"◀ 구매하기 ▶\" onclick= \"page_move( '$bookName', '$bookNo');\">";?>
        
		 </td>
    </tr>
   </table>   
   <?php
   
   ?>

    </form>
   
    </center>

   </body>
</html>