<?php
$msg = $_POST['message'];
                $UserName = $_POST['mail'];

                $contact = "Booking Manager";
                $reply = "web-bookings@thesite.net";

                //Subject is always...
                $subject = "A message from ".$UserName;
                $from = $reply;

                //test data
                //$contactDetails = "test@test.net";


                // send message
                $message = "Message reads: ".$msg;
                //$to = "notify@test.com";
                $to = $_POST['mail'];
                //$headers = "From: " . $contact."\r\n"."Reply-To:".$reply;
                $headers = "From: " . $contact;
                mail($to, $subject, $message, $headers);
                echo "Mail Sent.";
?>