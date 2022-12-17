
   
            <?php 
                  if(isset($_post["email"]) && isset($_post["code"])){
$to=$_post["email"];
$subject=$_post["Verification Code"];
$message="Your Verification code: " .$_post["code"];
mail($to,$subject,$message);
echo "send successfully";}
            ?>
    

