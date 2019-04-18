<?
//Send email function
//overflow link, also losted in readme:
//https://stackoverflow.com/questions/5335273/how-to-send-an-email-using-php
function send_email($fname,$story) {
    $name = $fname;
    $story = $story;
    $subject = 'Subject: A new story';
    $message = 'Message: Story waiting for approval' .$story.'Submitted by:' .$name.;
    $to ='beadnor@a.com';
    $headers = 'From: noreply@a.com' . '\r\n';
    mail($to, $subject, $message, $headers);
}
?>