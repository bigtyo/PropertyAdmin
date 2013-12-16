<?php
class user_model extends CI_Model{
    public function __construct()
    {
	$this->load->database();
    }
    
    public function getUser($username)
    {
        $this->db->from("user");
        $this->db->like('userid',$username,'none');
        //$query = $this->db->get_where("user",array('userid' => $username));
        $query = $this->db->get();
        $data['user'] = $query->row();
        
        $query = $this->db->query("call get_office_id_by_userid('$username')");
        $results = $query->row();
        $data['officeid'] = $results->offid;
        return $data;
    }
    
    
    
    public function getUserByOfficeId($officeid)
    {
        $this->db->from('view_user');
        
        $this->db->where('get_officeid(view_user.USERID) = '.$officeid);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    public function getUserDetail($userid){
        $this->db->from('user');
        $this->db->where(array('userid' => $userid));
        $query = $this->db->get();
        
        return $query->row();
    }
    
    public function updateUser($userdata,$roledata)
    {
        if($roledata['ismarketing']){
            $this->db->insert('marketing',$datarole);
            $marketing_id = $this->db->insert_id();
        }
        
        if($roledata['isadmin']){
            $this->db->insert('admin',$datarole);
            $admin_id = $this->db->insert_id();
        }
        
        if($roledata['isprincipal']){
            if($istop){
                $datarole['top'] = 1;
            }
            $this->db->insert('principal',$datarole);
            $principal_id = $this->db->insert_id();
        }
    }
    
    public function addUser($userdata,$roledata,$officeid,$istop = false)
    {
        
        $marketing_id = null;
        $admin_id = null;
        $principal_id = null;
        
        $datarole['officeid'] = $officeid;
        $datarole['disabled'] = 0;
        
        if($roledata['ismarketing']){
            $this->db->insert('marketing',$datarole);
            $marketing_id = $this->db->insert_id();
        }
        
        if($roledata['isadmin']){
            $this->db->insert('admin',$datarole);
            $admin_id = $this->db->insert_id();
        }
        
        if($roledata['isprincipal']){
            if($istop){
                $datarole['top'] = 1;
            }
            $this->db->insert('principal',$datarole);
            $principal_id = $this->db->insert_id();
        }
        
        $userdata['marketingid'] = $marketing_id;
        $userdata['adminid'] = $admin_id;
        $userdata['principalid'] = $principal_id;
        $this->db->insert('user',$userdata);
        $user_id = $this->db->insert_id();
        
        
        
        return $user_id;
    }
    
}

?>
