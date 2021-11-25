<?php

$to = "jeegames05@gmail.com"; 

$subject = "Mail from PHP"; 
$text = $_GET["text"];
$message = "Hi,\r\nThis mail has been sent using PHP!"; 

$success = mail($to, $subject, $message);
$count;
echo($text);
if($success)
{ $count++;
  
  echo("success" . $count);
}
else {
  $count++;
  echo("failed" . $count);
}



?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <title></title>
  </head>
  <body>
    <form action="index.php" method="get" accept-charset="utf-8">
      
      <input type="text" name="text" id="" value="" />
      <input type="submit" name="" id="" value="submit" />
    </form>
  </body>
</html>