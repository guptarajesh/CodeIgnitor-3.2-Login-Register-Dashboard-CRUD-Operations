<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Customers (CustomersController)
 * Customer Class to control all user related operations.
 * @author : Rajesh Gupta
 * @version : 1.1
 * @since : 15 November 2019
 */
class Customers extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('customer_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the Customer
     */
    public function index()
    { 
        $this->global['pageTitle'] = 'WorldTrack GPS : Dashboard';
        
        $this->loadViews("back_end/dashboard", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to load the Customers list
     */
    function customerListing()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {        
			
			$this->global['searchBody'] = 'Yes';
			
            $data['customerRecords'] = $this->customer_model->customerListing();
			
            $this->global['pageTitle'] = 'WorldTrack GPS : Customer Listing';
            
            $this->loadViews("back_end/customers/customers", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the add new form
     */
    function addNewCust()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('customer_model');
            $data = "";
			
            $this->global['pageTitle'] = 'WorldTrack GPS : Add New Customer';

            $this->loadViews("back_end/customers/addCustomer", $this->global, $data, NULL);
        }
    }

    
    /**
     * This function is used to add new Customer to the system
     */
    function addNewCustomer()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
			$this->form_validation->set_rules('vehicles','Associate Vehicle(s)','trim|required');
			
            if($this->form_validation->run() == FALSE)
            {
                $this->addNewCust();
            }
            else
            {   //pre($_POST); die;
                $name = $this->security->xss_clean($this->input->post('fname'));
                $email = strtolower($this->security->xss_clean($this->input->post('email')));
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
				$vehicles = $this->security->xss_clean($this->input->post('vehicles'));
				$username = $this->security->xss_clean($this->input->post('username'));
				$servername = $this->security->xss_clean($this->input->post('servername'));
				$communication = $this->security->xss_clean($this->input->post('communication'));
				$address = $this->security->xss_clean($this->input->post('address'));
                
                $customerInfo = array('fullname'=> $name, 'email'=>$email,
                                    'phone'=>$mobile, 'vehicles'=> $vehicles, 'username'=> $username, 'servername'=> $servername, 'communication'=> $communication, 'address'=> $address, 'created_at'=>date('Y-m-d H:i:s'));
                
                $this->load->model('customer_model');
                $result = $this->customer_model->addNewCustomer($customerInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Customer created successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Customer creation failed');
                }
                
                redirect('addNewCust');
            }
        }
    }

    
    /**
     * This function is used load Customer edit information
     * @param number $customersId : Optional : This is customer id
     */
    function modifyCustomer($customerId = NULL)
    {
        if($this->isAdmin() == TRUE || $customerId == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($customerId == null)
            {
                redirect('customerListing');
            }
            $data['customerInfo'] = $this->customer_model->getCustomerInfo($customerId);
			//$str = $this->db->last_query();
            //echo "<pre>";  print_r($str);
			//exit;
            $this->global['pageTitle'] = 'WorldTrack GPS : Edit Customer';
            
            $this->loadViews("back_end/customers/modifyCustomer", $this->global, $data, NULL);
        }
    }
    
    
	
	  /**
     * This function is used load customer view information
     * @param number $customerId : Optional : This is customer id
     */
    function viewCustomer($customerId = NULL)
    {
        if($this->isAdmin() == TRUE || $customerId == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($customerId == null)
            {
                redirect('customerListing');
            }
            
            $data['customerInfo'] = $this->customer_model->getCustomerInfoById($customerId);
            
            $this->global['pageTitle'] = 'WorldTrack GPS : View Customer';
            
            $this->loadViews("back_end/customers/viewCustomer", $this->global, $data, NULL);
        }
    }
    
	
    /**
     * This function is used to edit the Customer information
     */
    function editCustomer()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $customerId = $this->input->post('customerId');
            
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]');
			$this->form_validation->set_rules('vehicles','Associate Vehicles','trim|required');
				  
            if($this->form_validation->run() == FALSE)
            {
                $this->modifyCustomer($customerId);
            }
            else
            {
                $name = $this->security->xss_clean($this->input->post('fname'));
                $email = strtolower($this->security->xss_clean($this->input->post('email')));
                $mobile = $this->security->xss_clean($this->input->post('mobile'));
				$vehicles = $this->security->xss_clean($this->input->post('vehicles'));
				$username = $this->security->xss_clean($this->input->post('username'));
				$servername = $this->security->xss_clean($this->input->post('servername'));
				$communication = $this->security->xss_clean($this->input->post('communication'));
				$address = $this->security->xss_clean($this->input->post('address'));
                
                $customerInfo = array();
                
                if($name)
                {
                    									
				$customerInfo = array('fullname'=> $name, 'email'=>$email, 'phone'=>$mobile, 'vehicles'=> $vehicles, 'username'=> $username, 'servername'=> $servername, 'communication'=> $communication, 'address'=> $address, 'updated_at'=>date('Y-m-d H:i:s'));
                }
               
                
                $result = $this->customer_model->editCustomer($customerInfo, $customerId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Customer updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Customer updation failed');
                }
                
                redirect('customers/modifyCustomer/'.$customerId.'');
            }
        }
    }


    /**
     * This function is used to delete the Customer using customerId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteCustomer()
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $id = $this->input->post('id');
            
            $result = $this->customer_model->deleteCustomer($id);
            //$str = $this->db->last_query();
            //echo "<pre>";  print_r($str);
			//exit;
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }
    
}

?>