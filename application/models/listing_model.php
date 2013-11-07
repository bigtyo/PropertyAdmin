<?php

class Listing_model extends CI_Model
{

    public function __construct()
    {
	$this->load->database();
    }
    
    public function getListingByMarketing($marketingid)
    {
        $query = $this->db->get_where('view_listing_marketing', array('marketingid' => $marketingid));
        return $query->result();
    }
    
    public function getListings($tipedata,$officeid,$userid)
    {
       //$CI =& get_instance();
       $tipedata == "";
       if($tipedata == "personal")
       {
           //$userid = $CI->session->userdata('userid');
           $query = $this->db->get_where('view_listing_marketing', array('userid' => $userid));
            return $query->result();
       }
       else if($tipedata == "office")
       {
           $query = $this->db->query("call get_office_id_by_userid('$userid')");
           $results = $query->row_array();
           $officeid = 0;
           foreach($results as $row)
           {
               $officeid = $row->officeid;
           }
           $query->free_results();
           $query = $this->db->get_where('view_listing_marketing', array('officeid' => $officeid));
           return $query->result();
       }
       else
       {
           $query = $this->db->query("SELECT distinct * from view_listing_marketing");
           return $query->result();
       }
    }
    
    public function getListing($listingid)
    {
        $query = $this->db->get_where('listing', array('listingid' => $listingid));
        return $query->row();
    }
    
}
?>