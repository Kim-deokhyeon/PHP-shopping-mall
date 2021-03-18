
<html>
   <head>
      <title> 로그인 </title>
   <head/>
   
   <body>
      <br><h2><center> 민경's book store  </center> </h2><br><hr><br>
	  <?php
	  session_start();
	
		$_SESSION['ID']=null;
		$_SESSION['PW']=null;
		$_SESSION['NAME']=null;
		$_SESSION['PERMISSION']=null;
		$_SESSION['CARTNO']=null;
		$_SESSION['CART']=array();

	  ?>
      
      <form method="post" action = "Login1.php">
      <center>
      <table border = 0 bordercolor = "blue" width=300 cellspacing =1 cellpadding=5>
      <tr>
         <td align = right><b> ID : </b></td>
         <td align = center>
            <input type = "text" size =30 maxlength = 30 name = "id">
         </td>
	  </tr>
	  
	  <tr>
         <td align = right><b> PW : </b></td>
         <td align = center>
            <input type = "password" size= 30 name = "pw" maxlength =20 >
         </td>
      </tr>
      
     
	  

      </table><br>
      
      <table border = 0 width=800>
         <tr>
            
			<td align = center>
			<input type="button" value="◀ SIGN UP ▶" onClick="location.href='Signup.php'">
			</td>
			<td align = center>
            <input type = "submit" value = " ◀ LOGIN ▶"> &nbsp;&nbsp;&nbsp;&nbsp;
            </td>

         </tr>
      </table>
      <center>
         <input type = "hidden" name = "thema" value = "로그인 서식">
      </center>
      </form>
   </body>
</html>

