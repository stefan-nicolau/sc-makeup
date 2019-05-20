<?php

ini_set('display_errors', '0');     # don't show any errors...
error_reporting(E_ALL | E_STRICT);  # ...but do log them

ob_start();

include("inc_files/config.php");	
include("inc_files/functions.php");	
//include("tracker.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ro" lang="ro"> 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <title>Scoala de Make-up Melkior</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- meta viewport -->
    <meta name="description" content="Scoala de Make-up - Se lucreaza cu produsele noastre profesionale Melkior, iar la sfarit primiti diploma de machior recunoscuta de Ministerul Muncii, valabila si in UE" />
    <link href="style.css" type="text/css" rel="stylesheet" media="all" />
    <link rel="icon" sizes="16x16 32x32 64x64" href="images/favicon.ico"> <!-- favicon -->

	<style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&amp;subset=latin,latin-ext);
        *{ 
            font-family: 'Open Sans Condensed', sans-serif;
        }
    </style>
    <!-- <link href="inc_files/tutorsty.css" rel="stylesheet" type="text/css" />
    <link href="inc_files/flexcrollstyles.css" rel="stylesheet" type="text/css" /> -->
    <!-- <script type="text/javascript" src="inc_files/flexcroll.js"></script> -->
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-36757653-4', 'auto');
      ga('send', 'pageview');
    
    </script>
</head>
<body>
<div class="site">
	<div class="header">
    	<div class="logo_academie">
        	<a href="index.php"><img src="images/logo_scoala-de-makeup-melkior.png" alt="" /></a>
        </div>
        <div class="right_header">
            <div class="form_reg">&nbsp;</div>
        	<div class="meniu">
                <ul>
                    <li><a href="index.php?p=despre">despre noi</a></li>
                    <li class="mobile-link-hide"><a href="index.php?p=conditii">conditii de inscriere</a></li>
                    <li class="mobile-new-row"><a href="index.php?p=inscriere" class="red-menu-item">formular de inregistrare</a></li>
                    <li><a href="index.php?p=orar">orar cursuri</a></li>
                    <li class="mobile-link-show"><a href="index.php?p=conditii">conditii de inscriere</a></li>
                    <!-- <li><a href="index.php?p=seminarii" style="color:#f00">seminarii</a></li> -->
                    <li><a href="https://www.melkior.ro/blog/category/4-evenimente" target="_blank">evenimente</a></li>
                    <li><a href="https://www.melkior.ro/" target="_blank">produse</a></li>
                    <li><a href="index.php?p=contact">contact</a></li>
                    
                </ul>
            </div>
          	<img src="images/intra-in-lumea-profesionistilor.png" alt="" />
        </div><div class="clr"></div>
    </div>
    <div class="navigare">
        <div class="nav">
        	<ul>
            	<li><a href="index.php?p=cursuri">Cursuri</a></li>
            	<li><a href="index.php?p=certificat">Certificat de absolvire</a></li>
            	<li><a href="index.php?p=traineri">Traineri</a></li>
            	<!--<li><a href="index.php?p=kituri">Kituri</a></li>-->
            	<li><a href="https://www.facebook.com/scoalademakeup" target="_blank">Galerie</a></li>
                <li><a class="red-menu-item" href="https://www.melkior.ro/content/14-newsletter" target="_blank">Newsletter</a></li>
            </ul><div class="clr"></div>
        </div>
    </div>
    <div class="main">
    	<div class="content">
            <div class="social">
                <div class="social_f"><a href="https://www.facebook.com/scoalademakeup?ref=br_tf" title="Melkior pe Facebook" target="_blank"><img src="images/social_blank.png" alt="" style="" /></a></div>
                <div class="social_i"><a href="http://instagram.com/melkiorprofessional#" title="Melkior pe Instagram" target="_blank"><img src="images/social_blank.png" alt="" style="" /></a></div>
                <div class="social_p"><a href="http://www.pinterest.com/melkiorbeauty/pins/" title="Melkior pe Pinterest" target="_blank"><img src="images/social_blank.png" alt="" style="" /></a></div>
                <div class="social_t"><a href="https://twitter.com/MelkiorRo" title="Melkior pe Twitter" target="_blank"><img src="images/social_blank.png" alt="" style="" /></a></div>
                <div class="social_y"><a href="https://www.youtube.com/channel/UC1qSiNWig4GdX24qU_jvYbA" title="Melkior pe YouTube" target="_blank"><img src="images/social_blank.png" alt="" style="" /></a></div>
            </div>
 <?php
		if(!isset($_GET['p'])){
			$p = 'home';
		} else {
			$p = trim(strip_tags($_GET['p']));
		}
		$sfile = "inc_pages/pg_".$p.".php";
		if(file_exists($sfile)){
			include($sfile);
		} else {
			include("inc_pages/pg_home.php");
		}
