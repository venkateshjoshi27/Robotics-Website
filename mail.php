<?php
    //$to = "echrob9@gmail.com";
    //$firstname = $_POST['fname'];
    $email= $_POST['email'];
    $text= $_POST['message'];
    //$phone= $_POST['phone'];
    $cmd = 'E:\Websites\ECHROB\send.py "'.$text.'"'.' "'.$email.'"';
    exec($cmd);
    //echo "Thank you for your Feedback!";
   
    //header("Location : http://localhost/index.php");
    //$x = exec($cmd);
    //exec('C:\Users\hi\Desktop\send.py "Hello bhavya 123"'); 
    // : '.$email.' - Feedback Message : '.$text.'"')
    //echo $x;
    //header('Location','index.html');


    /*$headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$firstname.'  '.$laststname.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>phone: '.$phone.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';

    if (mail($to, $email, $message, $headers))
    {
        echo 'The message has been sent.';
    }else{
        echo 'failed';
    }
*/
?>
 <script>

   alert("Thank you for your Feedback!");
   window.location = "http://localhost/";
   </script> 