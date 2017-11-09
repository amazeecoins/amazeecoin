<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $message= $_POST['message'];
 $to = "r.shanmugam@yahoo.com";

 $subject = "Contact Form";
 $body = $name. "\n" . $message . "\n" . $phone. "\n" . $email;
 if (mail($to, $subject, $body)) {
   ?>
   <script>
   	alert("message send successfully");
   	window.location.href="contact.php";
   </script>
   <?php
  } else {
?>
	alert("message send failed");
	   	window.location.href="contact.php";
<?php
  }
 ?>