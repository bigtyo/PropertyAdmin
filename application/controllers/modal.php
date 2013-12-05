<?php
class modal extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('listing_model');
        $this->load->model('office_model');
        $this->load->model('user_model');
    }
    public function adduser(){
        $userid = $this->input->get('id');
        $data['office'] = $this->office_model->getOfficeList();
        
        if($userid != null && $userid != ""){
            $datauser = $this->user_model->getUser($userid);
            
            $data['user'] = $datauser['user'];
            $data['useroffice'] = $datauser['officeid'];
            
        }
        
        $this->load->view('user/addUser',$data);
    }
    
    public function addAktivitas()
        {
            $aktivitasid = $this->input->get('id');
            $data['jenis'] = $this->listing_model->getJenisAktivitas();
            
            
            if($aktivitasid == null || $aktivitasid == "")
            {
                $this->load->view('listing/aktivitas',$data);
            }else
            {
                $data['aktivitas'] = $this->listing_model->getAktivitasById($aktivitasid);
                $this->load->view('listing/aktivitas',$data);
            }
            
        }
        
        public function addPromosi()
        {
            $promosiid = $this->input->get('id');
            $data['jenis'] = $this->listing_model->getJenisPromosi();
            
            
            if($promosiid == null || $promosiid == "")
            {
                $this->load->view('listing/promosi',$data);
            }else
            {
                $data['promosi'] = $this->listing_model->getPromosiById($promosiid);
                $this->load->view('listing/promosi',$data);
            }
        }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
