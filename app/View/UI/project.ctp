
<div id='home_body1' style="height:290px;">
 <div id='content_layout'>
	<div id='home_block1'>
        <div id='menu_button_tab'>
			<div id='menu_button'>
				<div id='menu_button_name'>โฮมออฟฟิศ</div>
			</div>
			<div id='menu_button'>
				<div id='menu_button_name'>บ้านเดี่ยว</div>				
			</div>
			<div id='menu_button'>
				<div id='menu_button_name'>บ้านแฝด</div>
			</div>
			<div id='menu_button'>
				<div id='menu_button_name'>คอนโดมิเนียม</div>
			</div>											
		</div>
	<div id='home_body1_image_tab'>
			<div id='home_body1_image'>
			<?php echo $this->Html->image('02R.jpg'); ?>
			</div>
			<div id='home_body1_image'>
			<?php echo $this->Html->image('home_pic1.png'); ?>
			</div>
			<div id='home_body1_image'>
			<?php echo $this->Html->image('REAL01_01.jpg'); ?>
			</div>
			<div id='home_body1_image'>
			<?php echo $this->Html->image('condo.jpg'); ?>
			</div>
		</div>
		<div id='home_body1_text_field'>
			<div id='home_body1_text'>
				“ ฉีกกฎคำว่าบ้าน ”
			</div>
			<div id='home_body1_text'style="margin-top:5px">
				“ บ้านอยู่สบาย <br>สไตล์คนรุ่นใหม่ ”
			</div>
			<div id='home_body1_text'style="margin-top:5px">
				“ บ้านอยู่สบาย<br> สไตล์คนรุ่นใหม่ ”
			</div>
			<div id='home_body1_text' style="margin-top:5px">
				“คอนโดอยู่สบาย<br>สไตล์คนรุ่นใหม่”
			</div>
		</div>
		
			</div>			
		</div>

	</div><!--end #home_block1 -->
 </div><!--end #content_layout -->
</div><!--end home_body1 -->

<div id='project_body1'>
 <div id='content_layout'>
	<div id='select_field'>	
		<div id='topic1_body3'>
			<div id='icon'>
				<?php echo $this->Html->image('icon.png'); ?>				
			</div>
			<div id='topic_body3_text'>LASTEST PROJECTS</div>
		</div><!-- end #topic_body3 -->

		<div id='select_form'>
			<div id='select_form_topic'>
				ค้นหาโครงการ
			</div>

			<div id='select_form_option'>
			<?php
			echo $this->Form->create(false, array('type' => 'file'));

			echo $this->Form->input('project_type', array(
   			 'options' => array('โฮมออฟฟิศ','บ้านเดี่ยว','บ้านแฝด', 'คอนโดมิเนียม'),
			 'empty' => 'ประเภทโครงการ',
			 'label' => false
			));
			?>
			<?php
			echo $this->Form->input('project_location', array(
   			 'options' => array('โชคชัย4', 'นาคนิวาส', 'สตรีวิทยา2', 'สังคมสงเคราะห์16'),
			 'empty' => 'ทำเลที่ตั้งโครงการ',
			 'label' => false
			));
			?>
			<?php
			echo $this->Form->input('price', array(
   			 'options' => array(1, 2, 3, 4, 5),
			 'empty' => 'ราคาเริ่มต้น',
			 'label' => false
		 	));
			
			?>
			</div>
			<?php
				echo $this->Form->input('ค้นหา',array(
				'type' => 'submit',
				'label' => false,
				'id' => 'select_form_button'
			));

			echo $this->Form->end();
			?>		
		</div><!-- end #select_form -->
	</div>
	<div id='content_body3_field_cover'>
	<div id='content_body3_field'>
			<?php if($project_type == "HomeOffice" || $project_type=="all"){ ?>
			<div id='content_body3'>
				<?php echo $this->Html->image('project1.jpg'); ?>
				<span id='content_topic'>
				COZY @ <br>SATRIWITTHAYA 9
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
				<?php echo $this->Html->image('ss29.jpg'); ?>
				<span id='content_topic'>
				COZY @ SATRIWITTHAYA 2 SOI 29-4  
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				โฮมออฟฟิศ 3 ชั้น 3 นอน 3 น้ำ<br> 
                		(รวม 5 ห้อง)
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',5
					));
				?>
				</div>
			</div><!-- end #content_body3 -->
			<?php } ?>

			<?php if($project_type=="SingleHouse" || $project_type=="all"){ ?>
			
			<div id='content_body3'>
				<?php echo $this->Html->image('home.jpg'); ?>
				<span id='content_topic'>
				COZY @ <br/>SATRIWITTHAYA 9  
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
                    
				บ้านเดี่ยว 2 ชั้น 3 นอน 3 น้ำ
				<br/>
               		 เริ่มต้น 6.39 ลบ. (2 หลัง) 
                       		<br/>  <br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',10
					));
				?>
				</div>
			</div>
			<?php } ?>

	</div><!-- end content_body3_field -->
     
    <div id='content_body3_field'>

		<?php if($project_type=="SingleHouse" || $project_type=="all"){ ?>
		

		<div id='content_body3'>
				<?php echo $this->Html->image('home.jpg'); ?>
				<span id='content_topic'>
				COZY @ <br>
                	NAKNIWAT 37 1-4
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
		</div><!-- end content_body3 -->

		<?php } ?>

		<?php if($project_type=="MultipleHouse" || $project_type=="all"){ ?>
		<div id='content_body3'>
				<?php echo $this->Html->image('double home.jpg'); ?>
				<span id='content_topic'>
				COZY @ SANGKOMSONGKROR 16 
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				บ้านแฝด 3 ชั้น 3 นอน 3 น้ำ			
				<br/><br/>
				 เริ่มต้น 5.99 ลบ (2 หลัง) 
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',4
					));
				?>
				</div>
		</div>

		<div id='content_body3'>
				<?php echo $this->Html->image('ss292.jpg'); ?>
				<span id='content_topic'>
				COZY @ SATRIWITTHAYA 29 #2
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				บ้านแฝด 3 ชั้น 3 นอน 3 น้ำ		
				<br/><br/>
				เริ่มต้น 5.09 ลบ. (4 หลัง)	
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',3
					));
				?>
				</div>
		</div>
		<?php } ?>
		

     </div><!-- end #content_body3_field -->

	<?php if($project_type=="all"){ ?>
 	<div id='content_body3_field'>
				<div id='content_body3'>
				<?php echo $this->Html->image('ss292.jpg'); ?>
				<span id='content_topic'>
				COZY @ SATRIWITTHAYA 10 
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
                    <br/>
				หลุดดาวน์ 4.19 ลบ. (1 ห้อง)
				
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',6
					));
				?>
				</div>
			</div>
				<div id='content_body3'>
				<?php echo $this->Html->image('cc448S.jpg'); ?>
				<span id='content_topic'>
				COZY @ CHOKCHAI 4 <br>SOI 84
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				SOLD OUT		
				<br/><br/>
			
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',1
					));
				?>
				</div>
			</div>

		<div id='content_body3'>
				<?php echo $this->Html->image('SSSold.jpg'); ?>
				<span id='content_topic'>
				COZY @ CHOKCHAI 4 <br> SOI 78
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				
				<br/>
				SOLD OUT <br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',8
					));
				?>
				</div>
			</div>

	</div><!-- end #content_body3_field -->

	<div id='content_body3_field'>
				<div id='content_body3'>
				<?php echo $this->Html->image('soldout.jpg'); ?>
				<span id='content_topic'>
				COZY @ NAKNIWAT 37 
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
				
				
				SOLD OUT <br/><br/>

				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',9
					));
				?>
				</div>
                    
                    
			</div>
		<div id='content_body3'>
				<?php echo $this->Html->image('cc448S.jpg'); ?>
				<span id='content_topic'>
				COZY @ SATRIWITTHAYA SOI 29 #1
				</span>
				<div id='content_border'></div>
				<div id='content_detail'>
                    <br/>
				SOLD OUT 
				<br/><br/>
				<?php
					echo $this->Html->link('รายละเอียดโครงการ',array(
						'action' => 'DetailDesc',7
					));
				?>
				</div>
			</div>



	</div>
