<?php

// Pear Mail Library
// require_once "pear_mail/Mail.php";

require "../config.php";


// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

	
// Create the email and send the message
$to = "support@cropzoo.com, sidharth@cropzoo.com, himanshu@cropzoo.com"; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: support@cropzoo.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.

$from = "support@cropzoo.com";

$headers .= "Reply-To: $email_address";	
//mail($to,$email_subject,$email_body,$headers);

$_headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $email_subject
);


// $smtp = Mail::factory('smtp' );

// var_dump($smtp);

// $mail = $smtp->send($to, $_headers, $email_body);

// var_dump($mail);

// var_dump($mail->getMessage());

// if (PEAR::isError($mail)) {
//    echo('<p>' . $mail->getMessage() . '</p>');
// } else {
//    echo "sent";
// }

// return true;			



/* to database */

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contact_form(name, email, phone, text, updated_date) values ('$name', '$email_address', '$phone','$message', NOW())";

if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    return true;
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    return false;
}

$conn->close();
 // Connection Closed









?>