<html>
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  </head>
<body style = "font-family:times, times new roman, serif;" bgcolor="#00BFFF" text="#000000" > 
<form name="form" action="/script.php" method="post">
       <table>
          <tr>
           <th colspan="2">Personal Data </th>
          </tr>
          <tr>
           <td> 
            <label> Name*:</label> 
           </td>
           <td> 
            <input type="text" name="name" id="name" size="40" maxlength="30" style="height: 20px;" required /> 
           </td>
          </tr>
          <tr>
           <td> 
            <label> E-mail:</label> 
           </td>
           <td> 
            <input type="text" name="email" id="email" size="40" maxlength="30" style="height: 20px;" /> 
           </td>
          </tr>
          <tr>
           <td> 
            <label> Age*:</label>
           </td>
           <td> 
            <input type="text" name="age" id="age" size="2" maxlength="2" style="height: 25px;" required />
           </td>
          </tr>
          <tr>
           <td> 
            <label> Nationality*: </label> 
           </td>
           <td> 
            <input type= "text" name="nationality" id="nationality" size="40" maxlength="40" style="height: 20px;" required />
           </td> 
          </tr>
          <tr>
           <td> 
            <label> Date of birth*:</label>
           </td>
           <td> 
            <input type="text" name="date_of_birth" id="date_of_birth" size="10" maxlength="10" style="height: 25px;" required />
           </td>
          </tr>
          <tr>
           <td> 
            <label> Gender:  </label> 
           </td>
           <td> 
            <input type="radio" name="gender" id="gender" value="F" /> F
            <input type="radio" name="gender" id="gender" value="M" /> M
           </td>
          </tr>
       </table>
	<tr>
         <td>
          <input type="submit" name="Register" id="Register" value="Submit" /> 
         </td>
	</tr>
</form>
</body>
</html>