</div>
	<?php } ?>
	
	<!-- end #content_body3_field -->
	
<!--
	<div id='load_button_field'>
		<?php
			echo $this->Form->input('Loadmore',array(
				'type' => 'button',
				'label' => false,
				'id' => 'load_button'
			));
		?>
	</div>
-->
	
	<div id='border1_body3' class='border'></div>
	<div id='border2_body3' class='border'></div>
	
	<div id="topic1_body3">
			<div id="icon">
				<?php echo $this->Html->image('icon.png'); ?>			
			</div>
			<div id="topic_body3_text">NEWS &amp; EVENT</div>
			<div id="topic_body3_text2">VIEW ALL EVENT .</div>
	</div>
	
<!--
	<div id="content_body3_field">
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
	<div id="content_body3">
			<?php echo $this->Html->image('event.jpg');?>
			<span id="content_topic">
					CHOKCHAI 4 - 6
				</span>
				<div id="content_border"></div>
				<div id="content_detail">
				ลงตัวสำหรับทุกรูปแบบการใช้ชีวิตกับ ที่พักอาศัยสไตล์  COZY   
				<br><br>
				ราคาเริ่มต้น 3.5 ล้านบาท
				<br><br>
				<a href="/COZY/UI/Event">
					<?php echo $this->Html->image('read_more.jpg'); ?>
</a>				</div>
			</div>
			<div id="content_body3">
			<?php echo $this->Html->image('event.jpg');?>
			<span id="content_topic">
					CHOKCHAI 4 - 6
				</span>
				<div id="content_border"></div>
				<div id="content_detail">
				ลงตัวสำหรับทุกรูปแบบการใช้ชีวิตกับ ที่พักอาศัยสไตล์  COZY   
				<br><br>
				ราคาเริ่มต้น 3.5 ล้านบาท
				<br><br>
				<a href="/COZY/UI/Event">
				<?php echo $this->Html->image('read_more.jpg'); ?>
</a></div>
			</div>

		
		</div>
-->

 </div><!-- end #content_layout -->
</div><!-- end #project_body1 -->

