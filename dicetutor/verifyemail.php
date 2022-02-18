<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
        
   <?php
    /**
// (A) MAIL SETTINGS
$mailTo = "razorblueberry@gmail.com";
$mailSubject = "Test Mail With Image";
$from = "yahisable@gmail.com";

// (B) MAIL MESSAGE
// HOST THE IMAGE ON YOUR OWN SERVER!
// ALSO REMEMBER TO PROVIDE THE DIRECT LINK JUST-IN-CASE http://localhost/DiceTutor/Dice Tutuors

// (B) MAIL MESSAGE
// DIRECTLY EMBED IMAGE INTO EMAIL WITH BASE64 ENCODE
$img = file_get_contents('copy.jpg');
$imgdata = base64_encode($img);
$mailBody = "<img src='data:image/x-icon;base64,$imgdata'/>";

// (C) HEADER - HTML MAIL
$mailHead = implode("\r\n", [
  "MIME-Version: 1.0",
  "Content-type: text/html; charset=utf-8"
]);

$headers .= 'From: '.$from ."\r\n".
	'Reply-To: '.$mailTo."\r\n" .
	'X-Mailer: PHP/' . phpversion();


// (D) SEND
echo mail($mailTo, $mailSubject, $mailBody, $headers)
  ? "OK" : "ERROR" ;
      **/  
	?>

   </body>
</html>