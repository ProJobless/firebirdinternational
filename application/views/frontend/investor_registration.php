<link rel="stylesheet" href="public/admin/css/screenuser.css?v=1" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->
<!--  checkbox styling script -->
<script src="public/admin/js/jquery/ui.core.js" type="text/javascript"></script>
<script src="public/admin/js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="public/admin/js/jquery/jquery.bind.js" type="text/javascript"></script>
<script src="public/admin/js/jquery/jquery_main.js"  type="text/javascript"></script>
<script src="public/admin/js/jquery/jquery.validate.js"  type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function() {	

	var container = $('div.error-inner');
	var validator1 = $("#investor").validate({
	                    //FOR THIS Option You will have to use jquery.metadata.js 
	//highlight:false,
	//unhighlight:false,
	rules: {
 first_name: {
			required: true
		},
		
 last_name: {
			required: true
		},
 company_name: {
			required: true
		 },
 photograph: {
			required: true
		},
 company_logo: {
			required: true
		},		 
		 
 password: {
			required: true
		},
 address: {
	 	required: true
		},
 city: {
			required: true
		},
 state: {
			required: true
		},
 zipcode: {
			required: true
		    },
 phone: {
		required: true,
		 minlength: 10,
		 number : true
		    },
 mob: {
		required: true,
		 minlength: 10,
		 number : true
		    },
 skype:{
        required:true
       		},
 company_url:{
        required:true,
		url:true
       		},
			
 email1: {
	required: true,
	email: true 
		    },
 email2: {
	    required:true,
		email: true 	
			},
 facebook_url_personal: {
			required: true,
			url: true,		
					},	
 facebook_url_company: {
			required: true,
			url: true,
			},
 linkedin_url: {
			required: true,
			url: true,
			},
 twitter: {
			required: true,
			url: true,
			},
 company_details:{
			required: true
		},
 state_company_registered:{
			required: true
		},
 country:{
	 required:true
	 
	    },
 seeking_company:{
	 required:true
	         },	
 investment_size:{
	 required:true
	         },	
 min_amt:{
	 required:true
	         },	
 max_amt:{
	 required:true
	         },
 ownership_share:{
	 required:true
	         },	
 control_percentage:{
	 required:true
	         },	
 investor_details:{
	 required:true
	         },	
 experience_in_russia:{
	 required:true
	         },	
 experience_in_investment:{
	 required:true
	         },	
 portfolio:{
	 required:true
	         },	
 average_roi:{
	 required:true
	         },
 time_for_returns:{
	 required:true
	         },
 about_investment:{
	 required:true
	         },
 investing_experience:{
	 required:true
	         },
 ratings:{
	 required:true
	         },	
 companies_intrested_in:{
	 required:true
	         },		
investment_strategies:{
	 required:true
	         },		
 competitors:{
	 required:true
	         },		
 other_company_type:{
	 required:true
	         },		
 current_capitalization:{
	 required:true
	         },		
		
		
		},
	messages:{
	
  first_name:{
	required:"<td><div class='error-left'></div float:left><div class='error-inner'>The First Name is required.</div></td>",
			},

 last_name:{
		required:"<td><div class='error-left'></div float:left><div class='error-inner'>The Last Name field is required.</div></td>",
		},
 company_name:{
        	required:"<td><div class='error-left'></div float:left><div class='error-inner'>The Company Name field is required.</div></td>",
		},
 photograph: {
		required:"<td><div class='error-left'></div float:left><div class='error-inner'>This field is required.</div></td>",
		},	
 company_logo: {
		required:"<td><div class='error-left'></div float:left><div class='error-inner'>This field is required.</div></td>",
		},
 password: {
		required:"<td><div class='error-left'></div float:left><div class='error-inner'>The Password field is required.</div></td>",
		},

 address:{
		required:"<td><div class='error-left'></div float:left><div class='error-inner'>The Address field is required.</div></td>",
		},
 city: {
		required:"<td><div class='error-left'></div float:left><div class='error-inner'>The City field is required.</div></td>",
		},
 state: {
		required:"<td><div class='error-left'></div float:left><div class='error-inner'> The State field is required.</div></td>",
		},
 zipcode: {
		required:"<td><div class='error-left'></div float:left><div class='error-inner'> The Zipcode field is required.</div></td>",
		},
 phone: {
	required:"<td><div class='error-left'></div float:left><div class='error-inner'>The Phone Number field is required.</div></td>",
   	minlength:"<td><div class='error-left'></div float:left><div class='error-inner'>Please Enter atleast 10 digit Number.</div></td>",
	number:"<div class='error-inner' style='float:inherit'>                   Please Enter a valid Contact Number</div>"
				},
 mob: {
	  required:"<td><div class='error-left'></div float:left><div class='error-inner'>The Mobile Number field is required.</div></td>",
   	minlength:"<td><div class='error-left'></div float:left><div class='error-inner'>Please Enter atleast 10 digit Number.</div></td>",
	number:"<div class='error-inner' style='float:inherit'>                   Please Enter a valid Contact Number</div>"	
			    },			
 skype:{
        required:"<td><div class='error-left'></div float:left><div class='error-inner'> The Skype field is required.</div></td>",
       		    },
 company_url:{
     required:"<td><div class='error-left'></div float:left><div class='error-inner'> The Zipcode field is required.</div></td>",
	     url:"<td><div class='error-left'></div float:left><div class='error-inner'> The Zipcode field is required.</div></td>",
        
       		},
				 
 email1:{
        required:"<td><div class='error-left'></div float:left><div class='error-inner'> The Email field is required.</div></td>",
        email:"<td><div class='error-left'></div float:left><div class='error-inner'> Please Enter a Valid email</div></td>",
       		    },	
 email2:{
	 	required:"<td><div class='error-left'></div float:left><div class='error-inner'> The Email field is required.</div></td>",
		email:"<td><div class='error-left'></div float:left><div class='error-inner'> Plaease Enter a Valid email.</div></td>",	
				},
 facebook_url_personal: {
		required:"<td><div class='error-left'></div float:left><div class='error-inner'> This field is required.</div></td>",
		url:"<td><div class='error-left'></div float:left><div class='error-inner'> Plaease Enter a Valid url.</div></td>",
		},
  facebook_url_company: {
		required:"<td><div class='error-left'></div float:left><div class='error-inner'> This field is required.</div></td>",
		url:"<td><div class='error-left'></div float:left><div class='error-inner'> Plaease Enter a Valid url.</div></td>",						},
 
 linkedin_url: {
		required:"<td><div class='error-left'></div float:left><div class='error-inner'> This field is required.</div></td>",
		url:"<td><div class='error-left'></div float:left><div class='error-inner'> Plaease Enter a Valid url.</div></td>",
			},
 
 twitter: {
		required:"<td><div class='error-left'></div float:left><div class='error-inner'> This field is required.</div></td>",
		url:"<td><div class='error-left'></div float:left><div class='error-inner'> Plaease Enter a Valid url.</div></td>",
					},
 company_details:{
		required:"<td><div class='error-left'></div float:left><div class='error-inner'> This field is required.</div></td>",					
		},
 
 state_company_registered:{
        required:"<td><div class='error-left'></div float:left><div class='error-inner'> This field is required.</div></td>",
					},
   country:{
        required:"<td><div class='error-left'></div float:left><div class='error-inner'> This field is required.</div></td>",
					},		
 seeking_company:{
                   required:"<td><div class='error-left'></div float:left>   <div class='error-inner'>The seeking company field is required.</div></td>"
		},
		
 investment_size:{
	                   required:"<td><div class='error-left'></div>                 <div class='error-inner'>this field is required.</div></td>"
					},
 min_amt:{
		required: "<td><div class='error-left'></div float:left><div class='error-inner'> minimum amount field is required.</div></td>",
		},
 max_amt:{
		required:"<td><div class='error-left'></div><div class='error-inner'>                     The maximum amount field is required.</div></td>",
					},
 
 ownership_share:{
		required:"<td><div class='error-left'></div float:left>     <div class='error-inner'> ownership share field is required.</div></td>"
		},
 control_percentage:{
            required: "<td><div class='error-left'></div float:left>           <div class='error-inner'>The control percentage field is required.</div></td>",
		},
 investor_details:{
		required:"<td><div class='error-left'></div float:left>               <div class='error-inner'>The Investor details field is required.</div></td>",
		},
 experience_in_russia:{
		required:"<td><div class='error-left'></div float:left>             <div class='error-inner'>The Experience in Russia field is required.</div></td>",
		},
 experience_in_investment:{
		required:"<td><div class='error-left'></div float:left>                <div class='error-inner'> This field is required.</div></td>",
		},
 portfolio:{
		required:"<td><div class='error-left'></div float:left>               <div class='error-inner'>The portfolio field is required.</div></td>",
		},
 average_roi:{
		required:"<td><div class='error-left'></div float:left>                <div class='error-inner'> The Average ROI field is required.</div></td>",
		},
 time_for_returns:{
		required:"<td><div class='error-left'></div float:left>                <div class='error-inner'>The Time for Returns  field is required.</div></td>",
		},
 about_investment :{
		required:"<td><div class='error-left'></div float:left>               <div class='error-inner'>The About investment field is required.</div></td>",
		},
 investing_experience :{
		required:"<td><div class='error-left'></div float:left>                <div class='error-inner'>This field is required.</div></td>",
		},
 ratings:{
		required:"<td><div class='error-left'></div float:left>               <div class='error-inner'>The Ratings field is required.</div></td>",
		},
 companies_intrested_in:{
		required:"<td><div class='error-left'></div float:left>                <div class='error-inner'>This field is required.</div></td>",
		},
 investment_strategies:{
		required:"<td><div class='error-left'></div float:left>               <div class='error-inner'>The investment strategies field is required.</div></td>",
		},
 competitors :{
		required:"<td><div class='error-left'></div float:left><div class='error-inner'>The competitors field is required.</div></td>",
		},				
 other_company_type :{
		required:"<td><div class='error-left'></div float:left><div class='error-inner'>This field is required.</div></td>",
		},				
 current_capitalization :{
		required:"<td><div class='error-left'></div float:left><div class='error-inner'>This field is required.</div></td>"
		},				




	} 
		 
});
	});
