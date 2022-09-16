<?php
/* attachment
 * Custom PHP function to send an email with multiple attachments 
 * $to Recipient email address 
 * $subject Subject of the email 
 * $message Mail body content 
 * $senderEmail Sender email address 
 * $senderName Sender name 
 * $files Files to attach with the email 
 */ 
function multi_attach_mail($to, $subject, $message, $senderEmail, $senderName, $files = array()){ 
    // Sender info  
    $from = $senderName." <".$senderEmail.">";  
    $headers = "From: $from"; 
 
    // Boundary  
    $semi_rand = md5(time());  
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
 
    // Headers for attachment  
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";  
 
    // Multipart boundary  
    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
    "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";  
 
    // Preparing attachment 
    if(!empty($files)){ 
        for($i=0;$i<count($files);$i++){ 
            if(is_file($files[$i])){ 
                $file_name = basename($files[$i]); 
                $file_size = filesize($files[$i]); 
                 
                $message .= "--{$mime_boundary}\n"; 
                $fp =    @fopen($files[$i], "rb"); 
                $data =  @fread($fp, $file_size); 
                @fclose($fp); 
                $data = chunk_split(base64_encode($data)); 
                $message .= "Content-Type: application/octet-stream; name=\"".$file_name."\"\n" .  
                "Content-Description: ".$file_name."\n" . 
                "Content-Disposition: attachment;\n" . " filename=\"".$file_name."\"; size=".$file_size.";\n" .  
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
            } 
        } 
    } 
     
    $message .= "--{$mime_boundary}--"; 
    $returnpath = "-f" . $senderEmail; 
     
    // Send email 
    $mail = mail($to, $subject, $message, $headers, $returnpath);  
     
    // Return true if email sent, otherwise return false 
    if($mail){ 
        return true; 
    }else{ 
        return false; 
    } 
}
// Email configuration 
$to = 'dotaznik@dopoma.sk'; 
$from = 'dotaznik@dopoma.sk'; 
$fromName = 'Sender Name'; 
 
$subject = 'Send Email with Multiple Attachments in PHP by CodexWorld';  
 
// Attachment files 
$files = array( 
    $_FILES['attachment_1']['name'], 
    $_FILES['attachment_2']['name'] 
); 
 
$htmlContent = ' 
    <h3>Email with Multiple Attachments by CodexWorld</h3> 
    <h4>This HTML email is sent from the script with multiple attachments using PHP.</h4> 
    <p><b>Total Attachments:</b> '.count($files).'</p>'; 
 
// Call function and pass the required arguments 
$sendEmail = multi_attach_mail($to, $subject, $htmlContent, $from, $fromName, $files); 
 
// Email sending status 
if($sendEmail){ 
    echo 'prilohy boli odoslane.'; 
}else{ 
    echo 'Email sending failed!'; 
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Send Attachment With Email</title>
</head>
<body>
    <div style="display:flex; justify-content: center; margin-top:10%;">
         <form method="post" enctype="multipart/form-data" action="">
                        <fieldset>
                            <legend>HTML Email with Multiple Attachments using PHP</legend>
                            <div>
                                <div class="large"></div>
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="Email" required/>
                            </div>
                            <div>
                                <textarea name="message" placeholder="Message" required></textarea>
                            </div>
                            <div>
                                <div class="small">First Email Attachment</div>
                                <input type="file" name="attachment_1">
                            </div>
                            <div>
                                <div class="small">Second Email Attachment</div>
                                <input type="file" name="attachment_2"/>
                            </div> 
                            <input type="submit" name="submit" value="Send"/>
                        </fieldset>    
                    </form>
    </div>
</body>
</html>