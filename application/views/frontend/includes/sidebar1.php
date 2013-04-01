 <div class="clear"></div>
 <div class="leftdivced">
 <div class="box">
        <div class="box-heading">Categories</div>
        <div class="box-content box-category">
     
		
		
		
          <ul id="custom_accordion">
        
          
          
				
                   <?php foreach($category as $row) { ?>
				<li class="category57"><a class="nochild " href="#"><?php  echo $row->category_name; ?> </a></li>
                <?php }  ?>
				
          </ul>
        </div>
      </div>
      <div class="clear"></div>
      <div class="box">
       <div class="box-heading">Events News </div>
       <div><img src="images/video.jpg" /></div>
       </div>
       <div class="clear"></div>
       
      <div class="box">
       <div class="box-heading">Latest Projects </div>
       <div class="box-content box-category">
     
		
		
          <ul id="custom_accordion">
        
             
			    <?php foreach($project as $row) { ?>
				<li class="category57"><a class="nochild " href="#"><?php  echo $row->title; ?> </a></li>
                <?php }  ?>
				
          </ul>
        </div>
       <div class="clear"></div>
       <div class="box">
       <div class="box-heading">Latest News</div>
       <?php foreach($news as $row) { ?>
       <p class="newstext">><?php  echo $row->page_name; ?> </p>
       </div>
       <?php }  ?>
 </div>
