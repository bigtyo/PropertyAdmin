<?php
class Email extends RS_Controller
{
    public function __construct()
    {
		parent::__construct();
                
                
                
		$this->load->model('email_model');
                $this->load->model('office_model');
                $this->load->model('listing_model');
                $this->load->model('customer_model');
    }
    
    public function index()
    {
        
    }
    
    public function template()
    {
        $adminid = $this->session->userdata("adminid");
        
        
        
        $header['scripts'] = array(
            
            "email/template"
            
        );
        $header['external_scripts'] = array();
        
        $data['templates'] = array();
        
        if(!empty($adminid))
        {
            $data['templates'] = $this->email_model->getTemplateList($adminid);
        }
        
        $officeid = $this->session->userdata("officeid");
        $office = $this->office_model->getOfficeById($officeid);
        $data['nama_kantor'] = $office->NAMA;
        
        
        $this->load->view('email/template',$data);
        $this->load->view('templates/footer',$header);
    }
    
    
    
    
    
    public function templatesave()
    {
        $namafile = $this->input->post("nama");
        $content = $this->input->post("data");
        
        if($namafile && $content)
        {
            $json['status'] = 1;
        }
        else
        {
            $json['status'] = 0;
            $json['error'] = "gagal melakukan penyimpanan template";
            $data['json'] = json_encode($json);
        }
        
        
        $this->load->view('json_view', $data);
    }
    
    public function emailListing()
    {
        
    }
    
    public function sendListing()
    {
        $marketingid = $this->session->userdata('marketingid');
        
        if($marketingid == NULL)
        {
            show_error("Access Denied", 300);
            //redirect();
        }
        
        $header['scripts'] = array(
            "email/sendlisting"
        );
        $data['listings'] = $this->listing_model->getListingByMarketing($marketingid);
        $data['templates'] = $this->email_model->getTemplateListMarketing($marketingid);
        $param['marketingid'] = $marketingid;
        $data['customers'] = $this->customer_model->get_customers_list($param);
        $data['marketingid'] = $marketingid;
        
        $this->load->view('email/sendlisting',$data);
        $this->load->view('templates/footer',$header);
        
    }
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
