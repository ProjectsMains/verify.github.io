<!DOCTYPE html>
<html>
  
<head>
    <style>
        h1 {
            color: green;
        }
    </style>
</head>
  
<body>
  <?php 
                  if(isset($_POST["email"]) && isset($_POST["code"])){
$to=$_POST["email"];
$subject=$_POST["Verification Code"];
$message="Your Verification code: " .$_POST["code"];
mail($to,$subject,$message);
echo "send successfully";}
            ?>
</body>
  
</html>
   
               
    

