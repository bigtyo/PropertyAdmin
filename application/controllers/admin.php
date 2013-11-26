<?php

class admin extends RS_Controller
{
    public function __construct() {
        parent::__construct();
        
        $this->load->model('listing_model');
        $this->load->model('customer_model');
        $this->load->model('admin_model');
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
            
            $this->load->view('listing/admin',$data);
            $this->load->view('templates/footer');
        }
        
        public function verify($listingid){
            
            $officeid = $this->session->userdata('officeid');
            $data['marketingid'] = $this->session->userdata('marketingid');
            $data['listing'] = $this->listing_model->getNotVerifiedListing($officeid,$listingid);
            $data['status_jual'] = $this->listing_model->getStatusJual();
            $data['status_data'] = $this->listing_model->getStatusData();
            
            $this->load->view('admin/verify',$data);
            $this->load->view('templates/footer');
        }
        
        
}
?>
