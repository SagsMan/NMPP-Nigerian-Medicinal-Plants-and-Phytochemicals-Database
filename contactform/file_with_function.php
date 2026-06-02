<head><meta http-equiv="refresh" content="3; url=https://nmppdb.com.ng/"></head>

<?
$mail_to_send_to = "softwareclone@gmail.com";
$from_email = "info@nmppdb.com.ng";
$sendflag = $_REQUEST['sendflag'];    
$name=$_REQUEST['name'];
if ( $sendflag == "send" )
        {
                $subject= "Contact Form - NMPPDP";
                $email = $_REQUEST['email'] ;
                $message= "\r\n" . "Name: $name"  ."\r\n". "Email: $email" . "\r\n"; //get recipient name in contact form
                $message = $message.$_REQUEST['message'] . "\r\n" ;//add message from the contact form to existing message(name of the client)
                $headers = "From: $from_email" . "\r\n" . "Reply-To: $email"  ;
                $a = mail( $mail_to_send_to, $subject, $message, $headers );
                if ($a)
                {
                     print("Message was sent, you'll be redirected to the website in 2 secs.");
                } else {
                     print("Message wasn't sent, please check that you have changed emails in the bottom");
                }
        }
        ?>