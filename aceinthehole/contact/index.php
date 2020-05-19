<?php
include '../includes/db.inc.html.php';
/**
 * This example shows how to handle a simple contact form.
 */

$msg = '';
//Don't run this unless we're handling a form submission


if (isset($_POST['visitorname']) And empty($_POST['honeypot'])) {
    /* Since the form has been submitted, lets capture the submission values so we can display them to the user on the success page */

    $visitorname = $_POST['visitorname'];
    $email = $_POST['email'];
    $party = $_POST['party'];
    $questioncomment = $_POST['questioncomment'];
    date_default_timezone_set('Etc/UTC');

    require '../PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'mail.lauriewandle1030.webhostingforstudents.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'phpmailer@lauriewandle1030.webhostingforstudents.com';
    $mail->Password = 'phpmailer1111';
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('phpmailer@lauriewandle1030.webhostingforstudents.com', 'Laurie Wandle');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('phpmailer@lauriewandle1030.webhostingforstudents.com', 'Laurie Wandle');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    $mail->addReplyTo($email, $visitorname);
    $mail->Subject = 'PHPMailer contact form';
    //Keep it simple - don't use HTML
    $mail->isHTML(true);
    //Build a simple message body
    $mail->Body = <<<EOT
Email: $email<br>
Name: $visitorname<br>
Message: $questioncomment
EOT;
    //Send the message, check for errors
    if (!$mail->send()) {
        //The reason for failing to send will be in $mail->ErrorInfo
        //but you shouldn't display errors to users - process the error, log it on your server.
        echo 'Mailer Error' . $mail->ErrorInfo;
    } else {
        include 'success.html.php';
    }
} else {
    include 'contact.html.php';
}
?>
