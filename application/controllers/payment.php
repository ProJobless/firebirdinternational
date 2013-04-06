<?php 
/**********************************************************************************************
 * Filename       : Payment
 * Database       : Devs
 * Creation Date  : 01 April 2013
 * Author         : Spadidar
 * Description    : The file is controller file for Plan Payment through Paypal.
*********************************************************************************************/	
class Payment  extends CI_Controller 
{
	var $data=array();//Public variable to pass with each view
   
	// Constructor
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library(array('form_validation','Session','encrypt'));  // load library classes
		$this->load->library(array('email'));
		$this->load->model(array('Category_Model','Project_Model','Event_Model','News_Model','User_Model')); // load model  	
		$this->data['admin_email']=$this->config->item('admin_email');//assignment admin email
		$this->data['basepath']=$this->config->item('base_url');//assigning base path
	}

	//Payment Plan
	function index() {
		//$this->load->view('plan_view',$this->data);
		$data = array();
		$data['main_content'] ='frontend/plan';
		$data['meta_title']  = 'PLan - Firebird International';
		$this->load->model('Category_Model');
		$query = $this->Category_Model->category_list();
		if($query){
			$data['category'] = $query ; 
		}
		$this->load->model('Project_Model');
		$query = $this->Project_Model->project_list();
		if($query){
			$data['project'] = $query ; 
		}
		$this->load->model('Event_Model');
		$query = $this->Event_Model->upcoming_event_list();
		if($query){
			$data['upcoming_event_list'] = $query ; 
		}
		$query = $this->Event_Model->latest_event_list();
		if($query){
			$data['latest_event_list'] = $query ; 
		}
		$data['is_news']  = true;
		$this->load->model('News_Model');
		$query = $this->News_Model->all_news_list();
		if($query){
			$data['news'] = $query ; 
		}
		
		$this->load->model('Plan_Model');
		$query = $this->Plan_Model->plan_list();
		 
		if($query){
			$data['plan_list'] = $query ; 
		}
		$this->load->view('frontend/includes/template', $data);
	}
	
	function paypal() {
		
		require_once('paypal.class.php');  // include the class file
		if(isset($_POST['sub'])) {
			$plan=explode('##',$_POST['plan']);
			$amt=$plan[0];
			$p_id=$plan[1];
			$this->load->model('Plan_Model');
			$query = $this->Plan_Model->plan($p_id);
		 	$desc=$query[0]->plan_desc;
			$p = new paypal_class;             // initiate an instance of the class
			$p->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';   // testing paypal url
			//$p->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';     // paypal url
			$total_amt=$this->uri->segment(3);
			$total_amt = $this->uri->segment(3);
			$this_script=$this->config->item('base_url'); 
			if (empty($_GET['action'])) $_GET['action'] = 'process';  
			switch ($_GET['action']) {
			case 'process':      // Process and order...
				$p->add_field('business', 'manishgau_tam@hotmail.com');
				$p->add_field('return', $this_script.'payment/thanks');
				$p->add_field('cancel_return', $this_script.'payment/cancel');
				$p->add_field('notify_url', $this_script.'action=ipn');
				$p->add_field('item_name', $desc);
				$p->add_field('custom', '24');
				$p->add_field('amount', $amt);
				$p->add_field('currency_code', 'USD');
				$p->submit_paypal_post(); // submit the fields to paypal
				
				
				 
				
				
				//$p->dump_fields();      // for debugging, output a table of all the fields
				break;
			case 'success':      // Order was successful...
				$response = $_POST; 
				echo "<html><head><title>Success</title></head><body><h3>Thank you for your order.</h3>";
				foreach ($_POST as $key => $value) { 
				print_r($value);
				}
			//echo "$key: $value<br>"; }
				echo "</body></html>";
				die;
				break;
			case 'cancel':       // Order was canceled...
			// The order was canceled before being completed.
				echo "<html><head><title>Canceled</title></head><body><h3>The order was canceled.</h3>";
				echo "</body></html>";
				break;
			case 'ipn':          // Paypal is calling page for IPN validation...
				if ($p->validate_ipn()) {
					$subject = 'Instant Payment Notification - Recieved Payment';
					$to = 'mgautam@solutionsofts.com';    //  your email
					$body =  "An instant payment notification was successfully recieved\n";
					$body .= "from ".$p->ipn_data['payer_email']." on ".date('m/d/Y');
					$body .= " at ".date('g:i A')."\n\nDetails:\n";
				foreach ($p->ipn_data as $key => $value) { $body .= "\n$key: $value"; }
					mail($to, $subject, $body);
				}
				break;
			}     
			
		
		}
		
		die;
	}
	
	
	
	
	function thanks() {
	foreach ($_POST as $key => $value) {
		echo "$key: $value<br>";
		}
		die;	 
		echo "<html>
		<head><title>Success....</title></head>
		<body>
		<h2>Thank you for your order!</h2>";
		
		echo "</body></html>";
		 die;
		
	}
	
	function cancel() {
		//case 'cancel': // Canceled Order...
		echo "<html>
		<head><title>Canceled</title></head>
		<body><h2>The order was canceled.</h2>";
		echo "</body></html>";	
		die;		
	}
	
}

?>