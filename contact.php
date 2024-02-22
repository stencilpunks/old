<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "contact@stencilpunks.org";
    $email_subject = "Suggestion Box";
     
     
    function died($error) {
        // your error code can go here
        echo "Errors! ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Fix your errors!.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comment'])) {
        died('Problem!');       
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comment = $_POST['comment']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The email you entered isnt valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'No name.<br />';
  }
  if(strlen($comment) < 2) {
    $error_message .= 'No comment.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Comment: ".clean_string($comment)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<head>
<meta http-equiv="REFRESH" content="3;url=http://www.stencilpunks.org/requests.html"></HEAD>
</head>

<body style="background-attachment: fixed; background-repeat: no-repeat;" background="frame2.jpg" link="#00FF000" bgcolor="#000000" vlink="#00FF00" text="#FFFFFF" leftmargin="17">
 


Thanks for your feedback.
 
<?php
}
?>