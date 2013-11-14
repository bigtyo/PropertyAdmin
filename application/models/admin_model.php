<?php
class admin_model extends CI_Model
{
    public function __construct() {
        $this->load->database();
    }
    
    public function getMarketing($username)
    {
        
        $query = $this->db->query("call get_office_id_by_userid('$username')");
        $results = $query->row();
        $officeid = $results->offid;
        $this->db->reconnect();
        $queryMarketing = $this->db->query("SELECT m.MARKETINGID,u.NAMA from marketing m join user u on u.marketingid = m.marketingid  where m.officeid = $officeid");
        
        return $queryMarketing->result();
    }
    
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
