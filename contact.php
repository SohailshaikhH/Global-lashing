

<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


if (!empty($_POST["name"]) && !empty($_POST["number"])  && !empty($_POST["products"]) && !empty($_POST["comments"])) 
{
    
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) 
    
    {
        $result = file_get_contents( 'https://www.google.com/recaptcha/api/siteverify', false, stream_context_create( array(
  	                'http' => array(
  	                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
  	                    'method'  => 'POST',
  	                    'content' => http_build_query( array(
  	                        'response' => $_POST['g-recaptcha-response'],
  	                        'secret' => '6Ld4560mAAAAAAkG6gfgpfa6JXI9OjrecwmZRpx_' //google captcha code
  	                    ) ),
  	                ),
  	            ) ) );



  
  
  
  
  	       
  			




        $result = json_decode($result);
        // var_dump($result);
        $name = $_POST['name'];
        $number = $_POST['number'];
        $subject = $_POST['products'];
        $comments = $_POST['comments'];

        $mail = new PHPMailer();

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer'  => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true
            )
        );

        // Set PHPMailer to use SMTP.
        $mail->isSMTP();
        // Set SMTP host name.
        $mail->Host = 'smtp.gmail.com';

        // Set this to true if SMTP host requires authentication to send email.
        $mail->SMTPAuth = true;
        $mail->SMTDebug = 3;
        // Provide username and password.

        $mail->Username = 'noreply.globallashing@gmail.com'; // SMTP username
        $mail->Password = 'navofgkxrylbrygt'; // SMTP password
        // If SMTP requires TLS encryption then set it.
        $mail->SMTPSecure = "tls";
        // Set TCP port to connect to.
        $mail->Port = 587;

        $mail->From = "noreply.globallashing@gmail.com";
        $mail->FromName = "GLobal Lashing";

        $mail->addAddress('shaiksohail10m@gmail.com');
        $mail->addAddress('gaurav@webdakaar.com');

        $mail->isHTML(true);

        $mail->Subject = $subject;
        $mail->Body = "<table><tr><td>Name : </td><td>".$name."</td></tr>"."<tr><td>Number : </td><td>".$number."</td></tr>"."<tr><td>Products : </td><td>".$subject."</td></tr>"."<tr><td>Comments : </td><td>".$comments."</td></tr></table>";
        $mail->AltBody = "Name: ".$name.",  Number: ".$number.", Projects: ".$subject;

        if(!$mail->send()) 
        {
            echo '<script type="text/javascript">alert("Something Went Wrong.");</script>';
        } 
        else 
        {
            echo '<script type="text/javascript">
                window.location.href="thank-you.html";
            </script>';
        }
    }
}


?>




