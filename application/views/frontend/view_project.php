<div class="rightdivsite">
  <div class="clear" style="height:14px"></div>
 <div class="videodiv">
 <?php 
		foreach($details as $data_project) { 
		
		
			 
			 ?>
       <div class="fucher_cont">
      
      <div class="box"> 
      <div class="box-heading"><?php echo  $data_project->title ; ?> </div></div>
              <div class="description01">
             	<div class="images">
            		 <img alt="iPhone" src=<?php echo base_url(); ?>upload_img/<?php $data_project->imgFile; ?> />
                </div>
                 <div class="name">
				<b> Author :-</b> <?php  echo $data_project->author; ?> 
			 </div>

              <div class="date">
			  <b> Date :-</b><?php echo date("Y-m-d", strtotime($data_project->date)); ?> <br/>
             		                    
              </div>
              <b> description :-</b>
			   <div class="description"> <?php  echo $data_project->description; ?></div>
             </div>
          
            
             
      </div>
 <?php }?> 
 </div>
 
 </div>
</div>
<div class="clear"></div>