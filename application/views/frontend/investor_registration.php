<div class="rightdivsite">
  <div class="clear" style="height:14px"></div>
    <div class="videodiv">
     <div class="fucher_cont">
      <div class="box"> 
      <div class="box-heading">Investor Registration </div></div>
      <div class="box" >
		<?php
		if(count($getinvestor)>1){
		 $firstname = $getinvestor['first_name']; 
		 $lastname = $getinvestor['last_name'];
		 $company = $getinvestor['company'];
		 $photograph = $getinvestor['photograph'];
		 $company_logo = $getinvestor['company_logo'];
		 $project_type = $getinvestor['project_type'];
		 $other = $getinvestor['other'];
		 $address = $getinvestor['address'];
		 $city = $getinvestor['city'];
		 $state = $getinvestor['state'];
		 $zipcode = $getinvestor['zipcode'];
		 $phone = $getinvestor['phone'];
		 $contact_number = $getinvestor['contact_number'];
		 $email1 = $getinvestor['email1'];
		 $email2 = $getinvestor['email2'];
		 $skype = $getinvestor['skype'];
		 $company_url = $getinvestor['company_url'];
		 $facebook_url_personal = $getinvestor['facebook_url_personal'];
		 $facebook_url_company = $getinvestor['facebook_url_company'];
		 $twitter = $getinvestor['twitter'];
		 $company_details = $getinvestor['company_details'];
		 $other_company_type = $getinvestor['other_company_type'];
		 $linkedin_url = $getinvestor['linkedin_url'];
		 $state_company_registered = $getinvestor['state_company_registered'];
		 $country = $getinvestor['country'];
		 $company_type = $getinvestor['company_type'];
		 $current_capitalization = $getinvestor['current_capitalization'];
		 $seeking_company = $getinvestor['seeking_company'];
		 $investment_size = $getinvestor['investment_size'];
		 $min_amt = $getinvestor['min_amt'];
		 $max_amt = $getinvestor['max_amt'];
		 $ownership_share = $getinvestor['ownership_share'];
		 $control_percentage = $getinvestor['control_percentage'];
		 $investor_details = $getinvestor['investor_details'];
		 $companies_looking = $getinvestor['companies_looking'];
		 $experience_in_russia = $getinvestor['experience_in_russia'];
		 $experience_in_investment = $getinvestor['experience_in_investment'];
		 $portfolio = $getinvestor['portfolio'];
		 $average_roi = $getinvestor['average_roi'];
		 $time_for_returns = $getinvestor['time_for_returns'];
		 $about_investment = $getinvestor['about_investment'];
		 $investing_experience = $getinvestor['investing_experience'];
		 $ratings = $getinvestor['ratings'];
		 $interested_in_crowdsourcing = $getinvestor['interested_in_crowdsourcing'];
		 $project_consideration = $getinvestor['project_consideration'];
		 $partners_consideration = $getinvestor['partners_consideration'];
		 $companies_intrested_in = $getinvestor['companies_intrested_in'];
		 $investment_strategies = $getinvestor['investment_strategies'];
		 $competitors = $getinvestor['competitors'];
		 $create_date = $getinvestor['create_date'];
		 $status = $getinvestor['status'];
		 
		 
		 
		}else{
		$firstname	="";
		$lastname	="";
		$company = "";
		 $photograph = "";
		 $company_logo = "";
		 $project_type = "";
		 $other = "";
		 $address = "";
		 $city = "";
		 $state = "";
		 $zipcode = "";
		 $phone = "";
		 $contact_number = "";
		 $email1 = "";
		 $email2 = "";
		 $skype = "";
		 $company_url = "";
		 $facebook_url_personal = "";
		 $facebook_url_company = "";
		 $twitter = "";
		 $company_details = "";
		 $other_company_type = "";
		 $linkedin_url = "";
		 $state_company_registered = "";
		 $country = "";
		 $company_type = "";
		 $current_capitalization = "";
		 $seeking_company = "";
		 $investment_size = "";
		 $min_amt = "";
		 $max_amt = "";
		 $ownership_share = "";
		 $control_percentage = "";
		 $investor_details = "";
		 $companies_looking = "";
		 $experience_in_russia = "";
		 $experience_in_investment = "";
		 $portfolio = "";
		 $average_roi = "";
		 $time_for_returns = "";
		 $about_investment = "";
		 $investing_experience = "";
		 $ratings = "";
		 $interested_in_crowdsourcing = "";
		 $project_consideration = "";
		 $partners_consideration = "";
		 $companies_intrested_in = "";
		 $investment_strategies = "";
		 $competitors = "";
		 $create_date = "";
		 $status = "";
		 
		}
		
		?>
          <?php echo form_open('investor/investregsave');?>

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
                            'value' => $firstname,
                        ); ?>

                         <div style="float:left;margin-bottom:10px">
                           <?php echo form_label('*First Name:', 'first_name', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                         
                           <?php $atts = array(
                            'name' => 'last_name',
                            'id'   => 'last_name',
                            'size' => '35',
                            'value' => $lastname,
                        ); ?>

                         <div style="float:right;margin-bottom:10px">
                           <?php echo form_label('*Last Name:', 'last_name', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>

                        <?php $atts = array(
                            'name' => 'company',
                            'id'   => 'company',
                            'size' => '35',
                            'value' => $company,
                        ); ?>

                        <div style="float:left;margin-bottom:10px">
                           <?php echo form_label('*Company:', 'company', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                         <div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('Upload Photograph:', $latts); ?><br/>
					   <?php $atts = array(
                            'name' => 'photograph',
                            'id'   => 'photograph',
                            'size' => '35',
                            'value' => $photograph,
                        ); ?>
                       <?php echo form_upload($atts); ?>
                        </div>
                       <div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('Upload company logo:', $latts); ?><br/>
						  <?php $atts = array(
                                'name' => 'company_logo',
                                'id'   => 'company_logo',
                                'size' => '35',
                                'value' => $company_logo,
                            ); ?>
                           <?php echo form_upload($atts); ?>
                        </div>

                          <?php $type_options = array(
								'New Media' => 'New Media', 
								'Design and Publishing Software' => 'Design and Publishing Software', 
								'Digital Advertising/Marketing Technology' => 'Digital Advertising/Marketing Technology', 
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
                           <?php echo form_label('*Type:', 'type', $latts); ?><br/>
                           <?php echo form_multiselect('type',$type_options,'',''); ?>
                         </div>

                         <?php $atts = array(
                            'name' => 'other',
                            'id'   => 'other',
                            'size' => '35',
                        ); ?>
                       <div style="float:left;margin-bottom:10px;width:100%">
                           <?php echo form_label('Other:', 'other', $latts); ?><br/>
                           <?php echo form_password($atts); ?>
                        </div>
                         <?php $atts = array(
                            'name' => 'address',
                            'id'   => 'address',
                            'size' => '35',
                            'value' => $address,
                        ); ?>
                        
                        <div style="float:left;margin-bottom:10px">
                           <?php echo form_label('*Address:', 'address', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                         
                           <?php $atts = array(
                            'name' => 'city',
                            'id'   => 'city',
                            'size' => '35',
                            'value' => $city,
                        ); ?>

                         <div style="float:right;margin-bottom:10px">
                           <?php echo form_label('*City:', 'city', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'state',
                            'id'   => 'state',
                            'size' => '35',
                            'value' => $state,
                        ); ?>
                       
                        <div style="float:left;margin-bottom:10px">
                           <?php echo form_label('*State:', 'state', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                         
                           <?php $atts = array(
                            'name' => 'zipcode',
                            'id'   => 'zipcode',
                            'size' => '35',
                            'value' => $zipcode,
                        ); ?>

                         <div style="float:right;margin-bottom:10px;">
                           <?php echo form_label('*Zipcode:', 'zipcode', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'phone',
                            'id'   => 'phone',
                            'size' => '35',
                            'value' => $phone,
                        ); ?>

                         <div style="float:left;margin-bottom:10px;width:100%">
                           <?php echo form_label('*Phone:', 'phone', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                         
                           <?php $atts = array(
                            'name' => 'skype',
                            'id'   => 'skype',
                            'size' => '35',
                            'value' => $skype,
                        ); ?>
 						 <div style="float:left;margin-bottom:10px;">
                           <?php echo form_label('Skype:', 'skype', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                         
                         
                         <?php $atts = array(
                            'name' => 'company_url',
                            'id'   => 'company_url',
                            'size' => '35',
                            'value' => $company_url,
                        ); ?>

                        
                         <div style="float:right;margin-bottom:10px;">
                           <?php echo form_label('Company URL:', 'company_url', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                      
                          <?php $atts = array(
                            'name' => 'email1',
                            'id'   => 'email1',
                            'size' => '35',
                            'value' => $email1,
                        ); ?>

                         <div style="float:left;margin-bottom:10px">
                           <?php echo form_label('*Email1:', 'email1', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'email2',
                            'id'   => 'email2',
                            'size' => '35',
                            'value' => $email2,
                        ); ?>
                      
                        <div style="float:right;margin-bottom:10px">
                           <?php echo form_label('Email2:', 'email2', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                        
                          <?php $atts = array(
                            'name' => 'facebook_url_personal',
                            'id'   => 'facebook_url_personal',
                            'size' => '35',
                            'value' => $facebook_url_personal,
                        ); ?>

                         <div style="float:left;margin-bottom:10px">
                           <?php echo form_label('Personal Facebook Address:', 'facebook_url_personal', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'facebook_url_company',
                            'id'   => 'facebook_url_company',
                            'size' => '35',
                            'value' => $facebook_url_company,
                        ); ?>
                      
                        <div style="float:right;margin-bottom:10px">
                           <?php echo form_label('Company Facebook Address:', 'facebook_url_company', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                         
                         <?php $atts = array(
                            'name' => 'linkedin_url',
                            'id'   => 'linkedin_url',
                            'size' => '35',
                            'value' => $linkedin_url,
                        ); ?>

                         <div style="float:left;margin-bottom:10px">
                           <?php echo form_label('Linkedin:', 'linkedin_url', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                         </div>
                          <?php $atts = array(
                            'name' => 'twitter',
                            'id'   => 'twitter',
                            'size' => '35',
                            'value' => $twitter,
                        ); ?>
                        <div style="float:right;margin-bottom:10px">
                           <?php echo form_label('Twitter:', 'twitter', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                        <?php $atts = array(
                            'name' => 'company_details',
                            'id'   => 'company_details',
                            'rows' => '7',
							'cols' => '72',
                            'value' => $company_details,
                        ); ?>
                   		<div style="float:left;margin-bottom:10px;width:100%;">
                       <?php echo form_label('*Please describe in 500 words or less what makes your company or project exceptionally unique:', $latts); ?><br/>
                       <?php echo form_textarea($atts); ?>
                        </div>
                        <div style="float:left;width:100%;margin-bottom:10px;">  
                           <?php echo form_label('State where company registered?:', 'usertype', $latts); ?><br/>
                            <?php $atts = array(
                            'name' => 'state_company_registered',
                            'id'   => 'state_company_registered',
                            'size' => '35',
                            'value' => $state_company_registered,
                        ); ?>
                            <?php echo form_input($atts); ?>
                           
                         </div>
                          <div style="float:left;width:100%;margin-bottom:10px;">  
                           <?php echo form_label('* If not in US, please list  country and region that company is located in:', 'usertype', $latts); ?><br/> 
						   <?php $atts = array(
                            'name' => 'country',
                            'id'   => 'country',
                            'size' => '35',
                            'value' => $country,
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
                         
                        <div style="float:left;margin-bottom:10px">
                         <?php echo form_label('*Other Company Type:', 'type', $latts); ?><br/>
                          <?php $atts = array(
                            'name' => 'other_company_type',
                            'id'   => 'other_company_type',
                            'size' => '35',
                            'value' => $other_company_type,
                        ); ?>
                          <?php echo form_input($atts); ?>
                        
                         </div>
                        
                         <div style="float:left;margin-bottom:10px">
                         <?php echo form_label('*Current capitalization:', 'type', $latts); ?><br/>
                          <?php $atts = array(
                            'name' => 'current_capitalization',
                            'id'   => 'current_capitalization',
                            'size' => '10',
                            'value' => $current_capitalization,
                        ); ?>
                          <?php echo form_input($atts); ?>
       
                        </div>
                           <?php $atts = array(
                            'name' => 'seeking_company',
                            'id'   => 'seeking_company',
                            'rows' => '7',
							'cols' => '72',
                            'value' => $seeking_company,
                        ); ?>
                        <div style="float:left;margin-bottom:10px;width:100%;">
                       <?php echo form_label('*Please describe in 500 words the , as exactly as possible, the type of company you are seeking to invest in?', $latts); ?><br/>
                       <?php echo form_textarea($atts); ?>
                        </div>
                        <div style="float:left;margin-bottom:10px">
                         <?php echo form_label('*What size of investment are you seeking to make:?:', 'type', $latts); ?><br/>
                          <?php $atts = array(
                            'name' => 'investment_size',
                            'id'   => 'investment_size',
                            'size' => '20',
                            'value' => $investment_size,
                        ); ?>
                          <?php echo form_input($atts); ?>
       
                        </div>
                        <div style="float:left;margin-bottom:10px">
                         <?php echo form_label('*What size of investment are you seeking to make:?:', 'type', $latts); ?><br/>
                          <?php $atts = array(
                            'name' => 'investment_size',
                            'id'   => 'investment_size',
                            'size' => '20',
                            'value' => $investment_size,
                        ); ?>
                          <?php echo form_input($atts); ?>
       
                        </div>
                        <br />
                        <div style="float:left;margin-bottom:10px">
                         <?php echo form_label('*Minimum:', 'type', $latts); ?><br/>
                          <?php $atts = array(
                            'name' => 'min_amt',
                            'id'   => 'min_amt',
                            'size' => '35',
                            'value' => $min_amt,
                        ); ?>
                          <?php echo form_input($atts); ?>
       
                        </div>
                        <div style="float:right;margin-bottom:10px;">
                       <?php echo form_label('*Maximum', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'max_amt',
                            'id'   => 'max_amt',
                            'size' => '35',
                            'value' => $max_amt,
                        ); ?>
                       <?php echo form_input($atts); ?>
                        </div>
                       <div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('What type of ownership share would you ideally like to get for your investment?', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'ownership_share',
                            'id'   => 'ownership_share',
                            'size' => '35',
                            'value' => $ownership_share,
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
                            'value' => $control_percentage,
                        ); ?>
                       <?php echo form_input($atts); ?>
                       
                        </div>
                         <?php $atts = array(
                            'name' => 'investor_details',
                            'id'   => 'investor_details',
                            'rows' => '7',
							'cols' => '72',
                            'value' => $investor_details,
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
                            'rows' => '7',
							'cols' => '72',
                            'value' => $experience_in_russia,
                        ); ?>
                       <?php echo form_input($atts); ?>
                       
                        </div>
                        
                        <div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('*Experience in investment and early stage technology/new media companies, if applicable:', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'experience_in_investment',
                            'id'   => 'experience_in_investment',
                            'size' => '35',
                            'value' => $experience_in_investment,
                        ); ?>
                       <?php echo form_input($atts); ?>
                       
                        </div>

						<div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('*Current companies in your portfolio?', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'portfolio',
                            'id'   => 'portfolio',
                            'rows' => '7',
							'cols' => '72',
                            'value' => $portfolio,
                        ); ?>
                       <?php echo form_textarea($atts); ?>
                       
                        </div>
                        
                        <div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('*Average ROI in terms of time and percent?', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'average_roi',
                            'id'   => 'average_roi',
                            'size' => '35',
                            'value' => $average_roi,
                        ); ?>
                       <?php echo form_input($atts); ?>
                       
                        </div>
                          <div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('*What is your ideal time period for seeing such a return? ', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'time_for_returns',
                            'id'   => 'time_for_returns',
                            'size' => '35',
                            'value' => $time_for_returns,
                        ); ?>
                       <?php echo form_input($atts); ?>
                       
                        </div>
                        
                       <div style="float:left;margin-bottom:10px;width:100%">
                       <?php echo form_label('*Would you like the return to occur based on additional investment, a buy-out, organic growth, or is this insignificant?', $latts); ?><br/>
					  <?php $atts = array(
                            'name' => 'about_investment',
                            'id'   => 'about_investment',
                            'size' => '35',
                            'value' => $about_investment,
                        ); ?>
                       <?php echo form_input($atts); ?>
                       </div>
                       
                           <?php $atts = array(
                            'name' => 'investing_experience',
                            'id'   => 'investing_experience',
                            'size' => '35',
                            'value' => $investing_experience,
                        ); ?>
                      
                        <div style="float:right;margin-bottom:10px;width:100%;">
                           <?php echo form_label('*Please describe the positives and negatives of your experience in the region and in investing in tech/media companies, if applicable:', $latts); ?><br/>
                           <?php echo form_input($atts); ?>
                        </div>
                          <?php $atts = array(
                            'name' => 'ratings',
                            'id'   => 'ratings',
                            'size' => '15',
                            'value' => $ratings,
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
							'rows' => '5',
							'cols' => '72',
                            'value' => $companies_intrested_in,
                        ); ?>
                       <?php echo form_textarea($atts); ?>
                        </div>
                         <div style="float:left;margin-bottom:10px;width:100%;">
                       <?php echo form_label('*What investors/investment strategies as concerns early-stage media and tech companies or, better yet, early stage tech and media companies in the region, do you have particular respect for and why? ', $latts); ?><br/>
                        <?php $atts = array(
                            'name' => 'investment_strategies',
                            'id'   => 'investment_strategies',
                            'size' => '35',
							'rows' => '5',
							'cols' => '72',
                            'value' => $investment_strategies,
                        ); ?>
                       <?php echo form_textarea($atts); ?>
                        </div>
                        
                         <div style="float:left;margin-bottom:10px;width:100%;">
                       <?php echo form_label('*What investors/firms would you consider to be competitors to your own?', $latts); ?><br/>
                        <?php $atts = array(
                            'name' => 'competitors',
                            'id'   => 'competitors',
                            'size' => '35',
							'rows' => '5',
							'cols' => '72',
                            'value' => $competitors,
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