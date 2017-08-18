<?php
  // $error = ""; $successMessage = ""; POSSIBLE ELSE IF
  $errorContactForm = ""; $successContactMainForm = "";

  if (isset($_POST["contact-form-submit"])) {

    if (!$_POST["firstname"]) {
      $errorMainForm .= "A <strong>Name</strong> is required.<br>";
    }
    if (!$_POST["email"]) {
      $errorMainForm .= "An <strong>Email</strong> is required.<br>";

    }
    if (!$_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false){
      $errorMainForm .= "A valid <strong>Email address</strong> is required.<br>";

    }
    if (!$_POST["lastname"]) {
      $errorMainForm .= "A <strong>Company Overview</strong> required.<br>";

    }
    if (!$_POST["message"]) {
      $errorMainForm .= "A <strong>Company Overview</strong> required.<br>";

    }
    if ($errorMainForm != "") {
      $errorContactForm = '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: black;"><span aria-hidden="true" style="color: black;">&times;</span></button><strong>Oops!</strong><br>' . $errorContactForm . '</div>';

    } else {

      $emailTo = "jesushilariohernandez@gmail.com";

      $subject = "A Contact Form has been submitted for Full Stack Solutions' website.";

      $content =

      "<html>
          <body>
          	<h1>Contact Info:<h1>
            <h3>Some Basic Contact Info</h3>
            <h2>
              <strong style='color:rgb(9, 30, 172);'>Name: </strong>". $_POST['firstname']. " " . $_POST['lastname']. "
            </h2>
            <h2>
              <strong style='color:rgb(9, 30, 172)'>Email: </strong>". $_POST['email']. "
            </h2>
            <h2>
              <strong style='color:rgb(9, 30, 172)'>Message: </strong>". $_POST['message']. "
            </h2>

          </body>
        </html>";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: <" . $_POST['email'] . ">" . "\r\n";

      if (mail($emailTo, $subject, $content, $headers)) {
        $successContactMainForm = '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: black;"><span aria-hidden="true" style="color: black;">&times;</span></button><strong style="font-size:25px;">Awesome!</strong><br><h4 style="font-size:25px;">We will contact you soon.</h4><h4>In the mean time, let everyone know about us.</h4><a style="text-shadow: none;" data-sumome-share-id="5c97d1a3-e64c-495b-a113-16a6690f71f6"></a></div>';

      } else {
        $errorContactForm = '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: black;"><span aria-hidden="true" style="color: black;">&times;</span></button><strong>We sorry</strong><br>Your message couldn\'t be sent - please try again later.</div>';

      }
    }
}
?>
