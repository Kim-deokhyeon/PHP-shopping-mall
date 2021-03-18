<html>
   <head>
      <title> FROM 태그와 컨트롤 - 회원등록 </title>
   <head/>
   
   <body>
      <br><h2><center> 회원등록 화면 </center> </h2><hr>
      

      <center>
	 
      <table border = 1 bordercolor = "blue" width=700 cellspacing =1 cellpadding=5>
      
	  <tr>
         <td align= right> 사진 </td>
         <td colspan = 3>
         <?php 
			$uploadfile = $_FILES['upload'] ['name'];
			if(move_uploaded_file($_FILES['upload'] ['tmp_name'], $uploadfile))
			{
				echo "<img src=$uploadfile height=150 width=150 > <p>";
			}
		 
		 ?>
         </td>
      </tr>
	  <tr>
         <td align = right> 아이디 : </td>
         <td>
         <?php echo "<B>{$_POST['id']} </B><br>";?>
         </td>
         
         <td align = right> 성명 : </td>
         <td>
         <?php echo "<B>{$_POST['name']} </B><br>";?>
         </td>
         
      </tr>
      
      <tr>
         <td align = right> 비밀번호 : </td>
         <td colspan = 3>
         <?php echo "<B>{$_POST['pw1']} </B><br>";?>
         </td>
         
      </tr>
      
      <tr>
         <td align = right > 핸드폰 : </td>
         <td>
         <?php echo "<B>{$_POST['p1']}-{$_POST['p2']}-{$_POST['p3']}</B><br>";?>
         </td>
   
         <td align = right > 성별 : </td>
         <td>
         <?php echo "<B>{$_POST['sex']}";?>
         </td>
         
      </tr>
        
      <tr>
         <td align = right> 주소 : </td>
         <td colspan = 3>
         <?php echo "<B>{$_POST['addr']} </B><br>";?>
         </td>
      </tr>
      
      <tr>
         <td align= right> 남기고 싶은글 : </td>
         <td colspan = 3>
         <?php echo "<B>{$_POST['memo']} </B><br>";?>
         </td>
      </tr>
	  
	  
      </table><br>
      
      
      </form>
   </body>
</html>
         
            

