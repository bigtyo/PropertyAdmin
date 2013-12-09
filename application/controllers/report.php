<?php
class report extends RS_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('office_model');
        $this->load->model('report_model');
    }
    public function listing_terjual()
    {
        $footer['scripts'] = array(
            'report/terjual'
        );
        
        $officeid = $this->session->userdata('officeid');
        $date_awal = $this->input->get('date_awal');
        $date_akhir = $this->input->get('date_akhir');
        $data['office'] = $this->office_model->getOfficeList();
        $data['listings'] = $this->report_model->listing_terjual($officeid,$date_awal,$date_akhir);
        
        $this->load->view('report/listing',$data);
        $this->load->view('templates/footer',$footer);
    }
    
    public function entry_marketing()
    {
        $footer['scripts'] = array(
            'report/entrymarketing'
        );
        
        $officeid = $this->session->userdata('officeid');
        $date_awal = $this->input->get('date_awal');
        $date_akhir = $this->input->get('date_akhir');
        $data['office'] = $this->office_model->getOfficeList();
        $data['marketings'] = $this->report_model->entry_baru_marketing($officeid,$date_awal,$date_akhir);
        
        $this->load->view('report/entrybaru',$data);
        $this->load->view('templates/footer',$footer);
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
