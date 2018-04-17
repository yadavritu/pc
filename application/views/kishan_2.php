<div class="wrapper">
			<aside class="side-nav">
				<div class="side-notification">
					
				</div>
				<div class="user-side-profile">
					<div class="user-image">
						<div class="user-on"></div>
						<?=$admin_data['Admin_Img'];?>
					</div>
					<div class="clear">
						<div class="user-name"><?=$admin_data['Admin_Name'];?></div>
						<div class="user-group">Administrator</div>
						<ul class="user-side-menu animated bounceInUp">
							<li><a href="#">Profile <div class="badge badge-yellow pull-right">2</div></a></li>
							<li><a href="#">Settings</a></li>
							<li><a href="<?=base_url();?>My_pizza/change_password">Change Password</a></li>
							<li><a href="<?=base_url();?>My_pizza/logout_session">Logout</a></li>
						</ul>
					</div>
				</div>
				<div class="main-menu">
					<ul>
					<?php foreach($menu as $m){ 
					
					$data=explode(",",$m);
					
					$active=$this->uri->segment(1)."/".$this->uri->segment(2);
					
					?>
						<li class="<?php if($active==$data[0]) { echo "active"; }?>">
						<a href="<?=base_url().$data[0];?>">
							<i class="fa <?=$data[2];?>"></i>
								<span><?= $data[1];?></span></a>
						</li>
							
							<?php }?>
					
							</ul>
				</div>
				</aside>
			
			
				
	