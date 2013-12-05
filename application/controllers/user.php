<?php
class User extends RS_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->model('user_model');
        
    }
    
    public function index(){
        $header['scripts'] = array(
            'user/manage'
        );
        
        $officeid = $this->session->userdata('officeid');
        $data['adminid'] = $this->session->userdata('adminid');
        $data['users'] = $this->user_model->getUserByOfficeId($officeid);
        $this->load->view('user/manage',$data);
        $this->load->view('templates/footer',$header);
    }
    
    public function simpanuser(){
        
        $datauser = array(
            'loginid' => $this->input->post('loginid'),
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'telepon' => $this->input->post('telepon')
        );
        
        
        $datarole = array(
            'principal' => $this->input->post('isprincipal'),
            'marketing' => $this->input->post('ismarketing'),
            'admin' => $this->input->post('isadmin')
        );
        
        $officeid = $this->input->post('officeid');
        $istop = $this->input->post('istop');
        
        $userid = 0;
        if($istop)
        {
            $userid = $this->user_model->addUser($datauser,$datarole,$officeid,true);
        }else{
            $userid = $this->user_model->addUser($datauser,$datarole,$officeid);
        }
        
        if($userid > 0){
            $json['status'] = 1;
            $json['userid'] = $userid;
        }else
        {
            $json['status'] = 0;
            $json['error'] = "gagal menyimpan data user";
        }
        $data['json'] = json_encode($json);
        $this->load->view('json_view',$data);
    }
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
