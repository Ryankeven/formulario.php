<html>
<body style = "font-family:times, times new roman, serif;" bgcolor="#00BFFF" text="#000000" >

 <?php
  if (empty($_POST["age"])) {
   echo "<br>Age field needs to be filled in!";
   }

  elseif (empty($_POST["name"])) {
   echo "<br>Name field needs to be filled in!";
   }

  elseif (empty($_POST["nationality"])) {
   echo "<br>Nationality field needs to be filled in!";
   }

  elseif (empty($_POST["date_of_birth"])) {
   echo "<br>Date of birth field needs to be filled in!";
   }

  else {
 ?>

 <br>

 Welcome <?php echo $_POST["name"]; ?>, we are currently reviewing your profile and will soon return you the result.<br>

 <?php
 }
 ?>

</body>
</html>