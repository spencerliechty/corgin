<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this webhost. 
Contact your hosting provider regarding PHP configuration for your site.
*/

require_once('form_throttle.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	if (formthrottle_too_many_submissions($_SERVER["REMOTE_ADDR"]))
	{
		echo '{"MusePHPFormResponse": { "success": false,"error": "Too many recent submissions from this IP"}}';
	} 
	else 
	{
		emailFormSubmission();
	}
} 

function emailFormSubmission()
{
	$to = 'submit@corgisncritters.org,liechtywebdesign@gmail.com';
	$subject = 'Adoption Application Submission';
	
	$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/><title>' . htmlentities($subject,ENT_COMPAT | ENT_HTML401,'UTF-8') . '</title></head>';
	$message .= '<body style="background-color: #ffffff; color: #000000; font-style: normal; font-variant: normal; font-weight: normal; font-size: 12px; line-height: 18px; font-family: helvetica, arial, verdana, sans-serif;">';
	$message .= '<h2 style="background-color: #eeeeee;">New Form Submission</h2><table cellspacing="0" cellpadding="0" width="100%" style="background-color: #ffffff;">'; 
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Name of Applicant:</b></td><td>' . htmlentities($_REQUEST["custom_U3079"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Email:</b></td><td>' . htmlentities($_REQUEST["Email"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Cell Phone:</b></td><td>' . htmlentities($_REQUEST["custom_U2991"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Home Phone:</b></td><td>' . htmlentities($_REQUEST["custom_U3001"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Home Address:</b></td><td>' . htmlentities($_REQUEST["custom_U3051"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Name of Co&#45;Applicant:</b></td><td>' . htmlentities($_REQUEST["custom_U3057"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>State:</b></td><td>' . htmlentities($_REQUEST["custom_U3063"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>ZIP:</b></td><td>' . htmlentities($_REQUEST["custom_U3069"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>City:</b></td><td>' . htmlentities($_REQUEST["custom_U3084"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Email of Co&#45;Applicant:</b></td><td>' . htmlentities($_REQUEST["custom_U3097"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Work Hours:</b></td><td>' . htmlentities($_REQUEST["custom_U3105"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Referred by:</b></td><td>' . htmlentities($_REQUEST["custom_U3110"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Name of Dog Applied for:</b></td><td>' . htmlentities($_REQUEST["custom_U3115"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Relationship to Applicant:</b></td><td>' . htmlentities($_REQUEST["custom_U3121"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Home Address (if different from applicant):</b></td><td>' . htmlentities($_REQUEST["custom_U3126"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>City:</b></td><td>' . htmlentities($_REQUEST["custom_U3131"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>State:</b></td><td>' . htmlentities($_REQUEST["custom_U3139"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>ZIP:</b></td><td>' . htmlentities($_REQUEST["custom_U3144"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Home Phone:</b></td><td>' . htmlentities($_REQUEST["custom_U3149"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Cell Phone:</b></td><td>' . htmlentities($_REQUEST["custom_U3154"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Work Hours:</b></td><td>' . htmlentities($_REQUEST["custom_U3159"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>If Yes, please provide the name of the group and their contact information:</b></td><td>' . htmlentities($_REQUEST["custom_U3169"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>If Yes, what was the outcome of that application?:</b></td><td>' . htmlentities($_REQUEST["custom_U3176"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Also if Yes, please provide the name of the group and their contact information:</b></td><td>' . htmlentities($_REQUEST["custom_U3181"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Lot/Land Size:</b></td><td>' . htmlentities($_REQUEST["custom_U3193"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>If Yes, please describe type, height, width and length:</b></td><td>' . htmlentities($_REQUEST["custom_U3202"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>If No, what arrangements will you have for the dog's exercise and toilet area?:</b></td><td>' . htmlentities($_REQUEST["custom_U3207"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>During the day?:</b></td><td>' . htmlentities($_REQUEST["custom_U3213"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>At night?:</b></td><td>' . htmlentities($_REQUEST["custom_U3218"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>While you are away from home?:</b></td><td>' . htmlentities($_REQUEST["custom_U3223"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Number of Adults and/or Children in your household: (please provide ages of children):</b></td><td>' . htmlentities($_REQUEST["custom_U3233"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>If No, please explain:</b></td><td>' . htmlentities($_REQUEST["custom_U3239"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>If Yes, how will the allergy be controlled:</b></td><td>' . htmlentities($_REQUEST["custom_U3246"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>How many hours of the day is there an adult at home?:</b></td><td>' . htmlentities($_REQUEST["custom_U3252"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Describe a typical weekday in your home:</b></td><td>' . htmlentities($_REQUEST["custom_U3272"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Describe a typical weekend in your home:</b></td><td>' . htmlentities($_REQUEST["custom_U3277"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>How often do you travel that would necessitate the dog to be boarded or left with a petsitter?:</b></td><td>' . htmlentities($_REQUEST["custom_U3282"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Species/Breed:</b></td><td>' . htmlentities($_REQUEST["custom_U3294"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Year acquired/Duration of ownership:</b></td><td>' . htmlentities($_REQUEST["custom_U3299"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Why do you no longer have this pet?:</b></td><td>' . htmlentities($_REQUEST["custom_U3304"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Species/Breed:</b></td><td>' . htmlentities($_REQUEST["custom_U3309"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Age:</b></td><td>' . htmlentities($_REQUEST["custom_U3314"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Year acquired/Duration of Ownership:</b></td><td>' . htmlentities($_REQUEST["custom_U3319"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Weight:</b></td><td>' . htmlentities($_REQUEST["custom_U3330"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>If No, please explain:</b></td><td>' . htmlentities($_REQUEST["custom_U3339"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>If No, please explain:</b></td><td>' . htmlentities($_REQUEST["custom_U3351"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>If No, please explain:</b></td><td>' . htmlentities($_REQUEST["custom_U3359"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Name:</b></td><td>' . htmlentities($_REQUEST["custom_U3372"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Phone:</b></td><td>' . htmlentities($_REQUEST["custom_U3377"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Address:</b></td><td>' . htmlentities($_REQUEST["custom_U3382"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Pets treated by this vet:</b></td><td>' . htmlentities($_REQUEST["custom_U3387"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>If No, please explain:</b></td><td>' . htmlentities($_REQUEST["custom_U3398"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Why do you want this particular dog?:</b></td><td>' . htmlentities($_REQUEST["custom_U3403"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Do you have any questions before we proceed?:</b></td><td>' . htmlentities($_REQUEST["custom_U3412"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';
	$message .= '<tr><td valign="top" style="background-color: #ffffff;"><b>Is there anything else you feel we should know that would help us process your application?:</b></td><td>' . htmlentities($_REQUEST["custom_U3422"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</td></tr>';

	$message .= '</table><br/><br/>';
	$message .= '<div style="background-color: #eeeeee; font-size: 10px; line-height: 11px;">Form submitted from website: ' . htmlentities($_SERVER["SERVER_NAME"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</div>';
	$message .= '<div style="background-color: #eeeeee; font-size: 10px; line-height: 11px;">Visitor IP address: ' . htmlentities($_SERVER["REMOTE_ADDR"],ENT_COMPAT | ENT_HTML401,'UTF-8') . '</div>';
	$message .= '</body></html>';
	$message = cleanupMessage($message);
	
	$formEmail = cleanupEmail($_REQUEST['Email']);
	$headers = 'From:  submit@corgisncritters.org' . "\r\n" . 'Reply-To: ' . $formEmail .  "\r\n" .'X-Mailer: Adobe Muse 5.0.704 with PHP/' . phpversion() . "\r\n" . 'Content-type: text/html; charset=utf-8' . "\r\n";
	
	$sent = @mail($to, $subject, $message, $headers);
	
	if($sent)
	{
		echo '{"FormResponse": { "success": true,"redirect":"app-confirmation.html"}}';

	}
	else
	{
		echo '{"MusePHPFormResponse": { "success": false,"error": "Failed to send email"}}';
	}
}

function cleanupEmail($email)
{
	$email = htmlentities($email,ENT_COMPAT | ENT_HTML401,'UTF-8');
	$email = preg_replace('=((<CR>|<LF>|0x0A/%0A|0x0D/%0D|\\n|\\r)\S).*=i', null, $email);
	return $email;
}

function cleanupMessage($message)
{
	$message = wordwrap($message, 70, "\r\n");
	return $message;
}
?>
