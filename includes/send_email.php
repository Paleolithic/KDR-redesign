<?php
ini_set('display_errors',1);

if(isset($_POST['email'])) {
    $email_to = "tjb@kdrib.org";
    // $email_to = "kdr.ib.alumni@kdrib.org";
    $email_subject = "KDR IB Distribution lists signup";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['list'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $selectedOptions = $_POST['list']; // required
 
    $error_message = "";
    
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  	if(!preg_match($email_exp,$email_from)) {
    	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  	}	
 
    $string_exp = "/^[A-Za-z .'-]+$/";
  	if(!preg_match($string_exp,$first_name)) {
    	$error_message .= 'The First Name you entered does not appear to be valid.<br />';
	}
 
	if(!preg_match($string_exp,$last_name)) {
	    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
	}
  
  	if(strlen($error_message) > 0) {
    	died($error_message);
	}
  
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message = "Name: ". clean_string($first_name) . " " . clean_string($last_name) ."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    // $email_message .= "KDR IB mailing lists: ".clean_string($lists[])."\n";
 	$email_message .= "KDRIB mailing lists: ";
 	foreach($selectedOptions[0] as $list){
 		$email_message .= $list . ", ";
 	}
 	

	// create email headers
	$headers = 'From: '.$email_to."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	$result = mail($email_to, $email_subject, $email_message, $headers);   

	if(!$result){
 		died("The email was not successfully sent");
	}
}
 
?>