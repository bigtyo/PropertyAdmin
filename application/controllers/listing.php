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
                
                $this->load->view('listing/index',$data);
                $this->load->view('templates/footer',$header);
        }

        
                
        
        public function view($listingid)
        {
                $header['external_scripts'] = array(
                    "https://maps.googleapis.com/maps/api/js?key=".MAP_API_KEY."&sensor=true"
                                        
                );
                $marketingid = $this->session->userdata('marketingid');
                //$adminid = $this->session->userdata('adminid');
                
                $data['listing'] = $this->listing_model->getListing($listingid);
                $data['contacts'] = $this->listing_model->getContact($listingid,$marketingid);
                $data['vendor'] = $this->listing_model->getVendor($listingid,$marketingid);
                $data['promotions'] = $this->listing_model->getPromosi($listingid,$marketingid);
                $data['activities'] = $this->listing_model->getAktivitas($listingid,$marketingid);
                $data['marketingid'] = $marketingid;
                
                
                $header['scripts'] = array(
                    "listing/listingdetail",
                    "plugins/chosen/chosen.jquery.min",
                    "plugins/masonry/jquery.masonry.min",
                    
                    "plugins/colorbox/jquery.colorbox-min"
                );
                if (empty($data['listing']))
                {
                        show_404();
                }

                //$data['title'] = $data['news_item']['title'];

                
                $this->load->view('listing/view', $data);
                $this->load->view('templates/footer',$header);
        }
        
        
        
        public function saveAktivitas()
        {
            $aktivitasid = $this->input->post('id');
            $data['LISTINGID'] = $this->input->post('listingid');
            $data['MARKETINGID'] = $this->input->post('marketingid');
            $data['TANGGAL'] = $this->input->post('tanggal');
            $data['JENIS'] = $this->input->post('jenis');
            $data['NAMA_CUSTOMER'] = $this->input->post('nama_customer');
            $data['KETERANGAN'] = $this->input->post('keterangan');
            if($aktivitasid == null || $aktivitasid == "")
            {
                
                try {
                    $aktivityId = $this->listing_model->saveAktivitas($data);
                    $json['status'] = 1;
                    $json['id'] = $aktivityId;
                    
                } catch (Exception $exc) {
                    $json['status'] = 0;
                    $json['error'] = "gagal menyimpan aktivitas";
                    $json['details'] = $exc->getMessage();
                }
            }else{
                try {
                    $this->listing_model->updateAktivitas($data);
                    $json['status'] = 2;
                    $json['id'] = $aktivitasid;
                    
                } catch (Exception $exc) {
                    $json['status'] = 0;
                    $json['error'] = "gagal mengupdate aktivitas";
                    $json['details'] = $exc->getMessage();
                }

                
            }
            $data['json'] = json_encode($json);
            $this->load->view('json_view',$data);
        }
        
        public function savePromosi()
        {
            $promosiid = $this->input->post('id');
            $data['LISTINGID'] = $this->input->post('listingid');
            $data['MARKETINGID'] = $this->input->post('marketingid');
            
            
            
            $data['TANGGAL'] = $this->input->post('tanggal');
            $data['JENISPROMOSIID'] = $this->input->post('jenispromosiid');
            $data['JUMLAH'] = $this->input->post('jumlah');
            if($promosiid == null || $promosiid == "")
            {
                try {
                    $promosiid = $this->listing_model->savePromosi($data);
                    $json['status'] = 1;
                    $json['id'] = $promosiid;
                } catch (Exception $exc) {
                    $json['status'] = 0;
                    $json['error'] = "gagal menyimpan promosi";
                    $json['details'] = $exc->getMessage();
                }

                
            }else{
                try {
                    $this->listing_model->updatePromosi($promosiid,$data);
                    $json['status'] = 2;
                    $json['id'] = $promosiid;
                } catch (Exception $exc) {
                   $json['status'] = 0;
                    $json['error'] = "gagal mengupdate promosi";
                    $json['details'] = $exc->getMessage();
                }

                
            }
            $data['json'] = json_encode($json);
            $this->load->view('json_view',$data);
        }
        
        public function add()
        {
            $data['tempid'] = uniqid();
            $header['external_scripts'] = array(
                    "https://maps.googleapis.com/maps/api/js?key=".MAP_API_KEY."&sensor=true",
                    
                                        
                );
            $header['scripts'] = array(
                'vendor/jquery.ui.widget',
                
                "plugins/chosen/chosen.jquery.min",
                "plugins/masonry/jquery.masonry.min",
                
                "plugins/colorbox/jquery.colorbox-min",
                "listing/listingadd",
                "jquery.iframe-transport",
                "jquery.fileupload",
                "plugins/gmap/gmap3.min",
                "plugins/gmap/gmap3-menu"
                
                
            );
            
            $this->load->view('listing/add',$data);
            $this->load->view('templates/footer',$header);
        }
        
        
        
        public function match()
        {
            $isSearch = $this->input->get('search') == 1;
            
            
            $marketingid = $this->session->userdata('marketingid');
            
            
            
            
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
            //echo date('%Y-%m-%d');
            //return;
            
            $customer = $this->input->post('datacustomer');
            $listing = $this->input->post('datalisting');
            $tempid = $this->input->post('tempid');
            
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
                        //chmod(LISTING_TEMP_PATH.$tempid, 0777);
                        
                        if(!file_exists(LISTING_UPLOAD_PATH.$listingid))
                        {
                            mkdir(LISTING_UPLOAD_PATH.$listingid);
                        }
                        
                        //chmod(LISTING_UPLOAD_PATH.$listingid, 0777);
                        
                        try {
                            if(rename(LISTING_TEMP_PATH.$tempid,LISTING_UPLOAD_PATH.$listingid)){
                                $json['status'] = 1;
                                $json['listingid'] = $listingid;
                            }else
                            {
                                $json['state'] = 2;
                                $json['error'] = "penyimpanan listing berhasil namun gagal menyimpan file";
                                $json['detail'] = "failed to copying from temp directory";
                            }
                            
                        } catch (Exception $exc) {
                            $json['state'] = 2;
                            $json['error'] = "penyimpanan listing berhasil namun gagal menyimpan file";
                            $json['detail'] = $exc->getMessage();
                            
                        }

                        
                            
                            
                        
                    }
                }
                
            }
            
            
            $data['json'] = json_encode($json);
            
            $this->load->view('json_view',$data);
        }
}
?>