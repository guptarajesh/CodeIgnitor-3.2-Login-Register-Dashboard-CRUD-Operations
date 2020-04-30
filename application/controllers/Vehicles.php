<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Vehicles (VehiclesController)
 * Vehicle Class to control all user related operations.
 * @author : Rajesh Gupta
 * @version : 1.1
 * @since : 15 November 2019
 */
class Vehicles extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('vehicle_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the Vehicle
     */
    public function index()
    { 
        $this->global['pageTitle'] = 'WorldTrack GPS : Dashboard';
        
        $this->loadViews("back_end/dashboard", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to load the Vehicles list
     */
    function vehicleListing()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {        
			
			$this->global['searchBody'] = 'Yes';
			
            $data['vehicleRecords'] = $this->vehicle_model->vehicleListing();
            $this->global['pageTitle'] = 'WorldTrack GPS : Vehicle Listing';
            
            $this->loadViews("back_end/vehicles/vehicles", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the add new form
     */
    function addNewVehi()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('vehicle_model');
			$data = "";
			$this->global['add_customers'] = $this->vehicle_model->getCustomersName();
			
            $this->global['pageTitle'] = 'WorldTrack GPS : Add New Vehicle';

            $this->loadViews("back_end/vehicles/addVehicle", $this->global, $data, NULL);
        }
    }

    
    /**
     * This function is used to add new Vehicle to the system
     */
    function addNewVehicle()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {   
		
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('cid','Customer Name','trim|required|numeric');
            $this->form_validation->set_rules('vehiclemake','Vehicle Make','trim|required');
			$this->form_validation->set_rules('vehiclemodel','Vehicle Model','trim|required');
			$this->form_validation->set_rules('vehicleregistrationnumber','Vehicle Registration Number','trim|required');
			$this->form_validation->set_rules('vehiclenumber','Vehicle Number','trim|required');
			$this->form_validation->set_rules('gpskitinstalldate','GPS Kit Install Date','trim|required');
			$this->form_validation->set_rules('eminumber','EMI Number','trim|required');
			$this->form_validation->set_rules('gpskitmobilenumber','GPS Kit Mobile Number','trim|required');
			$this->form_validation->set_rules('erpportalassociation','ERP Portal Association','trim|required');
			$this->form_validation->set_rules('erpportalusername','ERP Portal Username','trim|required');
			
            if($this->form_validation->run() == FALSE)
            {
                $this->addNewVehi();
            }
            else
            {   
                $cid = $this->security->xss_clean($this->input->post('cid'));
                $vehiclemake = $this->security->xss_clean($this->input->post('vehiclemake'));
                $vehiclemodel = $this->security->xss_clean($this->input->post('vehiclemodel'));
				$vehiclemadeyear = $this->security->xss_clean($this->input->post('vehiclemadeyear'));
				$vehicleregistrationnumber = $this->security->xss_clean($this->input->post('vehicleregistrationnumber'));
				$vehiclenumber = $this->security->xss_clean($this->input->post('vehiclenumber'));
				$ownername = ucwords(strtolower($this->security->xss_clean($this->input->post('ownername'))));
				$gpskitinstalldate = $this->security->xss_clean($this->input->post('gpskitinstalldate'));
				$eminumber = $this->security->xss_clean($this->input->post('eminumber'));
				$gpskitmobilenumber = $this->security->xss_clean($this->input->post('gpskitmobilenumber'));
				$gpsdevicemodelnumber = $this->security->xss_clean($this->input->post('gpsdevicemodelnumber'));
				$erpportalassociation = $this->security->xss_clean($this->input->post('erpportalassociation'));
				$erpportalusername = $this->security->xss_clean($this->input->post('erpportalusername'));
				$nextrenewaldate = $this->security->xss_clean($this->input->post('nextrenewaldate'));
				$installbystaff = ucwords(strtolower($this->security->xss_clean($this->input->post('installbystaff'))));
				$communication = $this->security->xss_clean($this->input->post('communication'));
				$address = $this->security->xss_clean($this->input->post('address'));
                
				
                $vehicleInfo = array('cid'=> $cid, 'vehiclemake'=>$vehiclemake, 'vehiclemodel'=>$vehiclemodel, 'vehiclemadeyear'=> $vehiclemadeyear, 'vehicleregistrationnumber'=> $vehicleregistrationnumber, 'vehiclenumber'=> $vehiclenumber, 'ownername'=> $ownername, 'gpskitinstalldate'=> $gpskitinstalldate, 'eminumber'=> $eminumber, 'gpskitmobilenumber'=> $gpskitmobilenumber, 'gpsdevicemodelnumber'=> $gpsdevicemodelnumber, 'erpportalassociation'=> $erpportalassociation, 'erpportalusername'=> $erpportalusername, 'nextrenewaldate'=> $nextrenewaldate, 'installbystaff'=> $installbystaff, 'communication'=> $communication, 'address'=> $address, 'created_at'=>date('Y-m-d H:i:s'));
                
                $this->load->model('vehicle_model');
                $result = $this->vehicle_model->addNewVehicle($vehicleInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Vehicle created successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Vehicle creation failed');
                }
                
                redirect('addNewVehi');
            }
        }
    }

    
    /**
     * This function is used load Vehicle edit information
     * @param number $vehiclesId : Optional : This is vehicle id
     */
    function modifyVehicle($vehicleId = NULL)
    {
         if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($vehicleId == null)
            {
                redirect('vehicleListing');
            }
            $data['vehicleInfo'] = $this->vehicle_model->getVehicleInfo($vehicleId);
			
			$this->global['edit_customers'] = $this->vehicle_model->getCustomersName();

            $this->global['pageTitle'] = 'WorldTrack GPS : Edit Vehicle';
            
            $this->loadViews("back_end/vehicles/modifyVehicle", $this->global, $data, NULL);
        }
    }
    
    
	
	  /**
     * This function is used load vehicle view information
     * @param number $vehicleId : Optional : This is vehicle id
     */
    function viewVehicle($vehicleId = NULL)
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            if($vehicleId == null)
            {
                redirect('vehicleListing');
            }
            $data = "";
            $this->global['vehicleInfo'] = $this->vehicle_model->getVehicleInfoById($vehicleId);
            
            $this->global['pageTitle'] = 'WorldTrack GPS : View Vehicle';
            
            $this->loadViews("back_end/vehicles/viewVehicle", $this->global, $data, NULL);
        }
    }
    
	
    /**
     * This function is used to edit the Vehicle information
     */
    function editVehicle()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            //$data = "";
			//$data['customers'] = $this->vehicle_model->getCustomersName();
			//pre($data['customers']);
			//$str = $this->db->last_query();
            //pre($str);
			//exit;
            $this->load->library('form_validation');
            
			
			$vehicleId = $this->input->post('vehicleId');
			
            //$this->form_validation->set_rules('cid','Customer Name','required|in_list['.implode(array_keys($data["customers"]),',').']');
			$this->form_validation->set_rules('vehiclemake','Vehicle Make','trim|required');
			$this->form_validation->set_rules('vehiclemodel','Vehicle Model','trim|required');
			$this->form_validation->set_rules('vehicleregistrationnumber','Vehicle Registration Number','trim|required');
			$this->form_validation->set_rules('vehiclenumber','Vehicle Number','trim|required');
			$this->form_validation->set_rules('gpskitinstalldate','GPS Kit Install Date','trim|required');
			$this->form_validation->set_rules('eminumber','EMI Number','trim|required');
			$this->form_validation->set_rules('gpskitmobilenumber','GPS Kit Mobile Number','trim|required');
			$this->form_validation->set_rules('erpportalassociation','ERP Portal Association','trim|required');
			$this->form_validation->set_rules('erpportalusername','ERP Portal Username','trim|required');
			
			$this->load->library('form_validation');
            
            $vehicleId = $this->input->post('vehicleId');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->modifyVehicle($vehicleId);
            }
            else
            {   //pre($_POST);
                $cid = $this->security->xss_clean($this->input->post('cid'));
                $vehiclemake = $this->security->xss_clean($this->input->post('vehiclemake'));
                $vehiclemodel = $this->security->xss_clean($this->input->post('vehiclemodel'));
				$vehiclemadeyear = $this->security->xss_clean($this->input->post('vehiclemadeyear'));
				$vehicleregistrationnumber = $this->security->xss_clean($this->input->post('vehicleregistrationnumber'));
				$vehiclenumber = $this->security->xss_clean($this->input->post('vehiclenumber'));
				$ownername = ucwords(strtolower($this->security->xss_clean($this->input->post('ownername'))));
				$gpskitinstalldate = $this->security->xss_clean($this->input->post('gpskitinstalldate'));
				$eminumber = $this->security->xss_clean($this->input->post('eminumber'));
				$gpskitmobilenumber = $this->security->xss_clean($this->input->post('gpskitmobilenumber'));
				$gpsdevicemodelnumber = $this->security->xss_clean($this->input->post('gpsdevicemodelnumber'));
				$erpportalassociation = $this->security->xss_clean($this->input->post('erpportalassociation'));
				$erpportalusername = $this->security->xss_clean($this->input->post('erpportalusername'));
				$nextrenewaldate = $this->security->xss_clean($this->input->post('nextrenewaldate'));
				$installbystaff = ucwords(strtolower($this->security->xss_clean($this->input->post('installbystaff'))));
				$communication = $this->security->xss_clean($this->input->post('communication'));
				$address = $this->security->xss_clean($this->input->post('address'));
                
                $vehicleInfo = array();
                
                if($vehiclemake)
                {
                    									
				$vehicleInfo = array('cid'=> $cid, 'vehiclemake'=>$vehiclemake, 'vehiclemodel'=>$vehiclemodel, 'vehiclemadeyear'=> $vehiclemadeyear, 'vehicleregistrationnumber'=> $vehicleregistrationnumber, 'vehiclenumber'=> $vehiclenumber, 'ownername'=> $ownername, 'gpskitinstalldate'=> $gpskitinstalldate, 'eminumber'=> $eminumber, 'gpskitmobilenumber'=> $gpskitmobilenumber, 'gpsdevicemodelnumber'=> $gpsdevicemodelnumber, 'erpportalassociation'=> $erpportalassociation, 'erpportalusername'=> $erpportalusername, 'nextrenewaldate'=> $nextrenewaldate, 'installbystaff'=> $installbystaff, 'communication'=> $communication, 'address'=> $address, 'updated_at'=>date('Y-m-d H:i:s'));
                }
               
                $result = $this->vehicle_model->editVehicle($vehicleInfo, $vehicleId);
			
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'Vehicle updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Vehicle updation failed');
                }
                
                redirect('vehicles/modifyVehicle/'.$vehicleId.'');
            }
        }
    }


    /**
     * This function is used to delete the Vehicle using vehicleId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteVehicle()
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $id = $this->input->post('id');
            
            $result = $this->vehicle_model->deleteVehicle($id);
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }
    
}

?>