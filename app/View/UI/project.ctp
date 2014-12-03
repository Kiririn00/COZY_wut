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
			echo $this->Form->input('field', array(
   			 'options' => array('บ้านเดี่ยว', 'โฮมออฟฟิศ', 'คอนโดมิเนียม'),
			 'empty' => 'ประเภทโครงการ',
			 'label' => false
			));
			?>
			<?php
			echo $this->Form->input('field', array(
   			 'options' => array('โชคชัย4', 'นาคนิวาส', 'สตรีวิทยา2', 'สังคมสงเคราะห์16'),
			 'empty' => 'ทำเลที่ตั้งโครงการ',
			 'label' => false
			));
			?>
			<?php
			echo $this->Form->input('field', array(
   			 'options' => array(1, 2, 3, 4, 5),
			 'empty' => 'ราคาเริ่มต้น',
			 'label' => false
		 	));
			
			?>
			</div>
			<?php
				echo $this->Form->input('ค้นหา',array(
				'type' => 'button',
				'label' => false,
				'id' => 'select_form_button'
			));

			?>		
		</div><!-- end #select_form -->
	</div>
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
				COZY @ CHOKCHAI 4 SOI 30
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
     
    <div id='content_body3_field'>
		<div id='content_body3'>
				<?php echo $this->Html->image('project1.jpg'); ?>
				<span id='content_topic'>
				COZY @ SATRIWITTHAYA 2 SOI 29 #2
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
		<div id='content_body3'>
				<?php echo $this->Html->image('project1.jpg'); ?>
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
	<div id='content_body3'>
				<?php echo $this->Html->image('project1.jpg'); ?>
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
			</div>

	</div>
     </div>
	<div id='content_body3_field'>
				<div id='content_body3'>
				<?php echo $this->Html->image('project1.jpg'); ?>
				<span id='content_topic'>
				COZY @ SATRIWITTHAYA 2 SOI 10 
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
				<?php echo $this->Html->image('soldout.jpg'); ?>
				<span id='content_topic'>
				COZY @ SATRIWITTHAYA 2 SOI 29 #1
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

		<div id='content_body3'>
				<?php echo $this->Html->image('soldout.jpg'); ?>
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
		
			</div>
	
	<!-- end #content_body3_field -->
	
	<div id='load_button_field'>
		<?php
			echo $this->Form->input('Loadmore',array(
				'type' => 'button',
				'label' => false,
				'id' => 'load_button'
			));
		?>
	</div>
	
	<div id='border1_body3'></div>
	<div id='border2_body3'></div>
	
	<div id="topic1_body3">
			<div id="icon">
				<?php echo $this->Html->image('icon.png'); ?>			
			</div>
			<div id="topic_body3_text">NEWS &amp; EVENT</div>
			<div id="topic_body3_text2">VIEW ALL EVENT .</div>
	</div>
	
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
<!--
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
-->
		
		</div>

 </div><!-- end #content_layout -->
</div><!-- end #project_body1 -->

