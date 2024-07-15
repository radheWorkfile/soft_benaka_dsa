<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
        $this->load->library('user_agent');
        error_reporting(0);
    }
    
 
public function index()
{
     $layout['title'] = "Home";
     $layout['layout'] = "index.php";
     $this->load->view('themes/base', $layout);
}
public function about()
{
    $layout['title'] = "About Us";
    $layout['layout'] = "about.php";
    $this->load->view('themes/base', $layout);
}
public function loan()
{
    $layout['title'] = "Loan";
    $layout['layout'] = "loan.php";
    $this->load->view('themes/base', $layout);
}
public function contact()
{
    $layout['title'] = "Contact Us";
    $layout['layout'] = "contact.php";
    $this->load->view('themes/base', $layout);
}
public function registration()
{
    $layout['title'] = "Registration";
    $layout['layout'] = "registration.php";
    $this->load->view('themes/base', $layout);
}
public function login()
{
    $layout['title'] = "Login";
    $layout['layout'] = "login.php";
    $this->load->view('themes/base', $layout);
}



function formhandler()
{
    
    $us=$this->input->post();
    $name = $us['name'];
    $email = $us['email'];
    $phone = $us['phone']; 
    $message = $us['message'];
    
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
            // echo $name . $phone  . $email  . $message;
            
            $layout["response"] = "<h5 style='color:white'>Dear <span class='text-danger'>$name</span></h5><p>Something is wrong. It seems like internet is not working well.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone px-2 '></i><span>+91 9663383550, +91 8861794443</span></span></p>
                <p>Please, try again!</p><p>Thank You!</p>";
        }
   
        $layout['title'] = "Thank You";
        $layout['layout'] = "thankyou.php";
        $this->load->view('themes/base', $layout);
 
}






}
