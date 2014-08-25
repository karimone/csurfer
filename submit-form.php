<?php
/**
 * submit-form.php
 *
 * Author: Karim Norman Gorjux
 * Date  : 21/08/14
 * Time  : 17:34
 */

require_once('inc/definitions.php');

$NEW_LINE ="\r\n";


$headers  = "MIME-Version: 1.0" . $NEW_LINE;
$headers .= "Content-type: text/plain; charset=iso-8859-1" . $NEW_LINE;
$headers .= "From: CamperSurfing <" . CAMPERSURFING_EMAIL . ">" . $NEW_LINE;
$headers .= "Reply-To: CamperSurfing <" . CAMPERSURFING_EMAIL . ">" . $NEW_LINE;
$headers .= "X-Mailer: PHP/". phpversion();


if(isset($_POST["email"])) {
    $firstName = $_POST["first-name"];
    $lastName = $_POST["last-name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $textMessage = $_POST["message"];

    $message .= "First Name:\t{$firstName}" . $NEW_LINE;
    $message .= "Last Name:\t{$lastName}" . $NEW_LINE;
    $message .= "Email:\t{$email}" . $NEW_LINE;
    $message .= "Subject:\t{$subject}" . $NEW_LINE;
    $message .= $NEW_LINE.  "Message:" . $NEW_LINE;
    $message .= $textMessage .$NEW_LINE;

    $copy_message  = "This is a copy of the message you sent from the CamperSurfing form" . $NEW_LINE;
    $copy_message .= "##################################################################" . $NEW_LINE;
    $copy_message .= $message;
    $copy_message .= "##################################################################";

    // send the email to the destination
    mail(CAMPERSURFING_EMAIL, $subject, $message, $headers);

    // send the email to the user in copy
    mail($email, $subject, $copy_message, $headers);
}

