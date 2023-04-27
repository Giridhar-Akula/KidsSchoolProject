
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
    $gname = $_POST['gname'];
    $gmail = $_POST['gmail'];
    $cname = $_POST['cname'];
    $cage =$_POST['cage'];
    // $time =$_POST['time'];
    // $people =$_POST['people'];
    $msg =$_POST['message'];
   
    $subject = "New Appointment Request from Parent ".$gname;

    $message = "Name: ".$_POST['gname']."\n\n"
         . "Email: ".$_POST['gmail']."\n\n"
         . "Children Name: ".$_POST['cname']."\n\n"
         . "Children Age: ".$_POST['cage']."\n\n"
        //  . "Time: ".$_POST['time']."\n\n"
        //  . "People: ".$_POST['people']."\n\n"
         . "Message: ".$_POST['message'];

    
    // $message = "Name:".$_POST['name'] . "\n\n " . "Date :". $_POST['Date'].
    // "\n\n"."Email :" .$_POST['email'] ."\n\n" . "Phone :" .$_POST['phone']
    // ."\n\n" . "Time :" .$_POST['time']."\n\n" . "People :" .$_POST['people']
    // ."\n\n" . "Message :" .$_POST['message'];

    $headers = "From:" . $gmail;
 
    if(mail($to,$subject,$message,$headers))
    {
    echo '<script>alert("Mail Sent. Thank you '.$gname.', We Will Contact You Shortly")</script>';
    }
  
}

 ?>