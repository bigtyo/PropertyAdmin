<?php
class RS_Controller extends CI_Controller {
    private $dataheader;
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
                        
                        if($row->ADMINID != null){
                            $dataheader['isadmin'] = true;
                            
                        }
                        
                        if($row->MARKETINGID != null){
                            $dataheader['ismarketing'] = true;
                        }
                        
                        if($row->PRINCIPALID != null){
                            $dataheader['isprincipal'] = true;
                        }
                        //echo json_encode($row);
                        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                            $this->load->view('templates/header',$dataheader);
                        }
                        
                        $CI->session->set_userdata($userdata);
                        
                    }
                    
                }else
                {
                        show_404();
                }
                
                       
		
	}
}
?>