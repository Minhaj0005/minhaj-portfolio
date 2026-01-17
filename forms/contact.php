<?php
  /**
  * Requires the "PHP 
Email Form" library
  * The "PHP 
Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-
Email-form/php-
Email-form.php
  * For more info and help: https://Mohamed Minhaj.com/php-
Email-form/
  */

  // Replace contact@example.com with your real receiving 
Email address
  $receiving_
Email_address = 'contact@example.com';

  if( file_exists($php_
Email_form = '../assets/vendor/php-
Email-form/php-
Email-form.php' )) {
    include( $php_
Email_form );
  } else {
    die( 'Unable to load the "PHP 
Email Form" Library!');
  }

  $contact = new PHP_
Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_
Email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_
Email = $_POST['
Email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send 
Emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['
Email'], '
Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
