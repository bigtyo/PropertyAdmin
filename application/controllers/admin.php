<?php

class admin extends RS_Controller
{
    public function __construct() {
        parent::__construct();
        
        $this->load->model('listing_model');
        $this->load->model('customer_model');
        $this->load->model('admin_model');
        $this->load->model('office_model');
    }
    
    
    public function callin()
    {
        $username = $this->session->userdata('userid');
        
        $data['marketings'] = $this->admin_model->getMarketing($username);
        $header['scripts'] = array(
            'admin/callin'
        );
        
        $this->load->view('admin/callin',$data);
        $this->load->view('templates/footer',$header);
    }
    
    public function saveCallin()
    {
        
        $customerdata = $this->input->post('customerdata');
        $marketingid = $this->input->post('marketingid');
        $historydata = $this->input->post('historydata');
        
        $customer_id = $this->customer_model->addCustomer($customerdata,$marketingid);
        if(!$customer_id)
        {
            $json['status'] = 0;
            $json['error'] = "gagal melakukan penyimpanan data customer";
            $data['json'] = json_encode($json);
            $this->load->view('json_view',$data);
            return;
        }
        if($historydata != null && $historydata != "")
        {
            $history = json_decode($historydata,true);
            
            $history['CUSTOMERID'] = $customer_id;
            $history['MARKETINGID'] = $marketingid;
            try {
                $this->customer_model->addCustomerHistory($history);
            } catch (Exception $exc) {
                $json['status'] = 0;
                $json['error'] = "gagal menyimpan history";
                $json['detail'] = $exc->getMessage();
                $data['json'] = json_encode($json);
                $this->load->view('json_view',$data);
                return;
            }

            
        }
        
        $listingdata = $this->input->post('listingdata');
        if($listingdata != null && $listingdata != "")
        {
            $listing = json_decode($listingdata,true);
            $listing['CUSTOMERID'] = $customer_id;
            
            $listingjson = json_encode($listing);
            
            try {
                $this->listing_model->saveListing($listingjson,$marketingid);
            } catch (Exception $exc) {
                $json['status'] = 0;
                $json['error'] = "gagal menyimpan history";
                $json['detail'] = $exc->getMessage();
                $data['json'] = json_encode($json);
                $this->load->view('json_view',$data);
                return;
            }

            
        }
        $json['status'] = 1;
        $data['json'] = json_encode($json);
        $this->load->view('json_view',$data);
    }
    
    public function adminlisting(){
            $officeid = $this->session->userdata('officeid');
            $data['listings'] = $this->listing_model->getUnverifiedListingByOfficeId($officeid);
            $office = $this->office_model->getOfficeById($officeid);
			$data['officename'] = $office->NAMA;
            $this->load->view('listing/admin',$data);
            $this->load->view('templates/footer');
        }
        
        public function verify($listingid){
            
            $officeid = $this->session->userdata('officeid');
			$office = $this->office_model->getOfficeById($officeid);
			$data['officename'] = $office->NAMA;
            $data['marketingid'] = $this->session->userdata('marketingid');
            $data['listing'] = $this->listing_model->getNotVerifiedListing($officeid,$listingid);
            $data['status_jual'] = $this->listing_model->getStatusJual();
            $data['status_data'] = $this->listing_model->getStatusData();
            
            $this->load->view('admin/verify',$data);
            $this->load->view('templates/footer');
        }
        
