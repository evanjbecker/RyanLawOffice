<?php 
    // ERROR REPORTING
    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");
    // ERROR REPORTING

    $to = "josephryan@theryanlawoffice.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $phone = $_POST['phone'];
    $message = $name . " with phone number " . $phone . " wrote the following:" . "\n\n" . $_POST['message'] . " with phone number " . $_POST['phone'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    echo mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    //header('Location: contact-me.html');
?>