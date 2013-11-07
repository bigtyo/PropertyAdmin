<?php
class user_model extends CI_Model{
    public function __construct()
    {
	$this->load->database();
    }
    
    public function getUser($username)
    {
        $query = $this->db->get_where("user",array('userid' => $username));
        $data['user'] = $query->row();
        $query = $this->db->query("call get_office_id_by_userid('$username')");
        $results = $query->row();
        $data['officeid'] = $results->offid;
        return $data;
    }
    
    
}

?>
