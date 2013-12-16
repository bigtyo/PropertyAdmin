<?php
class RS_Controller extends CI_Controller {
    private $dataheader;
    public function dateFormat($date) //date
    {
        $tempdate = explode('/',$date);
        
        $year = $tempdate[2];
        $month = $tempdate[0];
        $day = $tempdate[1];
        
        return $year."-".$month."-".$day;
    }
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
                        
                        $row = $this->user_model->getUserDetail($userid);
                        
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
                        $dataheader['nama'] = $row->NAMA;
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