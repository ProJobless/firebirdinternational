<div class="rightdivsite">
  <div class="clear" style="height:14px"></div>
 <div class="videodiv">

       <div class="fucher_cont">
      <div class="box"> 
      <div class="box-heading">Project List </div></div>
      <?php foreach($projects_list as $row) { ?>
             <div class="description01">
             	<div class="images">
            		 <img alt="iPhone" src="http://devs.speedfundrussia.com/images/clients/logo1.png">
                </div>
                
                <div class="name">
				<b><a href="<?php echo base_url(); ?>BrowseProject/viewproject/<?php  echo $row->id; ?>"><?php  echo $row->title; ?></a> </b>
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