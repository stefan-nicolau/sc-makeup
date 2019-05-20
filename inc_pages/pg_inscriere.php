<div class="div-inscriere" style="width:980px; margin:20px auto; font-size: 16px; color:#FFFFFF; " align="center" >
    <h1 align="left" style="color:#FFFFFF; font-size: 28px;">Formular de inregistrare</h1> 
<?php

// $newsletter = isset($_POST['submit']) ? ($_POST['newsletter'] ? $_POST['newsletter'] : 0) : 1;

if(isset($_POST['submit'])){

	$nume = safe_bvars($_POST['nume']);
	$prenume = safe_bvars($_POST['prenume']);
	$email = safe_bvars($_POST['email']);
	$varsta = safe_bvars($_POST['varsta']);
	$telefon = safe_bvars($_POST['telefon']);
	$localitate = safe_bvars($_POST['localitate']);
	$studii = safe_bvars($_POST['studii']);
	$modul1 = safe_bvars($_POST['modul1']);
	$modul1a = safe_bvars($_POST['modul1a']);
	$modul1b = safe_bvars($_POST['modul1b']);
	$modul2 = safe_bvars($_POST['modul2']);
	$modul3 = safe_bvars($_POST['modul3']);
	$modul4 = safe_bvars($_POST['modul4']);
	// $lucru = safe_bvars($_POST['lucru']);
	$perioada = safe_bvars($_POST['perioada']);

	$ip = $_SERVER['REMOTE_ADDR'];
	$data = time();
	

	if(empty($nume)){
		$err_msg = 'Nu ai completat numele!';
		unset($nume);
	} elseif(empty($prenume)){
		$err_msg = 'Nu ai completat prenumele!';
		unset($telefon);
	} elseif(empty($email)){
		$err_msg = 'Nu ai completat adresa de email!';
		unset($email);
	} elseif(!@eregi('^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$', $email)){
		$err_msg = 'Adresa de email nu este valida!';
		unset($email);
	} elseif(empty($telefon)){ 
		$err_msg = 'Nu ai completat numarul de telefon!';
		unset($telefon);
	} elseif(strlen($telefon) < 10){
		$err_msg = 'Numarul de telefon nu este valid!';
		unset($telefon);
	} elseif(empty($varsta)){
		$err_msg = 'Nu ai completat campul "Varsta"!';
		unset($varsta);
	} elseif(empty($localitate)){
		$err_msg = 'Nu ai completat campul "Localitate"!';
		unset($localitate);
	} elseif(empty($studii)){
		$err_msg = 'Nu ai completat campul "Studii"!';
		unset($studii);
	} elseif(empty($modul1) AND empty($modul2)){
		$err_msg = 'Nu ai ales cursul!';
		unset($modul);
	// } elseif(empty($lucru)){
	// 	$err_msg = 'Nu ai completat campul "Ocupatie"!';
	// 	unset($lucru);
	} elseif(empty($perioada)){
		$err_msg = 'Nu ai completat perioada!';
		unset($perioada);
	} else {
		$succes = 33;
		$msg = '<br><br>Formularul a trimis cu succes!<br><br><br><br>';
	}
}
if($succes == 33) {


	$nume2 = $prenume.' '.$nume;
	$modulq = $modul1.'; '.$modul1a;

	$con = mysqli_connect("localhost",'scoaladk_site', 'D6[_#l{kBf.g',"scoaladk_site");

	if (mysqli_connect_errno())	{
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} else {
		mysqli_query($con,"INSERT INTO inscrieri (nume, email, telefon, varsta, localitate, studii, modul, perioada) VALUES ('$nume2', '$email','$telefon','$varsta','$localitate','$studii','$modulq','$perioada')");
	}

	mysqli_close($con);


	// if ($_POST['newsletter']) {

	//     // insert customer into whiteimage database
	//     // insert customer into whiteimage database

	//     $params = "lst=4118"
	//         . "&email=" . $email
	//         . "&from=scoala_de_manichiura"
	//         . "&nl=" . 1
	//         . "&lastname=" . $nume
	//         . "&firstname=" . $prenume
	//         . "&phone=" . $telefon
	//         . "&status=Activ";
	    
	//     $ch = curl_init($url);
	//     curl_setopt($ch, CURLOPT_URL, "https://www.whiteimage.eu/clients/wlm/subscribe.php"); 
	//     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	//     curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
	//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	//     curl_exec($ch); 
	//     curl_close($ch);                      

	//     // insert customer into whiteimage database
	//     // insert customer into whiteimage database

	// }
    
	$mesaj_email = ' 
		<div style=" " align="left">
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td align="left" valign="top">
			<h2>Inscriere scoalademakeup.ro</h2><br>
			<b>Nume: </b>'.$nume.'<br><br>
			<b>Prenume: </b>'.$prenume.'<br><br>
			<b>Email: </b>'.$email.'<br><br>
			<b>Varsta: </b>'.$varsta.'<br><br>
			<b>Telefon: </b>'.$telefon.'<br><br>
			<b>Localitate: </b>'.$localitate.'<br><br>
			<b>Studii: </b>'.$studii.'<br><br>
			<b>Modul: </b>'.$modulq.'<br><br>
			<b>Perioada: </b>'.$perioada.'<br><br>
			<hr color="#555855" size="1" width="100%">
			<b>Data: </b>'.date('j M Y G:i:s', $data).'<br>
			<b>Ip: </b>'.$ip.'<br>
			<br><br><br>
	</td>
  </tr>
</table>

		</div>
	';	
    $subject = "Inscriere Scoala de Make-up";
	
    $email_admin = "office@scoalademakeup.ro";
    sent_bmail($email_admin, $subject, $mesaj_email);
	
	 
	$mesaj_email2 = ' 
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td align="left" valign="top"><br>
			<span>Buna '.$nume.',</span><br><br><br>
			<span>
			Iti multumim ca te-ai inscris pe site-ul <a href="http://www.scoalademakeup.ro/">www.scoalademakeup.ro/</a>.
			<br><br><br>
			<div align="left">
				<strong>Aceasta este doar o inregistrare. In scurt timp de la trimiterea formularului veti fi contactat de un operator. <br>
				Inscrierea la curs este confirmata doar dupa ce achitati jumatate din suma modulului ales.
</strong>			</div>
			<br><br><br>
			<div align="left">
				<strong>Pentru mai multe detalii, va rugam sa ne contactati la nr de tel : 021.252.29.98 / 031.690.06.84</strong>			</div>
			<br><br><br>
	</td>
  </tr>
</table>
	';
    $subject2 = "Inregistrare Scoala de make-up"; 
    sent_bmail($email, $subject2, $mesaj_email2);

    $amount = $modul1a ? 2700 : 1350;
    if (time() > 1462050000 && time() < 1464728400) $amount *= 0.8;
	
    echo "<iframe height='1' width='1' scrolling='no' marginheight='0' marginwidth='0' frameborder='0' src='//event.2parale.ro/events/salecheck?amount=".$amount."&campaign_unique=442160f12&confirm=9c847930f397d99b&transaction_id=".str_replace('+','_',urlencode($nume2.$email))."&description=".($modul1a ? 'makeup-modul-1+2' : 'makeup-modul-1')."'></iframe>";

	echo '<br><br>Formularul a fost trimis cu succes!<br><br><br><br>Va multumim!';
	echo '<br><br><br><a href="/" style="color:#FFFFFF; ">Inapoi catre prima pagina</a><br><br><br>';?>
	
    <!-- Google Code for 2scoalademakeup.ro Conversion Page -->
    <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 824191293;
    var google_conversion_label = "nhugCIr_u3oQvdKAiQM";
    var google_remarketing_only = false;
    /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/824191293/?label=nhugCIr_u3oQvdKAiQM&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>


<?php } else {
?>

    <form class="registration-form" action="" method="post">  
            <input type="hidden" name="localitate" value="Bucuresti">       
        <table width="500" border="0" cellspacing="4" cellpadding="0" style="color:#FFFFFF; ">
          <tr>
            <td colspan="2" style="background-color:#ffffff; color:#FF0000; " align="right"><strong><?php echo $err_msg?></strong></td>
          </tr>
          <tr>
            <td align="left" style="width: 200px">*Nume:</td>
            <td align="left"><input type="text" class="input" name="nume" value="<?php $nume?>" /></td>
          </tr>
          <tr>
            <td align="left" style="width: 200px">*Prenume:</td>
            <td align="left"><input type="text" class="input" name="prenume" value="<?php $prenume?>" /></td>
          </tr>
          <tr>
            <td align="left" style="width: 200px">*Email:</td>
            <td align="left"><input type="text" class="input" name="email" value="<?php $email?>" /></td>
          </tr>
          <tr>
            <td align="left" style="width: 200px">*Varsta:</td>
            <td align="left"><input type="number" class="input" name="varsta" value="<?php $varsta?>"  min="15" max="99" /></td>
          </tr>
          <tr>
            <td align="left" style="width: 200px">*Telefon:</td>
            <td align="left"><input type="text" class="input" name="telefon" value="<?php $telefon?>" /></td>
          </tr>
          <tr>
            <td align="left" style="width: 200px">*Studii:</td>
            <td align="left"><input type="text" class="input" name="studii" value="<?php $studii?>" /></td>
          </tr>
          <tr>
            <td align="left" style="width: 200px">*Ce curs ati dori<br class="new-line-mobile-hide" />
              sa urmati:</td>
            <td align="left">
            <label for="modul0"><input type="checkbox" name="modul1" value="Modul 1 - Make-up conventional " class="checkbox-input" id="modul0" <?php if($modul1 == 'Modul 1 - Make-up conventional '){ echo 'checked="checked" '; } ?> /> Modul 1 - Make-up conventional  </label>
            <br />

            <label for="modul1a"><input type="checkbox" name="modul1a" value="Modul 2 - Make-up special" class="checkbox-input" id="modul1a" <?php if($modul1 == 'Modul 2 - Make-up special'){ echo 'checked="checked" '; } ?> /> Modul 2 - Make-up special </label>
            <br />

            </td>
          </tr>
          <!-- <tr>
            <td align="left" style="width: 200px">Lucrati:</td>
            <td align="left">
            <label for="lucru0"><input type="radio" name="lucru" value="intr-un salon" id="lucru0" <?php if($lucru == 'intr-un salon'){ echo 'checked="checked" '; } ?>/> intr-un salon</label>
            <br />
            <label for="lucru1"><input type="radio" name="lucru" value="particular"  id="lucru1" <?php if($lucru == 'particular'){ echo 'checked="checked" '; } ?>/> sunteti particular</label>
            </td>
          </tr> -->
          <tr>
            <td align="left" style="width: 200px">*In ce perioada va<br class="new-line-mobile-hide" />
              intereseaza sa faceti cursul:</td>
            <td align="left"><input type="text" class="input" name="perioada" value="<?php $perioada?>" /></td>
          </tr>
          <!-- <tr>
            <td align="left" style="width: 200px">Vreau sa ma abonez la<br />newsletterul Melkior Professional</td>
            <input type="radio" name="newsletter" value="1" class="newsletter" <?php if(isset($_POST['newsletter']) && $_POST['newsletter'] == 1){ echo 'checked="checked" '; } ?> /> DA
            <input type="radio" name="newsletter" value="0" class="newsletter" <?php if(isset($_POST['newsletter']) && $_POST['newsletter'] == 0){ echo 'checked="checked" '; } ?> /> NU
          </tr> -->
          <tr><td>&nbsp;</td></tr><br>
          <tr><td>*campuri obligatorii</td></tr><br>
          <tr>
            <td colspan="2" align="left" style="color:#FFF; ">
        	Aceasta este doar o inregistrare. In scurt timp de la trimiterea formularului veti fi contactat de un operator. Inscrierea la curs este confirmata doar dupa ce achitati jumatate din pretul modulului ales.<br /><br />
Documente necesare:<br />
-	copie certificat nastere<br />
-	copie certificat casatorie (daca este cazul)<br />
-	copie dupa ultimul act de studiu<br />
-	copie act identitate<br />
-	adeverinta de la medicul de familie: <br />
<span style="font-size:13px; font-style:italic; ">Apt pentru cursul de make-up, nu are probleme neurologice, dermatologice, pulmonare sau boli transmisibile.</span>

            </td>

          </tr>
          <tr>
          	<td colspan="2" align="left" style="color:#FFF; ">
            	Va rugam sa cititi 
            	<a href="http://www.scoalademakeup.ro/index.php?p=confidentialitate" style="color: red">Politica de Confidentialitate</a>.
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="right" style="padding-top:12px;"><input type="submit" class="trimite" name="submit" value="Trimite" style="font-size: 18px;"/></td>
          </tr>
        </table>
 	</form>   
<?php } ?>
    </div>
    <div class="clr"></div>