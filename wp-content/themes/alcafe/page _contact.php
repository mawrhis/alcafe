<?php
/*
Template Name: Contact Template
*/
?>
<?php get_header() ?>


	<?php the_post() ?>
	<div id="contact_summary">
					<p style="text-align: justify;">Alzheimer Café se koná v Centru Seňorina. Tento denní stacionář se nachází v 1. patře domu Na Poříčí 36, v Praze 1<strong>,</strong> s výbornou dostupností MHD (metro B a C, BUS, TRAM, vlakové Masarykovo nádraží). Auto je možné krátkodobě přistavit přímo ke vchodu v domovním průjezdu nebo na nedalekém parkovacím stání pro invalidy. Dlouhodobé parkování umožňují placená parkoviště v okolí (např. Parkování Florentinum, Garáže Palladium, Parking Florenc, Parkoviště Pod Magistrálou). Přístup do samotného centra je bezbariérový, v domě je výtah.</p>
					<p style="text-align: justify;"><strong>Jak nás můžete kontaktovat:</strong></p>
					<p style="text-align: justify;"><strong>email: kontakt@alzheimercafe.cz</strong><br>
					tel: +420723812087</p>
			<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDFPHI3rKTcLHn3djoVoAQoo_J06PWf_ig'></script><div style='overflow:hidden;height:400px;max-width:600px;'><div id='gmap_canvas' style='height:400px;width:600px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://addmap.net/'>google maps embed directions</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=a049527410e89270629225938987e4dbbd75fcb7'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(50.0898234,14.435071600000015),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(50.0898234,14.435071600000015)});infowindow = new google.maps.InfoWindow({content:'<strong>Centrum Seňorina</strong><br>Na Poříčí 36<br>11000 Praha<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
<br>
			<div class="fb-like" data-href="https://www.facebook.com/alzheimercafeCZ/?fref=ts" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
				
				
			</div><!-- #slideshow_cafe -->
			<div class="contact">
<?php the_content(); ?>
			</div>
			

				<?php get_footer() ?> 


 

