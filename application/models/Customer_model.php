<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Customer (Customer Model)
 * Customer model class to get to handle user related data 
 * @author : Rajesh Gupta
 * @version : 1.1
 * @since : 15 November 2019
 */
class Customer_model extends CI_Model
{
    
	   /**
     * This function is used to get the customer listing 
     * @return array $result : This is result
     */
    function customerListing()
    {
        $this->db->select('BaseTbl.id, BaseTbl.email, BaseTbl.fullname, BaseTbl.username, BaseTbl.phone, BaseTbl.created_at');
        $this->db->from('tbl_customers as BaseTbl');
        $this->db->where('BaseTbl.status', 'A');
        $this->db->order_by('BaseTbl.id', 'DESC');
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
        
    /**
     * This function is used to add new customer to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewCustomer($customerInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_customers', $customerInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    
    /**
     * This function used to get customer information by id
     * @param number $userId : This is customer id
     * @return array $result : This is customer information
     */
    function getCustomerInfo($customerId)
    {
        $this->db->select('id, fullname, email, phone, address, communication, vehicles,username,servername');
        $this->db->from('tbl_customers');
        $this->db->where('status', 'A');
        $this->db->where('id', $customerId);
        $query = $this->db->get();
        
        return $query->row();
    }
    
    /**
     * This function is used to update the customer information
     * @param array $customerInfo : This is customers updated information
     * @param number $customerId : This is customer id
     */
    function editCustomer($customerInfo, $customerId)
    {
        $this->db->where('id', $customerId);
        $this->db->update('tbl_customers', $customerInfo);
        
        return TRUE;
    }
    
    /**
     * This function is used to delete the customer information
     * @param number $customerId : This is customer id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteCustomer($id)
    {
		$this->db->where('id', $id);
		$this->db->delete('tbl_customers');
        
        return $this->db->affected_rows();
    }

    /**
     * This function used to get customer information by id
     * @param number $customerId : This is customer id
     * @return array $result : This is customer information
     */
    function getCustomerInfoById($customerId)
    {
        $this->db->select('id, fullname, email, phone, address, communication, vehicles,username,servername');
        $this->db->from('tbl_customers');
        $this->db->where('status', 'A');
        $this->db->where('id', $customerId);
        $query = $this->db->get();
        
        return $query->row();
    }

}  