</script>
<div class="rightdivsite">
  <div class="clear" style="height:14px"></div>
    <div class="videodiv">
     <div class="fucher_cont">
      <div class="box"> 
      <div class="box-heading">Investor Registration </div></div>
      <div class="box" >

          <?php 
		  error_reporting(0); 
$attributes = array('class' => 'investor', 'id' => 'investor');
		 echo form_open('investor/investregsave',$attributes);?>

            <fieldset>
              <legend>Please fill the form to complete the registration </legend>
              <?php
              if ($this->session->flashdata('message') != ''){
                  echo '<div class="box success">'.$this->session->flashdata('message').'</div>';
              } elseif(validation_errors()) {
                  echo  '<div class="warning">'.validation_errors('<p>').'</div>';

               } ?>

                   <div class="content" style="width:100%">
                        <?php $latts = array(
                            'class' => 'label',
                        ); ?>
                        
                          <?php $options = array(
							  'Mr'  => 'Mr',
							  'Miss'    => 'Miss',
							  'Mrs'   => 'Mrs',
							  'Dr' => 'Dr',
							); ?>

                         <p>
                          <?php echo form_label('*Title:', 'title'); ?><br/>
                          <?php echo form_dropdown('title',$options,'Mr'); ?>
                         </p>

                         <?php $atts = array(
                            'name' => 'first_name',
                            'id'   => 'first_name',
                            'size' => '35',
                            'value' => set_value('first_name'),
                        ); ?>

                         <div style="float:left;margin-bottom:10px;width:50%">
              <?php echo form_label('*First Name:', 'first_name', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                         
                           <?php $atts = array(
                            'name' => 'last_name',
                            'id'   => 'last_name',
                            'size' => '35',
                            'value' => set_value('last_name'),
                        ); ?>

                         <div style="float:right;margin-bottom:10px;width:50%">
                           <?php echo form_label('*Last Name:', 'last_name', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>

                        <?php $atts = array(
                            'name' => 'company_name',
                            'id'   => 'company_name',
                            'size' => '35',
                            'value' => set_value('company_name'),
                        ); ?>

                        <div style="float:left;margin-bottom:10px;width:50%">
                 <?php echo form_label('*Company:', 'company_name', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                      <?php $atts = array(
                            'name' => 'password',
                            'id'   => 'password',
                            'size' => '35',
                        ); ?>
                        <div style="float:right;margin-bottom:10px;width:50%"> 
                  <?php echo form_label('*Password:', 'password', $latts); ?><br/>
                           <?php echo form_password($atts); ?>
                        </div>   
                   <?php $atts = array(
                            'name' => 'photograph',
                            'id'   => 'photograph',
                            'size' => '35',
                            'value' => set_value('photograph'),
                        ); ?>      
                         <div style="float:left;margin-bottom:10px;width:50%">
                      <?php echo form_label('Upload Photograph:', $latts); ?>				                                   <br/>
					  
                       <?php echo form_upload($atts); ?>
                        </div>
                      <?php $atts = array(
                            'name' => 'company_logo',
                            'id'   => 'company_logo',
                            'size' => '35',
                            'value' => set_value('company_logo'),
                        ); ?>
                      
                       <div style="float:right;margin-bottom:10px;width:50%">
                    <?php echo form_label('Upload company logo:', $latts); ?><br/>
					  
                       <?php echo form_upload($atts); ?>
                        </div>

 <?php $type_options = array(
			              'New Media' => 'New Media', 
	 'Design and Publishing Software' => 'Design and Publishing Software', 
     'Digital Advertising/Marketing Technology' => 'Digital      Advertising/Marketing Technology', 
	           'Dating and Matchmaking'=> 'Dating and Matchmaking', 
				    'On-Line Commerce' => 'On-Line Commerce', 
			'Digital Audio and Visual' => 'Digital Audio and Visual', 
			 'Search Engine/SEO techs' => 'Search Engine/SEO techs', 
								'Gaming'=> 'Gaming', 
								'VoIP'=> 'VoIP', 
		  'Social Networking Site/App' => 'Social Networking Site/App', 
				   'Internet Security' => 'Internet Security', 
					'Internet Access' => 'Internet Access',  
					'Mobile Internet' => 'Mobile Internet', 
					'Mobile Content' => 'Mobile Content', 
				    'Mobile Deivices' => 'Mobile Deivices',
				  'Mobile Marketing' => 'Mobile Marketing', 
						'Satellites' => 'Satellites', 
							  'IPTV' => 'IPTV', 
						'Digital TV' => 'Digital TV',  
						'Software' => 'Software', 
			'Anti-Virus Programs' => 'Anti-Virus Programs', 
		'Location-Based technology' => 'Location-Based technology',
							'Wimax' => 'Wimax', 
							'LTE' => 'LTE', 
					    	'Other' => 'Other'
							); ?>

                       <div style="float:left;margin-bottom:10px;width:100%">
                        <?php echo form_label('*Type:', 'type', $latts); ?>                             <br/>
                  <?php echo form_multiselect('type',$type_options,'',''); ?>
                         </div>

                       
                         <?php $atts = array(
                            'name' => 'address',
                            'id'   => 'address',
                            'size' => '35',
                            'value' => set_value('address'),
                        ); ?>
                        
                        <div style="float:left;margin-bottom:10px;width:50%">
                           <?php echo form_label('*Address:', 'address', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                         
                           <?php $atts = array(
                            'name' => 'city',
                            'id'   => 'city',
                            'size' => '35',
                            'value' => set_value('city'),
                        ); ?>

                         <div style="float:right;margin-bottom:10px;width:50%">
                           <?php echo form_label('*City:', 'city', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'state',
                            'id'   => 'state',
                            'size' => '35',
                            'value' => set_value('state'),
                        ); ?>
                       
                        <div style="float:left;margin-bottom:10px;width:50%">
                           <?php echo form_label('*State:', 'state', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                         
                           <?php $atts = array(
                            'name' => 'zipcode',
                            'id'   => 'zipcode',
                            'size' => '35',
                            'value' => set_value('zipcode'),
                        ); ?>

                         <div style="float:right;margin-bottom:10px;width:50%">
                           <?php echo form_label('*Zipcode:', 'zipcode', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'phone',
                            'id'   => 'phone',
                            'size' => '35',
                            'value' => set_value('phone'),
                        ); ?>

                         <div style="float:left;margin-bottom:10px;width:50%">
                           <?php echo form_label('*Phone:', 'phone', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                         <?php $atts = array(
                            'name' => 'mob',
                            'id'   => 'mob',
                            'size' => '35',
                            'value' => set_value('phone'),
                        ); ?>

                         <div style="float:right;margin-bottom:10px;width:50%">
                           <?php echo form_label('*Mobile:', 'mob', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                         
                           <?php $atts = array(
                            'name' => 'skype',
                            'id'   => 'skype',
                            'size' => '35',
                            'value' => set_value('skype'),
                        ); ?>
 						 <div style="float:left;margin-bottom:10px;width:50%">
                           <?php echo form_label('Skype:', 'skype', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                         
                         
                         <?php $atts = array(
                            'name' => 'company_url',
                            'id'   => 'company_url',
                            'size' => '35',
                            'value' => set_value('company_url'),
                        ); ?>

                        
                         <div style="float:right;margin-bottom:10px;width:50%">
                           <?php echo form_label('Company URL:', 'company_url', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                      
                          <?php $atts = array(
                            'name' => 'email1',
                            'id'   => 'email1',
                            'size' => '35',
                            'value' => set_value('email1'),
                        ); ?>

                         <div style="float:left;margin-bottom:10px;width:50%">
                           <?php echo form_label('*Email1:', 'email1', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'email2',
                            'id'   => 'email2',
                            'size' => '35',
                            'value' => set_value('email2'),
                        ); ?>
                      
                        <div style="float:right;margin-bottom:10px;width:50%">
                           <?php echo form_label('Email2:', 'email2', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                        
                          <?php $atts = array(
                            'name' => 'facebook_url_personal',
                            'id'   => 'facebook_url_personal',
                            'size' => '35',
                            'value' => set_value('Facebook_url_personal'),
                        ); ?>

                         <div style="float:left;margin-bottom:10px;width:50%">
                           <?php echo form_label('Personal Facebook Address:', 'facebook_url_personal', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'facebook_url_company',
                            'id'   => 'facebook_url_company',
                            'size' => '35',
                            'value' => set_value('facebook_url_company'),
                        ); ?>
                      
                        <div style="float:right;margin-bottom:10px;width:50%">
                           <?php echo form_label('Company Facebook Address:', 'facebook_url_company', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                         
                         <?php $atts = array(
                            'name' => 'linkedin_url',
                            'id'   => 'linkedin_url',
                            'size' => '35',
                            'value' => set_value('linkedin_url'),
                        ); ?>

                         <div style="float:left;margin-bottom:10px;width:50%">
                           <?php echo form_label('Linkedin:', 'linkedin_url', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'twitter',
                            'id'   => 'twitter',
                            'size' => '35',
                            'value' => set_value('twitter'),
                        ); ?>
                        <div style="float:right;margin-bottom:10px;width:50%">
                           <?php echo form_label('Twitter:', 'twitter', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                        <?php $atts = array(
                            'name' => 'company_details',
                            'id'   => 'company_details',
                            'rows' => '7',
							'cols' => '60',
                            'value' => set_value('company_details'),
                        ); ?>
                   		<div style="float:left;margin-bottom:10px;width:100%;">
                       <?php echo form_label('*Please describe in 500 words or less what makes your company or project exceptionally unique:', $latts); ?><br/>
                       <?php echo form_textarea($atts); ?>
                        </div>
                      <?php $atts = array(
                            'name' => 'state_company_registered',
                            'id'   => 'state_company_registered',
                            'size' => '35',
                            'value' => set_value('state_company_registered'),
                        ); ?>
                      <div style="float:left;width:100%;margin-bottom:10px;">  
                <?php echo form_label('State where company registered?:', 'usertype', $latts); ?><br/>
                            
                            <?php echo form_input($atts); ?>
                           
                         </div>
                          <div style="float:left;width:100%;margin-bottom:10px;">  
                           <?php echo form_label('* If not in US, please list  country and region that company is located in:', 'usertype', $latts); ?><br/> 
						   <?php $atts = array(
                            'name' => 'country',
                            'id'   => 'country',
                            'size' => '35',
                            'value' => set_value('country'),
                        ); ?>
						   <?php echo form_input($atts); ?>
                         </div>
                           <?php $type_options = array(
						   'Individual' => 'Individual',
						   'Acclerator' => 'Acclerator',
						   'Incubator' => 'Incubator',
						   'Venture Capital Fund' => 'Venture Capital Fund',
						   'Mutual Fund Manager' => 'Mutual Fund Manager',
						   'Private financial analyst' =>  'Private financial analyst',
						   'Broker/Institutional Investor' => 'Broker/Institutional Investor',
						   'Government Fund' => 'Government Fund',
							); ?>

                         <div style="float:left;margin-bottom:10px;width:100%;">
                           <?php echo form_label('*Company Type:', 'type', $latts); ?><br/>
                           <?php echo form_multiselect('company_type',$type_options,'',''); ?>
                         </div>
                         
                        <div style="float:left;margin-bottom:10px;width:50%
                        ">                         <?php echo form_label('*Other Company Type:', 'type', $latts); ?><br/>
                          <?php $atts = array(
                            'name' => 'other_company_type',
                            'id'   => 'other_company_type',
                            'size' => '35',
                            'value' => set_value('other_company_type'),
                        ); ?>
                          <?php echo form_input($atts); ?>
                        
                         </div>
                        
                         <div style="float:right;margin-bottom:10px;width:50%">
                         <?php echo form_label('*Current capitalization:', 'type', $latts); ?><br/>
                          <?php $atts = array(
                            'name' => 'current_capitalization',
                            'id'   => 'current_capitalization',
                            'size' => '35',
                            'value' => set_value('current_capitalization'),
                        ); ?>
                          <?php echo form_input($atts); ?>
       
                        </div>
                           <?php $atts = array(
                            'name' => 'seeking_company',
                            'id'   => 'seeking_company',
                            'rows' => '7',
							'cols' => '60',
                            'value' => set_value('seeking_company'),
                        ); ?>
                        <div style="float:left;margin-bottom:10px;width:100%;">
                       <?php echo form_label('*Please describe in 500 words the , as exactly as possible, the type of company you are seeking to invest in?', $latts); ?><br/>
                       <?php echo form_textarea($atts); ?>
                        </div>
                       <?php $atts = array(
                            'name' => 'investment_size',
                            'id'   => 'investment_size',
                            'size' => '20',
                            'value' => set_value('investment_size'),
                        ); ?>
                        <div style="float:left;margin-bottom:10px">
                         <?php echo form_label('*What size of investment are you seeking to make:?:', 'type', $latts); ?><br/>
                          
                          <?php echo form_input($atts); ?>
       
                        </div>
                       
                        <br />
                        <div style="float:left;margin-bottom:10px;width:50%">
                         <?php echo form_label('*Minimum:', 'type', $latts); ?><br/>
                          <?php $atts = array(
                            'name' => 'min_amt',
                            'id'   => 'min_amt',
                            'size' => '35',
                            'value' => set_value('min_amt'),
                        ); ?>
                          <?php echo form_input($atts); ?>
       
                        </div>
                        <div style="float:right;margin-bottom:10px;width:50%">
                       <?php echo form_label('*Maximum', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'max_amt',
                            'id'   => 'max_amt',
                            'size' => '35',
                            'value' => set_value('max_amt'),
                        ); ?>
                       <?php echo form_input($atts); ?>
                        </div>
                       <div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('What type of ownership share would you ideally like to get for your investment?', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'ownership_share',
                            'id'   => 'ownership_share',
                            'size' => '35',
                            'value' => set_value('ownership_share'),
                        ); ?>
                       <?php echo form_input($atts); ?>
                        </div>
                        
                        <div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('*Is controlling percentage a must?:
', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'control_percentage',
                            'id'   => 'control_percentage',
                            'size' => '35',
                            'value' => set_value('control_percentage'),
                        ); ?>
                       <?php echo form_input($atts); ?>
                       
                        </div>
                         <?php $atts = array(
                            'name' => 'investor_details',
                            'id'   => 'investor_details',
                            'rows' => '7',
							'cols' => '60',
                            'value' => set_value('investor_details'),
                        ); ?>
                   		 <div style="float:left;margin-bottom:10px;width:100%;">
                       <?php echo form_label('*If you would like to be a hands-on investor, please describe how you would like to be actively involved?', $latts); ?><br/>
                       <?php echo form_textarea($atts); ?>
                        </div>
                        
                          <?php $type_options = array(
						   'Start-Ups with registration' => 'Start-Ups with registration',
						   'Start-Ups without registration' => 'Start-Ups without registration',
						   'Start-Ups' => 'Start-Ups',
						   'Registered' => 'Registered',
						   'Any' => 'Any',
						  ); ?>
                          
                        <div style="float:left;margin-bottom:10px;width:100%;">
                           <?php echo form_label('*Check below if you are interested in considering:', 'type', $latts); ?><br/>
                           <?php echo form_multiselect('companies_looking',$type_options,'',''); ?>
                        </div>
                         <div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('*Experience in Russia/C.I.S, if applicable:
', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'experience_in_russia',
                            'id'   => 'experience_in_russia',
                            'size' => '35',
                            'value' => set_value('experience_in_russia'),
                        ); ?>
                       <?php echo form_input($atts); ?>
                       
                        </div>
                        
                        <div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('*Experience in investment and early stage technology/new media companies, if applicable:', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'experience_in_investment',
                            'id'   => 'experience_in_investment',
                            'size' => '35',
                            'value' => set_value('experience_in_investment'),
                        ); ?>
                       <?php echo form_input($atts); ?>
                       
                        </div>

						<div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('*Current companies in your portfolio?', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'portfolio',
                            'id'   => 'portfolio',
                            'size' => '35',
                            'value' => set_value('portfolio'),
                        ); ?>
                       <?php echo form_textarea($atts); ?>
                       
                        </div>
                        
                        <div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('*Average ROI in terms of time and percent?', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'average_roi',
                            'id'   => 'average_roi',
                            'size' => '35',
                            'value' => set_value('average_roi'),
                        ); ?>
                       <?php echo form_input($atts); ?>
                       
                        </div>
                          <div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('*What is your ideal time period for seeing such a return? ', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'time_for_returns',
                            'id'   => 'time_for_returns',
                            'size' => '35',
                            'value' => set_value('time_for_returns'),
                        ); ?>
                       <?php echo form_input($atts); ?>
                       
                        </div>
                        
                       <div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('*Would you like the return to occur based on additional investment, a buy-out, organic growth, or is this insignificant?', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'about_investment',
                            'id'   => 'about_investment',
                            'size' => '35',
                            'value' => set_value('about_investment'),
                        ); ?>
                       <?php echo form_input($atts); ?>
                       </div>
                       
                           <?php $atts = array(
                            'name' => 'investing_experience',
                            'id'   => 'investing_experience',
                            'size' => '35',
                            'value' => set_value('investing_experience'),
                        ); ?>
                      
                        <div style="float:right;margin-bottom:10px;width:100%;">
                           <?php echo form_label('*Please describe the positives and negatives of your experience in the region and in investing in tech/media companies, if applicable:', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                          <?php $atts = array(
                            'name' => 'ratings',
                            'id'   => 'ratings',
                            'size' => '15',
                            'value' => set_value('ratings'),
                        ); ?>
                      
                        <div style="float:right;margin-bottom:10px;width:100%;">
                           <?php echo form_label('*On a scale from 1 to 5, with one being completely flexible to 5 being strictly conservative, what type of investor would you describe yourself as', 'ratings', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                        <div style="float:left;width:100%;margin-bottom:10px;">  
                           <?php echo form_label('*Are you interested in participating in crowdsourcing/group financing?', 'interested_in_incrowdsourcing', $latts); ?><br/>
                           
                          <?php $data = array(
                            'name'        => 'interested_in_incrowdsourcing',
                            'id'          => 'true',
                            'value'       => 'true',
                            'checked'     => TRUE,
                            );
                          ?> 
                          <span style="margin-top:10px; display:inline-block;"> <?php echo form_radio($data); ?></span>
                          <span style="margin: 0 12px 0 4px; vertical-align: text-bottom;"> True </span>
                    
                          <?php $data = array(
                            'name'        => 'interested_in_incrowdsourcing',
                            'id'          => 'false',
                            'value'       => 'false',
                            'checked'     => FALSE,
                            );
                          ?> 
                          <span style="margin-top:10px; display:inline-block;"> <?php echo form_radio($data); ?></span>
                          <span style="vertical-align: text-bottom;"> False </span>
                        </div>
                        <div style="float:left;width:100%;margin-bottom:10px;">  
                           <?php echo form_label('*Will you only consider projects from an experienced management team or board that has shown past successes?', 'interested_in_bd', $latts); ?><br/>
                           
                          <?php $data = array(
                            'name'        => 'project_consideration',
                            'id'          => 'true',
                            'value'       => 'true',
                            'checked'     => TRUE,
                            );
                          ?> 
                          <span style="margin-top:10px; display:inline-block;"> <?php echo form_radio($data); ?></span>
                          <span style="margin: 0 12px 0 4px; vertical-align: text-bottom;"> True </span>
                    
                          <?php $data = array(
                            'name'        => 'project_consideration',
                            'id'          => 'false',
                            'value'       => 'false',
                            'checked'     => FALSE,
                            );
                          ?> 
                          <span style="margin-top:10px; display:inline-block;"> <?php echo form_radio($data); ?></span>
                          <span style="vertical-align: text-bottom;"> False </span>
                        </div>
                         <div style="float:left;width:100%;margin-bottom:10px;">  
                           <?php echo form_label('*Would you want to consider the option of having 1 or 2 like-minded partners?.  If ever this becomes the case, do not hesitate to write to partnerme@speedfundrussia.com.', 'partners_consideration', $latts); ?><br/>
                           
                          <?php $data = array(
                            'name'        => 'partners_consideration',
                            'id'          => 'true',
                            'value'       => 'true',
                            'checked'     => TRUE,
                            );
                          ?> 
                          <span style="margin-top:10px; display:inline-block;"> <?php echo form_radio($data); ?></span>
                          <span style="margin: 0 12px 0 4px; vertical-align: text-bottom;"> True </span>
                    
                          <?php $data = array(
                            'name'        => 'partners_consideration',
                            'id'          => 'false',
                            'value'       => 'false',
                            'checked'     => FALSE,
                            );
                          ?> 
                          <span style="margin-top:10px; display:inline-block;"> <?php echo form_radio($data); ?></span>
                          <span style="vertical-align: text-bottom;"> False </span>
                        </div>
                        <div style="float:left;margin-bottom:10px;width:100%;">
                       <?php echo form_label('*What companies from the region have you heard about and have certain interest in? ', $latts); ?><br/>
                        <?php $atts = array(
                            'name' => 'companies_intrested_in',
                            'id'   => 'companies_intrested_in',
                            'size' => '35',
                            'value' => set_value('companies_intrested_in'),
                        ); ?>
                       <?php echo form_textarea($atts); ?>
                        </div>
                         <div style="float:left;margin-bottom:10px;width:100%;">
                       <?php echo form_label('*What investors/investment strategies as concerns early-stage media and tech companies or, better yet, early stage tech and media companies in the region, do you have particular respect for and why? ', $latts); ?><br/>
                        <?php $atts = array(
                            'name' => 'investment_strategies',
                            'id'   => 'investment_strategies',
                            'size' => '35',
                            'value' => set_value('investment_strategies'),
                        ); ?>
                       <?php echo form_textarea($atts); ?>
                        </div>
                        
                         <div style="float:left;margin-bottom:10px;width:100%;">
                       <?php echo form_label('*What investors/firms would you consider to be competitors to your own?', $latts); ?><br/>
                        <?php $atts = array(
                            'name' => 'competitors',
                            'id'   => 'competitors',
                            'size' => '35',
                            'value' => set_value('competitors'),
                        ); ?>
                       <?php echo form_textarea($atts); ?>
                        </div>
                        

                       <?php $atts = array(
                              'name'    => 'companyreg',
                              'value'   => 'Submit',
                              'class'   => 'button',
                           ); ?>
                        <div style="float:left;width:100%;margin-bottom:10px;">  
                            <span> <?php echo form_submit($atts); ?></span> 
                          
                      </div>
                       
                 </div>
            </fieldset>
         <?php echo form_close(); ?>

    </div>
    </div>
            
             
      </div>
 
 </div>
 
 </div>
</div>
<div class="clear"></div>