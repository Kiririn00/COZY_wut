
   

<div id='home_body1'>
 <div id='content_layout'>
	<div id='home_block1'>
        <div id='menu_button_tab'>
			<div id='menu_button'>
				<div id='menu_button_name'>บ้านเดี่ยว</div>
			</div>
			<div id='menu_button'>
				<div id='menu_button_name'>คอนโดมีเนี่ยม</div>				
			</div>
			<div id='menu_button'>
				<div id='menu_button_name'>โฮมออฟฟิศ</div>
			</div>
			<div id='menu_button'>
				<div id='menu_button_name'>อื่นๆ</div>
			</div>											
		</div>
		<div id='home_body1_image_tab'>
			<div id='home_body1_image'>
			<?php echo $this->Html->image('home_pic1.png'); ?>
			</div>
			<div id='home_body1_image'>
			<?php echo $this->Html->image('condo.jpg'); ?>
			</div>
			<div id='home_body1_image'>
			<?php echo $this->Html->image('REAL01_01.jpg'); ?>
			</div>
			<div id='home_body1_image'>
			<?php echo $this->Html->image('home_pic1.png'); ?>
			</div>
		</div>
		<div id='home_body1_text_field'>
			<div id='home_body1_text'>
				“บ้านอยู่สบาย สไตล์คนรุ่นใหม่”
			</div>
			<div id='home_body1_text'>
				“ ซื้อถูกกว่าเช่า...เราให้ครบ ”
			</div>
			<div id='home_body1_text'>
				“ฉีกกฏคำว่า บ้าน”
			</div>
			<div id='home_body1_text'>
				“ ฉีกกฏคำว่า บ้าน ”
			</div>
		</div>
		<div id='home_body1_button_field'>
			<div id='home_body1_button'>
				<div id='home_body1_button_text' class="linktext">
                    <?php echo $this->Html->link('เข้าชมโครงการ',array(
							'action' => 'Project'
						)) ?></div>
			</div>			
		</div>
		<div id='home_body1_button_field'>
			<div id='home_body1_button'>
				<div id='home_body1_button_text' class="linktext">
                    <?php echo $this->Html->link('เข้าชมโครงการ',array(
							'action' => 'Project'
						)) ?></div>
			</div>			
		</div>
		<div id='home_body1_button_field'>
			<div id='home_body1_button'>
				<div id='home_body1_button_text' class="linktext">
                    <?php echo $this->Html->link('เข้าชมโครงการ',array(
							'action' => 'Project'
						)) ?></div>
			</div>			
		</div>
		<div id='home_body1_button_field'>
			<div id='home_body1_button'>
				<div id='home_body1_button_text' class="linktext">
                    <?php echo $this->Html->link('เข้าชมโครงการ',array(
							'action' => 'Project'
						)) ?></div>
			</div>			
		</div>

	</div><!--end #home_block1 -->
 </div><!--end #content_layout -->
</div><!--end home_body1 -->

<div id='home_body2'>
 <div id='content_layout'>
     <a class="youtube" href="https://www.youtube.com/watch?v=3STwo2ZGES8" title="jQuery YouTube Popup Player Plugin TEST">
         
     <?php echo $this->Html->image('body2.jpg'); ?></a>
 </div>
</div><!-- end #home_body2 -->
<div id='home_body3'>
 <div id='content_layout'>
	<div id='block1_body3'>
		<div id='topic1_body3'>
			<div id='icon'>
				<?php echo $this->Html->image('icon.png'); ?>				
			</div>
            
			<div id='topic_body3_text'>LOCATION SEARCH</div>
            
		</div><!-- end #topic_body3 -->
		<div id='map_body3'>
  

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
<!--		<?php echo $this->Html->image('map.jpg'); ?>-->
            <div id="map" style="width:960;height:500px;margin-bottom:30px"></div>
    <!--   <section id="cd-google-map" style="width:960px;height:400px">

	<div id="google-container"></div>
	<div id="cd-zoom-in"></div>
    <div id="cd-zoom-out"></div></section>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUJr_4AnWJJ_85vEyD1qRMljK9CSsAev4"></script>
