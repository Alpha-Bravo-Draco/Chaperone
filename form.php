<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

     $to = "hr@aions.co"; // Replace with your email address
    $subject = "Contact Form Submission from $name";
    $subjectt = "From Chaperone";
    $mesasgeresponce = "Thanks for Contacting Chaperone. We will get back to you soon";
    
    $headers = "From: $email";
    $headerss = "From: $to";
      if (mail($to, $subject, $message, $headers))
      {
echo "Thank you for your message. We will get back to you soon.";
          if(mail($email,$subjectt,$mesasgeresponce,$headerss))
          {
            header("Location: http://chaperone.aions.co/");
          }
          else
          { header("Location: http://chaperone.aions.co/");

          }
      }
       else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>