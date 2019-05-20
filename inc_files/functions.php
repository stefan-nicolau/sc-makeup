<?

function safe_bvars($var){ 
	
	$con = mysqli_connect("localhost",'scoaladk_site', 'D6[_#l{kBf.g',"scoaladk_site");
	$ivar = trim(mysqli_real_escape_string($con,strip_tags($var)));

	//$ivar = str_replace(" ", "", $ivar); 

	return $ivar;

}

function sent_bmail($email, $subject, $mesaj_email){




	$headers  = 'MIME-Version: 1.0' . "\r\n";

	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headers .= "From: Scoala de Make-up <noreply@scoalademakeup.ro>\n";

    mail($email, $subject, $mesaj_email, $headers);
	

}



?>