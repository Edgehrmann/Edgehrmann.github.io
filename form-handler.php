<!DOCTYPE html>
<html>
<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST["myFName"]; 
      $email = $_POST["myEmail"]; 

      
      echo "Thank you, $name! Your email address is: $email";
  }
  ?>
</body>
</html>

