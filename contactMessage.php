
<?php 

if(isset($_POST['submit'])){
        
        
// $config['smtp_host'] = 'smtp.gmail.com';
// $config['smtp_user'] = 'ceo@jyothipowertech.in';
// $config['smtp_pass'] = 'pr@veen24081995';
// $config['smtp_port'] = 465;

// $host = "ssl://smtpout.jyothipowertech.in";
//$username = "ceo@jyothipowertech.in";
// $password = "jyothipowertech@123";
// $port = "465";
    $to = "giridharyadav20000104@gmail.com"; // this is your Email address
    //$from = "sudhini.sushma@gmail.com"; // this is the sender's Email address
    $pname = $_POST['pname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    // $cage =$_POST['cage'];
    // $time =$_POST['time'];
    // $people =$_POST['people'];
    $msg =$_POST['message'];
   
    $subject = "New Appointment Request from Parent ".$pname;

    $message = "Name: ".$_POST['pname']."\n\n"
         . "Email: ".$_POST['email']."\n\n"
         . "Children Name: ".$_POST['subject']."\n\n"
        //  . "Children Age: ".$_POST['cage']."\n\n"
        //  . "Time: ".$_POST['time']."\n\n"
        //  . "People: ".$_POST['people']."\n\n"
         . "Message: ".$_POST['message'];

    
    // $message = "Name:".$_POST['name'] . "\n\n " . "Date :". $_POST['Date'].
    // "\n\n"."Email :" .$_POST['email'] ."\n\n" . "Phone :" .$_POST['phone']
    // ."\n\n" . "Time :" .$_POST['time']."\n\n" . "People :" .$_POST['people']
    // ."\n\n" . "Message :" .$_POST['message'];

    $headers = "From:" . $email;
 
    if(mail($to,$subject,$message,$headers))
    {
    echo '<script>alert("Mail Sent. Thank you '.$pname.', We Will Contact You Shortly")</script>';
    }
  
}

 ?>