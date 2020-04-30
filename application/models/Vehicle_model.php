<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Vehicle (Vehicle Model)
 * Vehicle model class to get to handle user related data 
 * @author : Rajesh Gupta
 * @version : 1.1
 * @since : 15 November 2019
 */
class Vehicle_model extends CI_Model
{
    
	   /**
     * This function is used to get the vehicle listing 
     * @return array $result : This is result
     */
    function vehicleListing()
    {
        $this->db->select('BaseTbl.id, BaseTbl.cid, BaseTbl.ownername, BaseTbl.vehiclenumber, BaseTbl.erpportalusername, BaseTbl.gpskitmobilenumber, BaseTbl.created_at');
        $this->db->from('tbl_vehicles as BaseTbl');
        $this->db->where('BaseTbl.status', 'A');
        $this->db->order_by('BaseTbl.id', 'DESC');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
        
    /**
     * This function is used to add new vehicle to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewVehicle($vehicleInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_vehicles', $vehicleInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    
    /**
     * This function used to get vehicle information by id
     * @param number $userId : This is vehicle id
     * @return array $result : This is vehicle information
     */
    function getVehicleInfo($vehicleId)
    {
        $this->db->from('tbl_vehicles');
        $this->db->where('status', 'A');
        $this->db->where('id', $vehicleId);
        $query = $this->db->get();
        
        return $query->row();
    }
    
    /**
     * This function is used to update the vehicle information
     * @param array $vehicleInfo : This is vehicles updated information
     * @param number $vehicleId : This is vehicle id
     */
    function editVehicle($vehicleInfo, $vehicleId)
    {
        $this->db->where('id', $vehicleId);
        $this->db->update('tbl_vehicles', $vehicleInfo);
        
        return TRUE;
    }
    
    /**
     * This function is used to delete the vehicle information
     * @param number $vehicleId : This is vehicle id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteVehicle($id)
    {
		$this->db->where('id', $id);
		$this->db->delete('tbl_vehicles');
        
        return $this->db->affected_rows();
    }

    /**
     * This function used to get vehicle information by id
     * @param number $vehicleId : This is vehicle id
     * @return array $result : This is vehicle information
     */
    function getVehicleInfoById($vehicleId)
    {
        $this->db->from('tbl_vehicles');
        $this->db->where('status', 'A');
        $this->db->where('id', $vehicleId);
        $query = $this->db->get();
        
        return $query->row();
    }


/**
     * This function used to get customer information by id
     * @param number $cid : This is customer id
     * @return array $result : This is Customer information
     */
    function getCustomerInfoById($cId)
    {
        $this->db->select('id, fullname');
        $this->db->from('tbl_customers');
        $this->db->where('status', 'A');
        $this->db->where('id', $cId);
        $query = $this->db->get();
        
        return $query->row();
    }

/**
     * This function is used to get the user roles information
     * @return array $result : This is result of the query
     */
    function getCustomersName()
    {
        $this->db->select('id, fullname');
        $this->db->from('tbl_customers');
		$this->db->order_by('fullname', 'ASC');
        $query = $this->db->get();
        
        return $query->result();
    }
}  