<div class="rightdivsite">
 <h1 style="font-size:16px;  padding-left:24px;">Firebird Speed - where today's investors find the ideas that will change tomorrow. </h1>
 <div class="clear"></div>
 <div class="videodiv">
 <div class="videocontantd"><img src="<?php echo base_url(); ?>images/v1.jpg" /></div>
 <div class="slider_right">
				<div class="box">
					<h1>Upcoming Events</h1>
                    	<ul class="events">
                        
                        <?php foreach($upcoming_event_list as $row) { ?>
				
                
							<li>
								<span class="time"><?php echo date("Y-m-d", strtotime($row->starts_at)); ?></span>
								<a class="nochild " href="<?php echo base_url(); ?>meeting"><span class="event_title"><?php echo $row->name; ?></span> </a>
								<span class="event_des"><?php echo $row->description; ?></span>
							</li>
                            
                         <?php }  ?>   
							
						</ul>
				</div>
				
			</div>
            
      <div class="clear"></div>
      <div class="fucher_cont">
      <div class="box"> <div class="box-heading">Featured Projects</div></div>
       <?php foreach($project as $row) { ?>
             <div class="description01">
             	<div class="images">
            		 <img alt="iPhone" src="http://devs.speedfundrussia.com/images/clients/logo1.png">
                </div>
                
                <div class="name">
				<b><?php  echo $row->title; ?> </b>
			 </div>
              <div class="rating"><img alt="Based on 0 reviews." src="<?php  echo $row->imgFile; ?>"></div>
			   <div class="description"><?php  echo $row->description; ?></div>
             </div>
             <?php }  ?>
            
             
      </div>
 
 </div>
 
 </div>
</div>
<div class="clear"></div>