<?php

class dashboard extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('dashboard_model');
        $this->load->model('admin_model');
    }
    
    public function getListingSold(){
        $date_awal = new DateTime();
        $date_akhir = new DateTime();
        
        $date_last_awal = new DateTime();
        $date_last_akhir = new DateTime();
        $officeid = $this->session->userdata('officeid');
        $isglobal = $this->input->get('isglobal');
        $periode = $this->input->get('periode');
        
        if($isglobal)
        {
            $officeid = null;
        }
        if($periode == 1)
        {
            $date_last_awal->sub(new DateInterval('P15D'));
            $date_last_akhir->sub(new DateInterval('P8D'));
        }else if($periode == 2)
        {
            
            $month = date_format($date_awal, 'm');
            $year = date_format($date_awal, 'Y');
            $date_awal->setDate($year, $month, 1);
            $date_akhir->setDate($year, $month, 30);
            
            $date_last_awal->sub(new DateInterval('P1M'));
            $month = date_format($date_last_awal, 'm');
            $year = date_format($date_last_awal, 'Y');
            $date_last_awal->setDate($year, $month, 1);
            $date_last_akhir->setDate($year, $month, 30);
        }else if($periode == 3)
        {
             $year = date_format($date_awal, 'Y');
            $date_awal->setDate($year, 7,  1);
            $date_akhir->setDate($year, 12, 31);
            
            //$date_last_awal->sub(new DateInterval('P1M'));
            //$month = date_format($date_last_awal, 'm');
            $year = date_format($date_last_awal, 'Y');
            $date_last_awal->setDate($year, 1, 1);
            $date_last_akhir->setDate($year, 6, 31);
        }else //year
        {
            $year = date_format($date_awal, 'Y');
            $date_awal->setDate($year, 1, 1);
            $date_akhir->setDate($year, 12, 31);
            
            $date_last_awal->sub(new DateInterval('P1Y'));
            $year =  date_format($date_last_awal, 'Y');
            $date_last_awal->setDate($year, 1, 1);
            $date_last_akhir->setDate($year, 12, 31);
        }
        
        $date_awal = date_format($date_awal, 'Y-m-d');
        $date_akhir = date_format($date_akhir, 'Y-m-d');
        $date_last_awal = date_format($date_last_awal, 'Y-m-d');
        $date_last_akhir = date_format($date_last_akhir, 'Y-m-d');
        $json['sold'] = $this->dashboard_model->getListingTerjual($officeid,$date_awal,$date_akhir);
        $json['date_awal'] = $date_awal;
        $json['date_akhir'] = $date_akhir;
        $json['date_last_awal'] = $date_last_awal;
        $json['date_last_akhir'] = $date_last_akhir;
        $last = $this->dashboard_model->getListingTerjual($officeid,$date_last_awal,$date_last_akhir);
        $sum_last = 0;
        foreach($last as $obj)
        {
            $sum_last += $obj->jml;
        }
        $sum_current = 0;
        foreach($json['sold'] as $obj)
        {
            $sum_current += $obj->jml;
        }
        
        if($sum_last != 0)
        {
            $increase = ($sum_current - $sum_last) / $sum_last * 100;
        }else
        {
            if($sum_current != 0)
            {
                $increase = 100;
            }else{
                $increase = 0;
            }
        }
        $json['increase'] = number_format($increase,2);
        $json['soldlast'] = $last;
        
        $data['json'] = json_encode($json);
        $this->load->view('json_view',$data);
    }
    
    public function getListingBaru(){
        $date_awal = new DateTime();
        $date_akhir = new DateTime();
        
        $date_last_awal = new DateTime();
        $date_last_akhir = new DateTime();
        
        $officeid = $this->session->userdata('officeid');
        $periode = $this->input->get('periode');
        if($periode == 1)
        {
            $date_last_awal->sub(new DateInterval('P15D'));
            $date_last_akhir->sub(new DateInterval('P8D'));
        }else if($periode == 2)
        {
            
            $month = date_format($date_awal, 'm');
            $year = date_format($date_awal, 'Y');
            $date_awal->setDate($year, $month,  1);
            $date_akhir->setDate($year, $month, 30);
            
            $date_last_awal->sub(new DateInterval('P1M'));
            $month = date_format($date_last_awal, 'm');
            $year = date_format($date_last_awal, 'Y');
            $date_last_awal->setDate($year, $month, 1);
            $date_last_akhir->setDate($year, $month, 30);
        }else if($periode == 3)
        {
            //$month = date_format($date_awal, 'm');
            $year = date_format($date_awal, 'Y');
            $date_awal->setDate($year, 7,  1);
            $date_akhir->setDate($year, 12, 31);
            
            //$date_last_awal->sub(new DateInterval('P1M'));
            //$month = date_format($date_last_awal, 'm');
            $year = date_format($date_last_awal, 'Y');
            $date_last_awal->setDate($year, 1, 1);
            $date_last_akhir->setDate($year, 6, 31);
        }else //year
        {
            //$month = date_format($date_awal, 'm');
            $year = date_format($date_awal, 'Y');
            $date_awal->setDate($year, 7, 1);
            $date_akhir->setDate($year, 12, 31);
            
            
            $year =  date_format($date_last_awal, 'Y');
            $date_last_awal->setDate($year, 1, 1);
            $date_last_akhir->setDate($year, 6, 31);
        }
        
        $date_awal = date_format($date_awal, 'Y-m-d');
        $date_akhir = date_format($date_akhir, 'Y-m-d');
        $date_last_awal = date_format($date_last_awal, 'Y-m-d');
        $date_last_akhir = date_format($date_last_akhir, 'Y-m-d');
        
        $json['sold'] = $this->dashboard_model->getListingBaru($officeid,$date_awal,$date_akhir);
        $json['soldlast'] = $this->dashboard_model->getListingBaru($officeid,$date_last_awal,$date_last_akhir);
        $sum_last = 0;
        foreach($json['soldlast'] as $obj)
        {
            $sum_last += $obj->jml;
        }
        $sum_current = 0;
        foreach($json['sold'] as $obj)
        {
            $sum_current += $obj->jml;
        }
        
        if($sum_last != 0)
        {
            $increase = ($sum_current - $sum_last) / $sum_last * 100;
        }else
        {
            if($sum_current != 0)
            {
                $increase = 100;
            }else{
                $increase = 0;
            }
        }
        $json['increase'] = number_format($increase,2);
        
        
        
        
        $json['date_awal'] = $date_awal;
        $json['date_akhir'] = $date_akhir;
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
    
    public function getDokumen()
    {
        $officeid = $this->session->userdata('officeid');
        
        $json['dokumen'] = $this->admin_model->getDokumenList($officeid);
        
        $json['html'] = $this->load->view('pages/dokumen',$json,TRUE);
        
        $data['json'] = json_encode($json);
        $this->load->view('json_view',$data);
    }
    
}
?>
