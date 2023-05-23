<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['username'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['textarea'];
       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:contactus2.php?error');
       }
       else
       {
           $to = "pritishkannanbss@gmail.com";
           $email_from='noreply@bidstars.com';
           $email_subject="New Form Submission";
            $body="Name: $UserName.\n"."Email ID: $Email.\n"."Subject: $Subject.\n"."Message: $Msg.\n";
            $headers="From: $email_from \r\n";
            //$headers ="Reply-To: $Email\r\n";
               if(mail($to,$email_subject,$body,$headers))
               {
                   header("location:contactus2.php?success");
               }
        }
    }
    else
    {
        header("location:contactus2.php");
    }
?>
