<html>

<title>Mail</title>

<head>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css'>

<script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js'></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js'></script>

<script type="text/javascript">

 function a(){

              swal({
                title: "Thank you for contacting Us. We will contact you shortly.",

                timer:5000,

               

              }, function(){

                    window.location.href = "https://designskills.com/index";

              });

};

</script>

</head>

<body>



<?php

$today = date("d-m-Y"); 

$email1  = 'leads@designskills.com';

// 'shubhada@trimitiy.com.test-google-a.com,website@trimitiy.com.test-google-a.com,business@trimitiy.com.test-google-a.com,enquiry@trimitiy.com.test-google-a.com';



if(isset($_POST['submit']))



{

$name  = $_POST["name"];

$email  = $_POST["email"];

$no  = $_POST["phone"];

$select  = $_POST["select"];

$msg  = $_POST["msg"];



$mysite = "Design Skills";

$webmaster = "Thank You From $mysite";





$subject = "Email From $mysite - Contact Us";



$message = "<html><body><br>

<table width='100%' border='1' cellspacing='0' cellpadding='5'>

 <tr>

    <td width='32%'>Name</td>

    <td width='65%'> ".$name."</td>

  </tr>

  <tr>

    <td>Email</td>

    <td> ".$email." </td>

  </tr>

  <tr>

    <td>Contact No</td>

    <td> ".$no." </td>

  </tr> 

   <tr>

    <td>Course</td>

    <td> ".$select." </td>

  </tr>



  <tr>

    <td>Message</td>

    <td> ".$msg." </td>

  </tr>

</table>

</body></html>";



$from_address="contact@designskills.com";

$from_name="Design Skills";



$headers = "MIME-Version: 1.0\r\n"

  ."Content-Type: text/html; charset=utf-8\r\n"

  ."Content-Transfer-Encoding: 8bit\r\n"

  ."From: =?UTF-8?B?". base64_encode($from_name) ."?= <$from_address>\r\n"

  ."X-Mailer: PHP/". phpversion();





  if(mail($email1, $subject, $message, $headers, "-fwebmaster@{$_SERVER['SERVER_NAME']}")) 

    {

    echo "<script type='text/javascript'>a();</script>";  

    } 

     else 

    { 

      

    }

}

else

{

    

}





?>



</body>

</html>