<?php
session_start();

if (isset($_POST['submit'])) {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);
   


    $to = "benakacapital@gmail.com";
    $subject = "Enquiry From " . $email;
    $headers =  'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: '. $email . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $full_message = "<html>
                        <head><title>Enquiry Data</title></head>
                        <body>
                        <table>
                            <tr>
                            <td>Name</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $name</td>
                            </tr>
                            <tr>
                            <td>Email Id</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $email</td>
                            </tr>
                            <tr>
                            <td>Phone</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $phone</td>
                            </tr>
                           
                            <tr>
                            <td>Message</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $message</td>
                            </tr>
                           
                        </table>
                        </body>
                        </html>";
    $user = $email;
    $user_subject = "Thank You $name";
    $user_headers = 'From: Benaka Capital' . "\r\n";
    $user_message = "Dear $name.\nWelcome to .$name. \n We have got your query.We will reach you soon.\nThank You!";   
   
        if (mail($to, $subject, $full_message, $headers)) {
            mail($user, $user_subject, $user_message, $user_headers);
            $layout["response"] = "<h5 style='color:white'>Dear <span class='text-danger'>$name</span></h5><p>We have got your query. We will contact you soon.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone px-2 '></i><span>+91 9663383550, +91 8861794443</span></span></p>
                <p>Thank You!</p>";
        } else {
            echo $name . $mobile  . $email  . $message;
            
            $layout["response"] = "<h5 style='color:white'>Dear <span class='text-danger'>$name</span></h5><p>Something is wrong. It seems like internet is not working well.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone px-2 '></i><span>+91 9663383550, +91 8861794443</span></span></p>
                <p>Please, try again!</p><p>Thank You!</p>";
        }
   
    header("Location:thankyou");
   
}
