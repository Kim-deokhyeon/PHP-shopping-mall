
<!DOCTYPE html>
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

function logout(){
		var go;
         go=confirm("로그아웃 되었습니다.");

         document.location.href="Login.php";
		 
		 
}

</script>

	

<html>
    <head>
        <style>
            div {
                float: left;
                margin: auto
            }
            nav {clear: both;}
        </style>

        <header>
                <br><h2><center> <a href = "Mainhome.php">민경's book store  </a></center> </h2>

            <div id = "login" style="float: right"> <!--로그인에 대한 논리적 섹션-->
                <form action = "">
				<?php
				session_start();
				$_SESSION['BOOK']=null;
				if($_SESSION['ID']){
					echo $_SESSION['ID']."님 환영합니다.";
					echo"<html><body><br><br>
				<center>
                    <input type = \"button\" value = \" ◀ 로그아웃 ▶\" onClick=\"logout();\"> 
					<br>
				</center></body></html>";
				}
				else{
					echo "<center><br><input type = \"button\" value = \" ◀ 로그인 ▶\" onClick=\"location.href='Login.php'\"><br></center> ";
				
				}
				?>
				<br>
				<br>
				
                </form>
            </div>
        </header>
		<center>

        <nav>
            <ul>
			<hr>
                <li><a href = "Mainhome.php">Home</a></li>
                <li><a href = "Bestseller.php">Best seller</a></li>
                <li><a href = "Subscribe.php">Subscribe</a></li>
                <li><a href = "Mypage.php">My Page</a></li>
			<hr>
            </ul>
        </nav>

		</center>
    </head>
    <body>
        <style>
            section {
                float: left;
            }
            aside {
                float: left;
                min-width: 250px
            }
        </style>

        <section  width: 4000px>
		 
            <article>
			<center>
                <table border = 0 bordercolor = "blue" cellspacing =1 cellpadding=5 >
				<tr>
				<?php
				$connect = mysqli_connect('localhost','root');
				$db = mysqli_select_db($connect, 'bookstore_db');
				$sql = "SELECT * from BOOK";
				$result = mysqli_query ($connect, $sql);	
				$i=0;	
				?>
				<style>
				ul{
				list-style:none;
				}
				</style>
				<form method="post" action = "book.php" name="books" />
				<input type="hidden" name="bookno"/>
				<input type="hidden" name="bookname"/>
				<tr>
				<?php
				while($row = mysqli_fetch_array($result)){
					
					if($i==3){
						echo"<tr>";
					}
					$bookName = $row['bookName'];
					$bookNo = $row['bookNo'];
					echo "<td align=center height=50 width = 250 >
					<a href=\"javascript:page_move('$bookName', '$bookNo');\"><b>$bookName</b></a>
			
					</td>";
					$i=$i+1;
					if($i==3){
						echo"</tr>";
						$i=0;
					}
				}
			
				?>
				
				</tr>

				</table>    
				</form>

            </article>
			
			
        </section>
        <aside id = "right" style="float:right">            
            <h4><a href = "cart.php">Shopping Cart</a></h4>
			<?php
			$max=sizeof($_SESSION['CART']);
			$totalprice = 0;
			$price=0;
			if($max==0){
				echo"현재 쇼핑카트에 물품이 없습니다.<br>";
			}
			else{
				for($i=0; $i<$max; $i++) { 
					$j=1;
	
					while (list ($key, $val) = each ($_SESSION['CART'][$i])) { 
						if($j%2!=0){
							$sql = "SELECT * from BOOK where bookNo like '{$val}'";
							$result = mysqli_query ($connect, $sql);   
							$row = mysqli_fetch_array($result);
							$bookName = $row['bookName'];
							$price = $row['price'];
							echo "<b>{$bookName}</b>  ";
							
						}
						else{
							echo "{$val}권 = {$price}원<br><br>";
							$totalprice += $price * $val;
						}
						$j++;
	
					} 
					
				} 
				echo  "<hr>총액 = <b>{$totalprice}원</br>";
			}
			?>

        </aside>
        <footer>
            
        </footer>
    </body>
</html>