<script src="js/main.js"></script>
-->
	</div><!-- end #block1_body3 -->

	<div id='border1_body3'></div>
	<div id='border2_body3'></div>

	<div id='block2_body3'>
		<div id='topic1_body3'>
			<div id='icon'>
				<?php echo $this->Html->image('icon.png'); ?>				
			</div>
			<div id='topic_body3_text'>LATEST PROJECT</div>
			<div id='topic_body3_text2'>
                <?php echo $this->Html->link('VIEW ALL PRODUCTS>> ',array(
							'action' => 'Project'
						)) ?></div>
		</div><!-- end #topic_body3 -->	
			<div id='content_body3_field'>
			<div id='content_body3'>
				<?php echo $this->Html->image('project1.jpg'); ?>
				<span id='content_topic'>
				COZY @ SATRIWITTHAYA 2 SOI 9
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				โฮมออฟฟิศ 3 ชั้น 3 นอน 3 น้ำ			
				<br/><br/>
				เริ่มต้น 6.39 ลบ. (4หลัง)
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',0
					));
				?>
				</div>
			</div>
		<div id='content_body3'>
				<?php echo $this->Html->image('project1.jpg'); ?>
				<span id='content_topic'>
				COZY @ CHOKCHAI 4 <br> SOI 30
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				โฮมออฟฟิศ 3 ชั้น 3 นอน 3 น้ำ			
				<br/><br/>
				เริ่มต้น 4.39 ลบ. (12 หลัง) 
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',1
					));
				?>
				</div>
			</div>

		<div id='content_body3'>
				<?php echo $this->Html->image('home.jpg'); ?>
				<span id='content_topic'>
				COZY @ NAKNIWAT 37 1-4
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				บ้านเดี่ยว 2 ชั้น 3 นอน 3 น้ำ	
				<br/><br/>
				เริ่มต้น 6.39 ลบ.(2 หลัง)
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',2
					));
				?>
				</div>
			</div>

	</div>

	<div id='border1_body3'></div>
	<div id='border2_body3'></div>
		<div id='topic1_body3'>
			<div id='icon'>
				<?php echo $this->Html->image('icon.png'); ?>				
			</div>
			<div id='topic_body3_text'>NEWS & EVENT</div>
			<div id='topic_body3_text2'>
            <?php echo $this->Html->link('VIEW ALL EVENT>>',array(
							'action' => 'Event'
						)) ?>		
				</div>
		</div><!-- end #topic_body3 -->		
		<div id='content_body3_field'>
			<div id='content_body3'>
				<?php echo $this->Html->image('event.jpg'); ?>
				<span id='content_topic'>
					เคล็ดลับการเก็บเศษกระจกแตกบนพื้นอย่างปลอดภัย
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				ลงตัำหรับทุกรูปแบบการใช้ชีวิตกับ ที่พักอาศัยสไตล์  COZY   
				<br/><br/>
				ราคาเริ่มต้น 3.5 ล้านบาท
				<br/><br/>
				<?php
					echo $this->Html->image('read_more.jpg',array(
						'url' => array('action' => 'Event')
					))

				?>
				</div>
			</div>
<!--
			<div id='content_body3'>
				<?php echo $this->Html->image('event.jpg'); ?>
				<span id='content_topic'>
					CHOKCHAI 4 - 6
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				ลงตัวสำหรับทุกรูปแบบการใช้ชีวิตกับ ที่พักอาศัยสไตล์  COZY   
				<br/><br/>
				ราคาเริ่มต้น 3.5 ล้านบาท
				<br/><br/>
				<?php
					/*	
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'Detail',
					));
					 */

					echo $this->Html->image('read_more.jpg',array(
						'url' => array('action' => 'Event')
					))
				?>
				</div>
			</div>
			<div id='content_body3'>
				<?php echo $this->Html->image('event.jpg'); ?>
				<span id='content_topic'>
					CHOKCHAI 4 - 6
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				ลงตัวสำหรับทุกรูปแบบการใช้ชีวิตกับ ที่พักอาศัยสไตล์  COZY   
				<br/><br/>
				ราคาเริ่มต้น 3.5 ล้านบาท
				<br/><br/>
				<?php
					echo $this->Html->image('read_more.jpg',array(
						'url' => array('action' => 'Event')
					))

				?>
				</div>
			</div>
		
