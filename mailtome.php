<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send</title>
</head>
<style>
    *, ::before, ::after {
        box-sizing: border-box;
    }

    @import url('https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&display=swap');

    html {
        font-size: 62.5%;
        font-family: 'Dongle', sans-serif;
    }

    body {
        margin: 0;
        padding: 0;
        background-color: black;
    }

    .mail-container {
        display: block;
        width: 60%;
        max-width: 500px;
        background-color: lightgrey;
        text-align: center;
        font-size: 2rem;
        font-family: 'Dongle', sans-serif;
        padding: 1em;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

    }

    .return {
      font-family: 'Dongle', sans-serif;
      color: red; 
    }

    .return:hover {
      color: green;

    }
</style>

<body>
    <div class="mail-container">
        
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
  }else echo "Failed";
?>       
    <br>
    <br>
    <a href="index.html#contact" class="return">Return to Website</a>
</div>    
</body>
</html>