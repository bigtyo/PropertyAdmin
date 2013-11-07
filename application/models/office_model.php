<?php
class Office_model extends CI_Model
{
    public function __construct() {
        
        
        $this->load->database();
    }
    
    public function getOfficeById($officeid)
    {
        $query = $this->db->get_where('office',array(
            "OFFICEID" => $officeid
        ));
        
        return $query->row();
    }
}

?>
