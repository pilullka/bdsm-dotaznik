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
$spam=$_POST["spam"];
$meno=$_POST["meno"];
$email=$_POST["email"];
$text=$_POST["text"];
                                    // Multidimensional array
if (isset($_POST["dotaznik1"])){
    
    include  "otazky.php";
    echo "<input type=\"hidden\" id=\"dotaznik1\" name=\"dotaznik1\"";
    $dotaznik="základný dotazník";
}
    elseif (isset($_POST["dotaznik2"])){
        
        include "otazky2.php";
        echo "<input type=\"hidden\" id=\"dotaznik2\" name=\"dotaznik2\"";
        $dotaznik="rozširený dotazník";
    }

	elseif (isset($_POST["dotaznik3"])){
        
        include "otazky3.php";
        echo "<input type=\"hidden\" id=\"dotaznik3\" name=\"dotaznik3\"";
        $dotaznik="podrobný dotazník";
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
// multiple recipients
$to  = 'dotaznik@dopoma.sk' . ', '; // note the comma
// $to .= 'wez@example.com';

// subject
$subject = "vyplnený ". $dotaznik ." od " . $meno;

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
                            <tr><td>Iný bezpečnostný kontakt</td><td>' . htmlspecialchars($_POST["kontakt"]) .'</td></tr>
                            <tr><td>Vzdelanie</td><td>' . htmlspecialchars($_POST["vzdelanie"]) .'</td></tr>
                            <tr><td>Výška</td><td>' . htmlspecialchars($_POST["vyska"]) .'</td></tr>
                            <tr><td>Obvod hrude</td><td>' . htmlspecialchars($_POST["obvodhrude"]) .'</td></tr>
                            <tr><td>Farba oči / vlasov</td><td>' . htmlspecialchars($_POST["farbaoci"]) .'</td></tr>
                            <tr><td>Veľkosť pŕs</td><td>' . htmlspecialchars($_POST["prsia"]) .'</td></tr>
                            <tr><td>Úprava ochlpenia</td><td>' . htmlspecialchars($_POST["ochlpenie"]) .'</td></tr> 
                            <tr><td>Tetovanie</td><td>' . htmlspecialchars($_POST["tetovanie"]) .'</td></tr>
                            <tr><td>Piercing:</td><td>' . htmlspecialchars($_POST["piercing"]) .'</td></tr>
                            <tr><td>Fajčenie</td><td>' . htmlspecialchars($_POST["zavislosti"]) .'</td></tr>
                            <tr><td>Obvod hrude</td><td>' . htmlspecialchars($_POST["znamenia"]) .'</td></tr>
                            <tr><td>Preferencia vztahu</td><td>' . htmlspecialchars($_POST["preferencia"]) .'</td></tr>
                            <tr><td>1. Otrockú výchovu chcem</td><td>' . htmlspecialchars($_POST["otazka1"]) .'</td></tr>
                            <tr><td>2. Sexuálna orientácia:</td><td>' . htmlspecialchars($_POST["otazka2"]) .'</td></tr>
                            <tr><td>3.Lesbická alebo homosexuálna skúsenosť</td><td>' . htmlspecialchars($_POST["otazka3"]) .'</td></tr>
                            <tr><td>Koľko kát? </td><td>' . htmlspecialchars($_POST["T1"]) .'</td></tr>
                            <tr><td>Sexuálne praktiky</td><td>' . htmlspecialchars($_POST["bipraktiky"]) .'</td></tr>
                            <tr><td>4. Súložím s patnerom v priemere za mesiac:</td><td>' . htmlspecialchars($_POST["otazka4"]) .'</td></tr>
                            <tr><td>5. Ako často otrok onanuje:</td><td>' . htmlspecialchars($_POST["otazka5"]) .'</td></tr>
                            <tr><td>6 Stav</td><td>' . htmlspecialchars($_POST["otazka6"]) .'</td></tr>
                            <tr><td>7. Počet detí a vek:</td><td>' . htmlspecialchars($_POST["otazka7"]) .'</td></tr>
                            <tr><td>8. Submisivita :</td><td>' . htmlspecialchars($_POST["otazka8"]) .'</td></tr>
                            <tr><td>9. Skúsenosti s Pánom/Pani:</td><td>' . htmlspecialchars($_POST["otazka9"]) .'</td></tr>
                            <tr><td>10. Kokoľko krát ?</td><td>' . htmlspecialchars($_POST["pocetskusenosti"]) .'</td></tr>
                            <tr><td>Obvod hrude</td><td>' . htmlspecialchars($_POST["otazka10"]) .'</td></tr>
                            <tr><th colspan="2"><H4><b>Výchovné metódy ktoré ?</b></H4></th></tr>
                                        '.$naposlanie.'
                            
                            <tr><th align=\"left\" valign=\"top\>Doplnujňujúce info</th><td align=\"right\" valign=\"top\>' . htmlspecialchars($_POST["text"]) .'</td></tr>
                            
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

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= "From: $meno <dotaznik@dopoma.sk>" . "\r\n";
//$headers .= 'Cc: pilullka@gmail.com' . "\r\n";
//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
if ( $spam == "spam" || $spam == "Spam" ) {
	
 if (mail($to,$subject,$message,$headers)) {
		echo " <H1>Tvoj vyplnený dotaznik bol odoslany </H1> <br> <a href=\"index.php\" class=\"btn btn-primary\" role=\"button\">Na začiatok</a> <a href=\"http:google.sk\" class=\"btn btn-info\" role=\"button\">Odísť preč</a>";
	} 
    else {
		echo "<h1>Nepodarilo sa odoslať  skontroluj či si vyplnila kolonku email</h1>
        
        <br> <a href=\"index.php\" class=\"btn btn-primary\" role=\"button\">Na začiatok</a> <a href=\"http:google.sk\" class=\"btn btn-info\" role=\"button\">Odísť preč</a>";
	}
}
else { echo "<h1>Neodoslané - zle zadaná antispamova ochrana</h1> <br> <a href=\"index.php\" class=\"btn btn-primary\" role=\"button\">Na začiatok</a> <a href=\"http:google.sk\" class=\"btn btn-info\" role=\"button\">Odísť preč</a>"; }
?> 
</div>
</body>
</html>