     public function event(){
         if($_SERVER['REQUEST_METHOD'] == 'POST')
         {
             $eventid = $this->input->post('eventid');
             //$officeid = $this->session->userdata('officeid');
             $data_event['officeid'] = $this->session->userdata('officeid');
             $data_event['judul'] = $this->input->post('judul');
             $data_event['description'] = $this->input->post('description');
             $data_event['tanggal'] = $this->input->post('tanggal');
             $data_event['tempat'] = $this->input->post('tempat');
             
             
         
         
         
             
             if($eventid == "")
             {
                 $eventid = $this->admin_model->saveEvent($data_event);
                 
                 if(count($_FILES) > 0 && $_FILES['gambar']['name'] != "")
                 {
                    $tmpname = $_FILES['gambar']['tmp_name'];
                    $filename = $_FILES['gambar']['name'];
                    move_uploaded_file($tmpname, EVENT_PATH.$eventid."_".$filename);
                    $pic['gambar'] = $eventid."_".$filename;
                    $this->admin_model->updateEvent($pic,$eventid);
                 }
             }else
             {
                 $this->admin_model->updateEvent($data_event,$eventid);
                 if(count($_FILES) > 0 && $_FILES['gambar']['name'] != "")
                 {
                    $tmpname = $_FILES['gambar']['tmp_name'];
                    $filename = $_FILES['gambar']['name'];
                    move_uploaded_file($tmpname, EVENT_PATH.$eventid."_".$filename);
                    $pic['gambar'] = $eventid."_".$filename;
                    $this->admin_model->updateEvent($pic,$eventid);
                 }
                 
             }
             redirect('admin/event');
         }else{
             $footer['scripts'] = array(
                'admin/event'
             );
            $officeid = $this->session->userdata('officeid');
            $office = $this->office_model->getOfficeById($officeid);
            $data['officename'] = $office->NAMA;

            $data['events'] = $this->admin_model->getEventList($officeid);

            $this->load->view('admin/event',$data);
            $this->load->view('templates/footer',$footer);
         }
     }
     
     public function getEvent(){
         $eventid = $this->input->post('eventid');
         
         $json = $this->admin_model->getEvent($eventid);
         $data['json'] = json_encode($json);
         
         $this->load->view('json_view',$data);
     }
        
     public function dokumen()
     {
         $footer['scripts'] = array(
             'admin/upload'
         );
         $officeid = $this->session->userdata('officeid');
         $office = $this->office_model->getOfficeById($officeid);
         $data['officename'] = $office->NAMA;
         
         $data['listdokumen'] = $this->admin_model->getDokumenList($officeid);
         
         $this->load->view('admin/upload',$data);
         $this->load->view('templates/footer',$footer);
     }
     
     public function getDokumen()
     {
         $dokumenid = $this->input->post('id');
         
         $json = $this->admin_model->getDokumen($dokumenid);
         
         $data['json'] = json_encode($json);
         
         $this->load->view('json_view',$data);
     }
     
     public function submitdokumen()
     {
         $tmpname = $_FILES['dokumen']['tmp_name'];
         $filename = $_FILES['dokumen']['name'];
         $id = $this->input->post('dokumenid');
         $dokumen['nama'] = $this->input->post('nama');
         $dokumen['officeid'] = $this->session->userdata('officeid');
         $dokumen['path'] = $filename;
         
         move_uploaded_file($tmpname, DOKUMEN_PATH.$filename);
         
         if($id != null && $id != "")
         {
             //update model
             
             $this->admin_model->updateDokumen($dokumen,$id);
         }
         else
         {
             //insert model
             $this->admin_model->addDokumen($dokumen);
         }
         
         redirect('admin/dokumen');
     }
     
     public function hotpick()
     {
         $scripts['scripts'] = array(
             'admin/hotpick'
         );
         $last_hotpick = $this->admin_model->getLastHotpick();
         
         $officeid = $this->session->userdata('officeid');
         $data['listings_hotpick'] = $last_hotpick['listings'];
         $data['tanggal_hotpick'] = $last_hotpick['tanggal'];
         $data['listid'] = $last_hotpick['listid'];
         $data['listings'] = $this->admin_model->getRecentList($officeid);
         
         $this->load->view('admin/hotpick',$data);
         $this->load->view('templates/footer',$scripts);
     }
     
     public function submithotpick()
     {
         $listings = $this->input->post('listings');
         $hotpicklistid = $this->input->post('listid');
         $adminid = $this->session->userdata('adminid');
         $this->admin_model->addHotPick($listings,$adminid,$hotpicklistid);
         
         redirect('admin/hotpick');
     }
        
}
?>
