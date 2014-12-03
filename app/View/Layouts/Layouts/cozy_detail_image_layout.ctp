<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Home Page</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('cozy_home_layout');
		echo $this->Html->css('home');
		echo $this->Html->css('contact');
		echo $this->Html->css('about_us');
		echo $this->Html->css('event');
		echo $this->Html->css('project');
		echo $this->Html->css('search');
		echo $this->Html->css('detail');	

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id='header_bg'>
	 <div id='content_layout'>
		<div id='logo'>
			<?php echo $this->Html->image('logo.png') ?>
		</div>
		<!--<div id='menu_tab'>
			<div id='menu_tab_border1'></div>
			<div id='menu_tab_border2'></div>
			!-->
			<div id='menu_tab_text'>			
				<span id='menu_text'>
					<?php echo $this->Html->link('HOME',array(
							'action' => 'Home'
						)) ?>				

				</span>
				<span id='menu_text'>
					<?php echo $this->Html->link('Project',array(
							'action' => 'Project'
						)) ?>				

				</span>
				<span id='menu_text'>
					<?php echo $this->Html->link('New & Event',array(
							'action' => 'Event'
						)) ?>				
				</span>
				<span id='menu_text'>TIPS</span>

				<span id='menu_text'>
					<?php echo $this->Html->link('About us',array(
							'action' => 'AboutUs'
						)) ?>
					
				</span>
				<span id='menu_text'>
					<?php echo $this->Html->link('Contact us',array(
							'action' => 'Contact'
						)) ?>
				</span>
				<div id='menu_icon'>
					<?php 
						echo $this->Html->image('search_icon.png',array(
							'url' => array('action' => 'Search')
						)); 
					?>	
				</div>
			</div>
			<!--
			<div id='menu_tab_border1'></div>
			<div id='menu_tab_border2'></div>
			-->
		<!--</div>-->
		<div id='header_topic'>
			<span id='header_button_text'>เข้าร่วมโครงการ</span>

			<div id='header_topic_sqare'>
				<div id='header_topic_text'>"บ้านเราอยู่สบาย<br/>&nbspสไตล์คนรุ่นใหม่"&nbsp</div>
			</div>
			<div id='header_button'>
				<div id='header_button_border'></div>
			</div>
		</div>
		<div id='detail_menu_tab'>
			<div id='detail_menu_topic'>
				<?php echo $this->Html->image('detail_icon.png',array('id' => 'detail_icon')); ?>
				<span id='detail_text_topic'><?php echo $project_name; ?></span>
			</div>
			<div id='detail_menu_option'>
				<div id='detail_option_field'>
					<?php echo $this->Html->image('plus1.png',array('id' => 'option_icon')); ?>					
					
					<div id='option_detail'  >			
						<?php
	       					echo $this->Html->link('รายละเอียดโครงการ',array(
							'action' => 'DetailDesc',
												));  
						?>
						<br/>Description
					</div>
				</div>
				<div id='detail_option_field'  class='field_color'>
					<?php echo $this->Html->image('plus2.png',array('id' => 'option_icon')); ?>					
					
						<div id='option_detail' class='option_text_color'>
						<?php
	       					echo $this->Html->link('แกลอรี่',array(
							'action' => 'DetailImage',
							'class' => 'white_color'

						));  
						?>
						<br/>Gallery</div>
				</div>
				<div id='detail_option_field' >
					<?php echo $this->Html->image('plus2.png',array('id' => 'option_icon')); ?>					
					
					<div id='option_detail'>
						<?php
	       					echo $this->Html->link('แผนที่โครงการ',array(
							'action' => 'Detail',
													));  
						?>

						<br/>Map</div>
				</div>

			</div>
		</div>
	</div><!-- end #content_layout -->

	
	</div><!-- end #header_bg -->

	<!--include other view -->
	<?php echo $this->fetch('content'); ?>
	

	<div id='footer_border'></div>
	<div id='footer_bg'>
		<div id='footer_big_block'>
			<div id='footer_block'>
				<div id='footer_topic'>ABOUT US</div>
				<div id='footer_detail'>
				บริษัทแบงคอก นิวเทรนด์ ดีเวลอปเมนท์ จำกัด ก่อตั้งขึ้นในปี 
				พ.ศ. 2553 เพื่อประกอบธุรกิจพัฒนาอสังหาริมทรัพย์ โดยทีมผู้บริหารมืออาชีพที่เป็นวิศวกรและสถาปนิก ซึ่งมีความเชี่ยวชาญ และมีประสบการณ์ด้านอสังหา					ริมทรัพย์ กว่า 25 ปี	
				</div>
			</div>
			<div id='footer_block'>
				<div id='footer_topic'>RESOURCES & LINKS</div>
				<div id='footer_detail'>
				Lorem ipsum dolor<br/> 
				Donec a sapien<br/>  
				Cras non nulla eu tellus<br/> 
				Nulla vitae ipsum<br/> 
				Sed at massa id
				</div>	
			</div>
			<div id='footer_block'>
				<div id='footer_topic'>QUICK CONTACT</div>
				<div id='footer_detail'>
				<form action="#" method="get">
					<input id='footer_field_text' type="text" name="email" value="" placeholder="Enter email">
  					<input id='footer_button' type="submit" value="Enter!!!"> 

				
				</div>				
			</div>
		</div><!--end #fotter_big_block -->
	</div><!-- end footer bg -->

</body>
</html>





