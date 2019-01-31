<?php
  include('includes/header.php');
?>

<h1 class="heading">Get in touch with us</h1>
<hr>
<div id="contact">
  <?php

    #Check the header injection
    function has_header_injection($value)
    {
      return preg_match("/[\r\n]/", $value);
    }

    if (isset($_POST['contact_submit'])) {
      $name = trim($_POST['name']);
      $email = trim($_POST['email']);
      $message = $_POST['message'];
      if (has_header_injection($name)||has_header_injection($email)) {
        die();
      }
      if ((!$name) || (!$email) || (!$message)) {
        echo "<h4 class='error'>All Fields are Required!</h4>
        <a href='contact.php' class='back-button'>&laquo; Go Back and Try Again</a>";
        exit;
      }

      $to_send = "mr.shahriyarshuvo@gmail.com";
      $subject = "Recicived a mail from $name";
      $message = "Name: $name\r\nEmail: $email\r\nMessage:\r\n$message";

      if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'subscribe') {
        # code...
        $message .= "\r\n\r\nPlease add $email to your mailing list.\r\n";

        $message = wordwrap($message, 72);

        $headers="MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain\r\n";
        $headers .= "charset=iso-8859-1\r\nFrom: $name <$email>\r\n";
        $headers .="X-Priority: 1\r\n";
        $headers .="X-MSMail-Priority: High\r\n\r\n";

        mail($to_send, $subject, $message, $headers);
      }

  ?>
  <h4 class="heading">Thanks for contacting Cocktail Cafe!</h5>
  <p class="paragraph">Please allow us 24 hours for response. We will to get
  back to you as soon as possible.
  </p>
  <br>
  <p><a href="index.php" class="back-button">&laquo; Go to Home Page</a></p>

<?php } else { ?>

  <form class="" action="" method="post" id="contact-form">
    <label for="name">Your Name</label>
    <input type="text" name="name" id="name">
    <label for="email">Your Email</label>
    <input type="email" name="email" id="email" required>
    <label for="message">Your Message</label>
    <textarea type="textarea" name="message" id="message"></textarea> <br>
    <input type="checkbox" name="subscribe" id="subscribe" value="subscribe" checked>
    <label for="message">Subribe to our newsletter</label> <br> <br>
    <input type="submit" name="contact_submit" value="Send Message &raquo;" class="send">
  </form>
  <?php } ?>

</div>
<hr>
<?php include('includes/footer.php'); ?>
