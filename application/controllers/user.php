<?php
class User extends RS_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('user_model');
    }
    
    public function index(){
        $header['scripts'] = array();
        
        $officeid = $this->session->userdata('officeid');
        $data['adminid'] = $this->session->userdata('adminid');
        $data['users'] = $this->user_model->getUserByOfficeId($officeid);
        $this->load->view('user/manage',$data);
        $this->load->view('templates/footer',$header);
    }
    
    
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
