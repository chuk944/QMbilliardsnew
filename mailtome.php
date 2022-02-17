<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending</title>
</head>
<style>
  .send-container {
    display:block;
    width: 50%;
    margin: auto;
    text-align: center;
    border: 2px solid red;
  }
</style>

<body>
  <div class="send-container">
<?php
$name = $_POST["fname"];

$email = $_POST["femail"];

$message = $_POST['fmessage'];

//the subject
$sub = "Quartermaster Comment";
//the message
 $msg = "$name at $email has sent you the following message:\n$message";
//recipient email here
$rec = "chuk944@gmail.com";
//send email
  if(mail($rec,$sub,$msg)) {
    echo "Your message was sent.";
    echo "Thank You!";
    // header("Location: index.html#contact");
  }else echo "Failed";
?>
<br/>
<a href="index.html#contact" class="return">Return to Website</a>
</div>



    
</body>
</html>


