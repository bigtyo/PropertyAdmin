<?php

class Listing extends RS_Controller {

	public function __construct()
	{
		parent::__construct();
                
                
                $this->load->model('customer_model');
		$this->load->model('listing_model');
	}

	public function index()
        {
                //$data['news'] = $this->news_model->get_news();
                //$data['title'] = 'News archive';
                $tipedata_exist = $this->input->get('tipedata');
                if($tipedata_exist)
                {
                    $tipedata = $this->input->get('tipedata');
                }else{
                    $tipedata = "personal";
                }
                $header['scripts'] = array(
                    "listing/listing"
                                        
                );
                
                $header['external_scripts'] = array();
                $userid = $this->session->userdata('userid');
                $officeid = $this->session->userdata('officeid');
                $data['userid'] = $userid;
                
                $data['listings'] = $this->listing_model->getListings($tipedata,$officeid,$userid);
                //$watch['var'] = json_encode($this->session->all_userdata());
                $this->load->view('templates/header',$header);
                $this->load->view('listing/index',$data);
                $this->load->view('templates/footer');
        }


        
        public function view($listingid)
        {
                $header['external_scripts'] = array(
                    "https://maps.googleapis.com/maps/api/js?key=".MAP_API_KEY."&sensor=TRUE"
                                        
                );
                $data['listing'] = $this->listing_model->getListing($listingid);
                $header['scripts'] = array(
                    "listing/listingdetail"
                                        
                );
                if (empty($data['listing']))
                {
                        show_404();
                }

                //$data['title'] = $data['news_item']['title'];

                $this->load->view('templates/header',$header);
                $this->load->view('listing/view', $data);
                $this->load->view('templates/footer');
        }
        
        
        public function add()
        {
            $header['external_scripts'] = array(
                    "https://maps.googleapis.com/maps/api/js?key=".MAP_API_KEY."&sensor=true"
                                        
                );
            $header['scripts'] = array(
                "listing/listingadd",
                "plugins/chosen/chosen.jquery.min",
                "plugins/masonry/jquery.masonry.min",
                
                "plugins/colorbox/jquery.colorbox-min"
                
            );
            $this->load->view('templates/header',$header);
            $this->load->view('listing/add');
            $this->load->view('templates/footer');
        }
        
        public function uploadImage()
        {
            //$this->input->post('images');
        }
        
        public function match()
        {
            $isSearch = $this->input->get('search') == 1;
            
            
            $marketingid = $this->session->userdata('marketingid');
            
            
            
            $this->load->view('templates/header');
            if($isSearch)
            {
                $data['customerid'] = $this->input->get('customerid');
                $historyid = $this->input->get('historyid');
                $data['listings'] = $this->listing_model->getListingByHistory($historyid,$marketingid);
                $this->load->view('match/customer',$data);
            }else
            {
                $listingid = $this->input->get('listingid');
                $data['listing'] = $this->listing_model->getListing($listingid);
                $data['customers'] = $this->customer_model->getCustomerMatchByListing($listingid,$marketingid);
                $this->load->view('match/listing',$data);
            }
            $this->load->view('templates/footer');
        }
        
        public function save()
        {
            echo date('%Y-%m-%d');
            return;
            
            $customer = $this->input->post('datacustomer');
            $listing = $this->input->post('datalisting');
            
            
            $marketing_id = $this->session->userdata('marketingid');
            
            if($marketing_id == NULL)
            {
                $json['status'] = 0;
                $json['error'] = "anda tidak berhak melakukan operasi ini";
            }
            else {
                $customerid = $this->customer_model->addCustomer($customer,$marketing_id);
                if(!$customerid)
                {
                    $json['status'] = '0';
                    $json['error'] = "gagal saat melakukan pengecekan/penyimpanan data customer";
                }else{
                    $listing_json = json_decode($listing,true);
                    $listing_json['CUSTOMERID'] = $customerid;
                    $listing_json['STATUSJUALID'] = 2; //hardcode jika baru dijual
                    $listing_json['STATUSDATAID'] = 1; //hardcode jika baru karena harus diverifikasi
                    $listing_json['EXPIRED'] = date('%Y-%m-%d');
                    //echo $listing_json['EXPIRED'];
                    $listing = json_encode($listing_json);
                
                    $listingid = $this->listing_model->saveListing($listing,$marketing_id);
                    
                    if(!$listingid)
                    {
                        $json['state'] = 0;
                        $json['error'] = "penyimpanan listing gagal";
                    }else
                    {
                        $json['status'] = 1;
                        $json['listingid'] = $listingid;
                    }
                }
                
            }
            
            
            $data['json'] = json_encode($json);
            
            $this->load->view('json_view',$data);
        }
}
?>