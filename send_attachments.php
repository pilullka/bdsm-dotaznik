<!doctype html>
<html lang="sk">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dotazník odoslaný</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
<?php
if($_POST && isset($_FILES['file']))
{
	$recepient_email    = "dotaznik@dopoma.sk"; //recepient
    $from_email         = "dotaznik@dopoma.sk"; //from email using site domain.
    $subject            = "Attachment email from your website!"; //email subject line
    
    $sender_spam = filter_var($_POST["spam"], FILTER_SANITIZE_STRING); //capture sender name
    $sender_name = filter_var($_POST["meno"], FILTER_SANITIZE_STRING); //capture sender name
    $sender_email = filter_var($_POST["email"], FILTER_SANITIZE_STRING); //capture sender email
    $sender_message = filter_var($_POST["text"], FILTER_SANITIZE_STRING); //capture message
    $attachments = $_FILES['file'];
	
	//php validation
    if ($sender_spam == "spam" || $sender_spam == "Spam" || $sender_spam == "SPAM"){
    if(strlen($sender_spam)<>4 ){
        die('<div class="justify-content-center text-center"><h1>v poli spam nie je správny počet znakov</h1></div>');
    }
 
	
	if(strlen($sender_name)<4){
        die('<div class="justify-content-center text-center"><h1>Pole meno nesmie byť prázdne</h1></div>');
    }
	/* if (!filter_var($sender_email, FILTER_VALIDATE_EMAIL)) {
	  die('špat');
	}
    if(strlen($sender_message)<4){
        die('Too short message! Please enter something');
    } */
	}
		else { die ("<h1>Neodoslané - zle zadaná antispamova ochrana</h1> <br> <a href=\"index.php\" class=\"btn btn-primary\" role=\"button\">Na začiatok</a> <a href=\"http:google.sk\" class=\"btn btn-info\" role=\"button\">Odísť preč</a>");}
        // Multidimensional array
if (isset($_POST["dotaznik1"])){
    
    include  "otazky.php";
    echo "<input type=\"hidden\" id=\"dotaznik1\" name=\"dotaznik1\"";
    $dotaznik="základný dotazník";
}
    elseif (isset($_POST["dotaznik2"])){
        
        include "otazky2.php";
        echo "<input type=\"hidden\" id=\"dotaznik2\" name=\"dotaznik2\"";
        $dotaznik="Rozširený dotazník";
    }

	elseif (isset($_POST["dotaznik3"])){
        
        include "otazky3.php";
        echo "<input type=\"hidden\" id=\"dotaznik3\" name=\"dotaznik3\"";
        $dotaznik="rozširený dotazník";
    }
    
    $naposlanie="";  
            
            // Printing all the keys and values one by one
$sekcie = array_keys($zoznamotazok);
for($i = 0; $i < count($zoznamotazok); $i++) {
        $naposlanie .= "<tr><th align=\"left\" valign=\"top\" bgcolor=\"yellow\">".$sekcie[$i]."</th><td bgcolor=\"yellow\">&nbsp;</td></tr>";
    
    foreach($zoznamotazok[$sekcie[$i]] as $cislootazky => $otazky) {
        $naposlanie .="     <tr>
                    		<th align=\"left\" valign=\"top\">".$otazky."</th><td align=\"left\" valign=\"top\">". htmlspecialchars($_POST["$cislootazky"]) . "</td>
                    		</tr>"; 
    }
        echo "<br>"; }
    
    // subject
$subject = "vyplnený ". $dotaznik ." od " . $sender_name;

// message
$message = '
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title></title>
        <style>
            body {
                margin: 0px !important;
                padding: 0px !important;
        	}	
        	 @media only screen and (max-width:480px) {
                .wrapper {
                    width: 100% !important;
                }
            tr:nth-child(even) {
            background-color: #f2f2f2;
                                }
        </style>
    </head>
    <body>
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%" bgcolor="#2b3452" style="background-color:#2b3452;">
        <tr>
        <td align="left" valign="top">
        <![endif]-->
        <table align="center" cellpadding="0" cellspacing="0" width="100%" bgcolor="white">
            <tr>
                <td align="center" valign="top">
                <!--[if (gte mso 9)|(IE)]>
                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
				<td align="left" valign="top" width="600">
				<![endif]-->
                    <table border="0" cellpadding="0" cellspacing="0" width="800" class="wrapper">
                    	<tbody>
                    		<tr><td>Meno otroka</td><td>' . htmlspecialchars($_POST["meno"]) .'</td></tr> 
                            <tr><td>Email na otroka</td><td>' . htmlspecialchars($_POST["email"]) .'</td></tr> 
                            <tr><td>Messenger alebo azet nick</td><td>' . htmlspecialchars($_POST["massenger"]) .'</td></tr>
                            <tr><td>Prezývka</td><td>'. htmlspecialchars($_POST["prezyvka"]).'</td></tr>
                            <tr><td>Iný bezpečnostný kontakt</th><td>' . htmlspecialchars($_POST["kontakt"]) .'</td></tr>
                            <tr><td>Vzdelanie</th><td>' . htmlspecialchars($_POST["vzdelanie"]) .'</td></tr>
                            <tr><td>Výška</th><td>' . htmlspecialchars($_POST["vyska"]) .'</td></tr>
                            <tr><td>Obvod hrude</th><td>' . htmlspecialchars($_POST["obvodhrude"]) .'</td></tr>
                            <tr><td>Farba oči / vlasov</th><td>' . htmlspecialchars($_POST["farbaoci"]) .'</td></tr>
                            <tr><td>Veľkosť pŕs</th><td>' . htmlspecialchars($_POST["prsia"]) .'</td></tr>
                            <tr><td>Úprava ochlpenia</th><td>' . htmlspecialchars($_POST["ochlpenie"]) .'</td></tr> 
                            <tr><td>Tetovanie</th><td>' . htmlspecialchars($_POST["tetovanie"]) .'</td></tr>
                            <tr><td>Piercing:</th><td>' . htmlspecialchars($_POST["piercing"]) .'</td></tr>
                            <tr><td>Fajčenie</th><td>' . htmlspecialchars($_POST["zavislosti"]) .'</td></tr>
                            <tr><td>Obvod hrude</th><td>' . htmlspecialchars($_POST["znamenia"]) .'</td></tr>
                            <tr><td>Preferencia vztahu</th><td>' . htmlspecialchars($_POST["preferencia"]) .'</td></tr>
                            <tr><td>1. Otrockú výchovu chcem</th><td>' . htmlspecialchars($_POST["otazka1"]) .'</td></tr>
                            <tr><td>2. Sexuálna orientácia:</th><td>' . htmlspecialchars($_POST["otazka2"]) .'</td></tr>
                            <tr><td>3.Lesbická alebo homosexuálna skúsenosť</th><td>' . htmlspecialchars($_POST["otazka3"]) .'</td></tr>
                            <tr><td>Koľko kát? </th><td>' . htmlspecialchars($_POST["T1"]) .'</td></tr>
                            <tr><td>Sexuálne praktiky</th><td>' . htmlspecialchars($_POST["bipraktiky"]) .'</td></tr>
                            <tr><td>4. Súložím s patnerom v priemere za mesiac:</th><td>' . htmlspecialchars($_POST["otazka4"]) .'</td></tr>
                            <tr><td>5. Ako často otrok onanuje:</th><td>' . htmlspecialchars($_POST["otazka5"]) .'</td></tr>
                            <tr><td>6 Stav</th><td>' . htmlspecialchars($_POST["otazka6"]) .'</td></tr>
                            <tr><td>7. Počet detí a vek:</th><td>' . htmlspecialchars($_POST["otazka7"]) .'</td></tr>
                            <tr><td>8. Submisivita :</th><td>' . htmlspecialchars($_POST["otazka8"]) .'</td></tr>
                            <tr><td>9. Skúsenosti s Pánom/Pani:</th><td>' . htmlspecialchars($_POST["otazka9"]) .'</td></tr>
                            <tr><td>10. Kokoľko krát ?</th><td>' . htmlspecialchars($_POST["pocetskusenosti"]) .'</td></tr>
                            <tr><td>Obvod hrude</th><td>' . htmlspecialchars($_POST["otazka10"]) .'</td></tr>
                            <tr><td colspan="2"><H4><b>Výchovné metódy ktoré ?</b></H4></th></tr>
                                        '.$naposlanie.'
                            
                            <tr><th align=\"left\" valign=\"top\>Doplnujňujúce info</th><td>' . htmlspecialchars($_POST["text"]) .'</td></tr>
                            
                    	</tbody>
                    </table>
                <!--[if (gte mso 9)|(IE)]>
				</td>
				</tr>
				</table>
				<![endif]-->  
                </td>
            </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
    </body>
</html>

';


        
        
        
        
        
	
	$file_count = count($attachments['name']); //count total files attached
	$boundary = md5(mt_rand()); 
			
	if($file_count > 0){ //if attachment exists
		//header
        $headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "From:".$from_email."\r\n"; 
        $headers .= "Reply-To: ".$sender_email."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
        
        //message text
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/html; charset=Windows-12502\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
        $body .= chunk_split(base64_encode($message)); 

		//attachments
		for ($x = 0; $x < $file_count; $x++){		
			if(!empty($attachments['name'][$x])){
				
				if($attachments['error'][$x]>0) //exit script and output error if we encounter any
				{
					$mymsg = array( 
					1=>"The uploaded file exceeds the upload_max_filesize directive in php.ini", 
					2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form", 
					3=>"The uploaded file was only partially uploaded", 
					4=>"No file was uploaded", 
					6=>"Missing a temporary folder" ); 
					die($mymsg[$attachments['error'][$x]]); 
				}
				
				//get file info
				$file_name = $attachments['name'][$x];
				$file_size = $attachments['size'][$x];
				$file_type = $attachments['type'][$x];
				
				//read file 
				$handle = fopen($attachments['tmp_name'][$x], "r");
				$content = fread($handle, $file_size);
				fclose($handle);
				$encoded_content = chunk_split(base64_encode($content)); //split into smaller chunks (RFC 2045)
				
				$body .= "--$boundary\r\n";
				$body .="Content-Type: $file_type; name=\"$file_name\"\r\n";
				$body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
				$body .="Content-Transfer-Encoding: base64\r\n";
				$body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
				$body .= $encoded_content; 
			}
		}

	}else{ //send plain email otherwise
       $headers = "From:".$from_email."\r\n".
        "Reply-To: ".$sender_email. "\n" .
        "X-Mailer: PHP/" . phpversion();
        $body = $message;
	}
		
/* $sentMail = @mail($recepient_email, $subject, $body, $headers);
	
	if($sentMail) //output success or failure messages
	{       
		die('Thank you for your email');
	}else{
		die('Could not send mail! Please check your PHP mail configuration.');  
	}*/
	
	// Mail it
if ( $sender_spam == "spam" || $sender_spam == "Spam" ) {
	
 if (mail($recepient_email,$subject,$body,$headers)) {
		echo " <H1>Tvoj vyplnený dotaznik bol odoslany </H1> <br> <a href=\"index.php\" class=\"btn btn-primary\" role=\"button\">Na začiatok</a> <a href=\"http:google.sk\" class=\"btn btn-info\" role=\"button\">Odísť preč</a>";
	} 
    else {
		echo "<h1>Nepodarilo sa odoslať  skontroluj či si vyplnila kolonku email</h1>
        
        <br> <a href=\"index.php\" class=\"btn btn-primary\" role=\"button\">Na začiatok</a> <a href=\"http:google.sk\" class=\"btn btn-info\" role=\"button\">Odísť preč</a>";
	}
}
else { echo "<h1>Neodoslané - zle zadaná antispamova ochrana</h1> <br> <a href=\"index.php\" class=\"btn btn-primary\" role=\"button\">Na začiatok</a> <a href=\"http:google.sk\" class=\"btn btn-info\" role=\"button\">Odísť preč</a>"; }
	
	
	
	
	
}


?>
</div>
</body>
</html>