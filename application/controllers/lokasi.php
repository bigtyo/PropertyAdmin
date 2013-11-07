<?php
class lokasi extends RS_Controller
{
    public function __construct() {
        parent::__construct();
        
        $this->load->model('lokasi_model');
    }
    
    public function getLokasiList()
    {
        $areaid = $this->input->get('areaid');
        $json = json_encode($this->lokasi_model->getLokasiList($areaid));
        
        $data['json'] = $json;
        
        $this->load->view('json_view',$data);
    }
    
    public function getPropinsiList()
    {
        $json = json_encode($this->lokasi_model->getPropinsiList());
        
        $data['json'] = $json;
        
        $this->load->view('json_view',$data);
    }
    
    public function getAreaList()
    {
       $kotaid = $this->input->get('kotaid');
       $json = json_encode($this->lokasi_model->getAreaList($kotaid));
        
        $data['json'] = $json;
        
        $this->load->view('json_view',$data);
    }
    
    public function getKotaList()
    {
        $propinsiid = $this->input->get('propinsiid');
        $json = json_encode($this->lokasi_model->getKotaList($propinsiid));
        
        $data['json'] = $json;
        
        $this->load->view('json_view',$data);
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
