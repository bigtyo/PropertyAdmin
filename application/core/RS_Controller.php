<?php
class RS_Controller extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
                if(function_exists('is_logged_in'))    
                {
                    if(!is_logged_in())
                    {
                        redirect("/login");
                    }
                    else 
                    {
                        $CI =& get_instance();
                        $userid = $CI->session->userdata('userid');
                        $officeid = $CI->session->userdata('officeid');
                        
                        $this->load->model('user_model');
                        $query = $this->db->get_where('user',array(
                            "userid" => $userid
                        ));
                        $row = $query->row();
                        
                        $userdata = array(
                            "adminid" => $row->ADMINID,
                            "principalid" => $row->PRINCIPALID,
                            "marketingid" => $row->MARKETINGID
                        );
                        $CI->session->set_userdata($userdata);
                        
                    }
                    
                }else
                {
                        show_404();
                }
                
                       
		
	}
}
?>