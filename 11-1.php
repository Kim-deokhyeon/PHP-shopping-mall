<html>
   <head>
      <title> 로그인 </title>
   <head/>
   
   <body>
      <br><h2><center> 로그인 화면  </center> </h2><hr>
      
      <form method="post" action = "11-2.php">
      <center>
      <table border = 1 bordercolor = "blue" width=600 cellspacing =1 cellpadding=5>
      <tr>
         <td align = right> ID : </td>
         <td>
            <input type = "text" size =10 maxlength = 10 name = "id">
         </td>
	  </tr>
	  
	  <tr>
         <td align = right> PW : </td>
         <td>
            <input type = "password" size= 10 name = "pw" maxlength =10 >
         </td>
      </tr>
      
     
	  

      </table><br>
      
      <table border = 0 width=800>
         <tr>
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

         