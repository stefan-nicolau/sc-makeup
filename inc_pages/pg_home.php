<!-- Banner normal
<img src="images/makeup_banner.jpg" alt="" width="100%" />
-->
<?php if(time() > 1428314098 && time() < 14325876000){ ?>
	<!--1+1<img src="images/scoalademake-site-scoala-2015-07.jpg" alt="" width="100%" />-->
<?php } else { ?>
<!--	-->
	<!--<img src="images/makeup_banner.jpg" alt="" width="100%" />-->
<?php } ?>	
<?php
/*
<!-- 20% <img src="images/banner_makup_20_var_1.jpg" alt="" width="100%" />-->
	<!--1+1<img src="images/scoalademakeup-flyer-fata-2015baner-sc-makeup-2.jpg" alt="" width="100%" />-->
<!--<img src="images/BANER FB SC MAKEUP -20 1000x537px.jpg" alt="" width="100%" />	-->
*/
?>
<!-- <img src="images/makeup_banner.jpg" alt="" width="100%" /> -->
<link rel="stylesheet" href="../unslider.css">
<link rel="stylesheet" href="../unslider-dots.css">



<!-- <img src="images/bannersc.jpg" alt="" width="100%" /> -->
<div class="my-slider">
	<ul style="padding: 0"><!-- 
		<li><a href="http://scoalademakeup.ro/index.php?p=seminarii"><img src="images/b1.jpg" alt="" width="100%" /></a></li>
		<li><a href="http://scoalademakeup.ro/index.php?p=seminarii"><img src="images/b2.jpg" alt="" width="100%" /></a></li> -->
		<li><a href="http://scoalademakeup.ro/index.php?p=orar"><img src="images/banner_scoala_manichiura_noiembrie.jpg" alt="" width="100%" /></a></li>
	</ul>
</div>


<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="../unslider.js"></script>
<script>
	jQuery(document).ready(function($) {
		if ($('.my-slider ul li').length > 1){
				$('.my-slider').unslider({
					'autoplay':true,
					'arrows':false,
					'speed':1000,
					'delay':5000
				});
			}
	});
</script>