?>  
      
        </div>
    </div>
    <div class="navigare footer-navigare">
        <div class="nav">
            <ul>
                <li><a href="index.php?p=cursuri">Cursuri</a></li>
                <li><a href="index.php?p=certificat">Certificat de absolvire</a></li>
                <li><a href="index.php?p=traineri">Traineri</a></li>
                <li><a href="index.php?p=galerie">Galerie</a></li>
                <li><a href="https://www.melkior.ro/content/14-newsletter" target="_blank">Newsletter</a></li>
            </ul><div class="clr"></div>
        </div>
    </div>
    <div class="footer">
		<div class="footer_nav">
            <a href="https://www.melkior.ro/content/4-despre-noi" target="_blank">Despre Melkior</a>
            <!-- begin mobile - from header to footer -->
            <a class="mobile-footer-link" href="index.php?p=despre">Despre Scoala de Make-up</a>
            <a class="mobile-footer-link" href="https://www.melkior.ro/blog/category/4-evenimente" target="_blank">Evenimente</a>
            <a class="mobile-footer-link" href="https://www.melkior.ro/" target="_blank">Produse</a>
            <!-- end mobile - from header to footer -->
            <a href="index.php?p=unde">Unde ne gasiti</a>
            <a href="index.php?p=cookies">Utilizare cookies</a>
            <a href="index.php?p=confidentialitate">Date Personale</a>
            <a href="http://www.anpc.gov.ro/" target="_blank">www.anpc.gov.ro</a>
        </div>
        <div class="social-footer">
            <div class="social_f"><a href="https://www.facebook.com/scoalademakeup?ref=br_tf" title="Melkior pe Facebook" target="_blank"><img src="images/social_blank.png" alt="" style="" /></a></div>
            <div class="social_i"><a href="http://instagram.com/melkiorprofessional#" title="Melkior pe Instagram" target="_blank"><img src="images/social_blank.png" alt="" style="" /></a></div>
            <div class="social_p"><a href="http://www.pinterest.com/melkiorbeauty/pins/" title="Melkior pe Pinterest" target="_blank"><img src="images/social_blank.png" alt="" style="" /></a></div>
            <div class="social_t"><a href="https://twitter.com/MelkiorRo" title="Melkior pe Twitter" target="_blank"><img src="images/social_blank.png" alt="" style="" /></a></div>
            <div class="social_y"><a href="https://www.youtube.com/channel/UC1qSiNWig4GdX24qU_jvYbA" title="Melkior pe YouTube" target="_blank"><img src="images/social_blank.png" alt="" style="" /></a></div>
        </div>
		<div class="melkior">
        	<a href="https://www.melkior.ro/" target="_blank"><img src="images/logo-Melkior-Paris-Alb.png" alt="" width="140" style="margin: 0 12px; " /></a>
        	<a href="https://www.scoalademakeup.ro/" target="_blank"><img src="images/logo_make-up.jpg" alt="" width="160" style="margin-bottom:27px; " /></a> 
        </div>
        <div class="copy">
        &copy; scoalademakeup.ro Toate drepturile rezervate.
        </div>
    </div>
</div>
</body>
</html>
<? ob_flush(); ?>