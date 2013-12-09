<?php

class dashboard extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('dashboard_model');
    }
    
    public function getListingSold(){
        $date_awal = new DateTime($this->input->get('date_awal'));
        $date_akhir = new DateTime($this->input->get('date_akhir'));
        $date_last_akhir = $date_awal->sub(new DateInterval('P1D'));
        
        $periode = $this->input->get('periode');
        if($periode == 'week')
        {
            $date_last_awal = $date_awal->sub(new DateInterval('P8D'));
        }else if($periode == 'month')
        {
            $date_last_awal = $date_awal->sub(new DateInterval('P1M'));
        }else if($periode == 'semester')
        {
            $date_last_awal = $date_awal->sub(new DateInterval('P6M'));
        }else //year
        {
            $date_last_awal = $date_awal->sub(new DateInterval('P1Y'));
        }
        
        $date_awal = '2013-12-03';
        $date_akhir = '2013-12-10';
        $date_last_awal = '2013-11-26';
        $date_last_akhir = '2013-12-02';
        $json['sold'] = $this->dashboard_model->getListingTerjual($date_awal,$date_akhir);
        $json['soldlast'] = $this->dashboard_model->getListingTerjual($date_last_awal,$date_last_akhir);
        $data['json'] = json_encode($json);
        $this->load->view('json_view',$data);
    }
    
    public function getListingBaru(){
        $date_awal = $this->input->get('date_awal');
        $date_akhir = $this->input->get('date_akhir');
        
        
        $date_awal = '2013-12-03';
        $date_akhir = '2013-12-10';
        $date_last_awal = '2013-11-26';
        $date_last_akhir = '2013-12-02';
        
        $json['sold'] = $this->dashboard_model->getListingBaru($date_awal,$date_akhir);
        $json['soldlast'] = $this->dashboard_model->getListingBaru($date_last_awal,$date_last_akhir);
        $data['json'] = json_encode($json);
        $this->load->view('json_view',$data);
    }
    
    
    public function getaktivitas()
    {
        $time = $this->input->get('time');
        $last = $this->input->get('last');
        
        $json['feeds'] = $this->dashboard_model->getAktivitasBaru($time,$last);
        $data['json'] = json_encode($json);
        $this->load->view('json_view',$data);
    }
    
}
?>