-->
		</div>
		<div id='border1_body3'></div>
		<div id='border2_body3'></div>
		
<!--
		<div id='topic1_body3'>
			<div id='icon'>
				<?php echo $this->Html->image('icon.png'); ?>				
			</div>
			<div id='topic_body3_text'>TIPS OF THE DAY</div>
			<div id='topic_body3_text2'>VIEW ALL TIPS .</div>

		</div>          
-->
        <!-- end #topic_body3 -->	
<!--
		<div id='content_body3_field2'>
			<div id='content_tip'>
				หากเพื่อนๆพบว่าช่วงนี้ทำไมบ้านของเราจึงมีข้าวของ กระจัดกระจายเกะกะไปหมด บรรยากาศซ้ำซากจำเจ ไม่น่าอยู่เอาซะเลย ลองหาเวลาว่างสักนิด เนรมิตบ้านน้อยหลังเดิมให้โปร่งโล่งสบายตา 
			<br/>
			<?php
				echo $this->Html->image('read_more.jpg',array(
					'id' => 'read_more_button',
					'url' => array('action' => 'Event')
				))

			?>
				
			</div>

			<div id='content_tip'>
				หากเพื่อนๆพบว่าช่วงนี้ทำไมบ้านของเราจึงมีข้าวของ กระจัดกระจายเกะกะไปหมด บรรยากาศซ้ำซากจำเจ ไม่น่าอยู่เอาซะเลย ลองหาเวลาว่างสักนิด เนรมิตบ้านน้อยหลังเดิมให้โปร่งโล่งสบายตา
			<br/>
			<?php
				echo $this->Html->image('read_more.jpg',array(
					'id' => 'read_more_button',
					'url' => array('action' => 'Event')
				))

			?>
 
				
			</div>

			<div id='content_tip'>
				หากเพื่อนๆพบว่าช่วงนี้ทำไมบ้านของเราจึงมีข้าวของ กระจัดกระจายเกะกะไปหมด บรรยากาศซ้ำซากจำเจ ไม่น่าอยู่เอาซะเลย ลองหาเวลาว่างสักนิด เนรมิตบ้านน้อยหลังเดิมให้โปร่งโล่งสบายตา 
			<br/>
			<?php
				echo $this->Html->image('read_more.jpg',array(
					'id' => 'read_more_button',
					'url' => array('action' => 'Event')
				))

			?>
				
			</div>

		</div>
-->
        <!-- end #content_body3_field2 -->


 </div><!-- end content_layout -->
</div><!-- home_body -->

 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<link type="text/css"
		href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css" rel="stylesheet" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery.youtubepopup.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUJr_4AnWJJ_85vEyD1qRMljK9CSsAev4"></script>

        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 18,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(13.7909066,100.6084257), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [			{		featureType:"road",		elementType:"labels",		stylers:[{visibility:"simplified"},{lightness:20}]	},{		featureType:"administrative.land_parcel",		elementType:"all",		stylers:[{visibility:"off"}]	},{		featureType:"landscape.man_made",		elementType:"all",		stylers:[{visibility:"off"}]	},{		featureType:"transit",		elementType:"all",		stylers:[{visibility:"off"}]	},{		featureType:"road.local",		elementType:"labels",		stylers:[{visibility:"simplified"}]	},{		featureType:"road.local",		elementType:"geometry",		stylers:[{visibility:"simplified"}]	},{		featureType:"road.highway",		elementType:"labels",		stylers:[{visibility:"simplified"}]	},{		featureType:"poi",		elementType:"labels",		stylers:[{visibility:"off"}]},{		featureType:"road.arterial",		elementType:"labels",		stylers:[{visibility:"off"}]	},{		featureType:"water",		elementType:"all",		stylers:[{hue:"#a1cdfc"},{saturation:30},{lightness:49}]	},{		featureType:"road.highway",		elementType:"geometry",		stylers:[{hue:"#f49935"}]	},{		featureType:"road.arterial",		elementType:"geometry",		stylers:[{hue:"#fad959"}]	}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
            }
        </script>
     
      <script type="text/javascript">
		$(function () {
			$("a.youtube").YouTubePopup({ autoplay: 0 });
		});
    </script>
