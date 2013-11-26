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
                
                echo "wut";
                $header['scripts'] = array(
                    "listing/listingdetail"
                                        
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
            $header['external_scripts'] = array(
                    "https://maps.googleapis.com/maps/api/js?key=".MAP_API_KEY."&sensor=true"
                                        
                );
            $header['scripts'] = array(
                "listing/listingadd",
                "plugins/chosen/chosen.jquery.min",
                "plugins/masonry/jquery.masonry.min",
                "plugins/AjaxFileUploader/ajaxfileupload",
                "plugins/colorbox/jquery.colorbox-min"
                
            );
            
            $this->load->view('listing/add');
            $this->load->view('templates/footer',$header);
        }
        
        public function uploadImage()
        {
//            $config['upload_path'] = './uploads/';
//            $config['allowed_types'] = 'gif|jpg|png';
//            $config['max_size'] = '100';
//            $config['max_width'] = '1024';
//            $config['max_height'] = '768';
//
//            $this->load->library('upload', $config);
            
            $error = "";
            $msg = "";
            $files = json_encode($_FILES);
            $fileElementName = 'imagefile';
            if(!empty($_FILES[$fileElementName]['error']))
            {
                    switch($_FILES[$fileElementName]['error'])
                    {

                            case '1':
                                    $error = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
                                    break;
                            case '2':
                                    $error = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
                                    break;
                            case '3':
                                    $error = 'The uploaded file was only partially uploaded';
                                    break;
                            case '4':
                                    $error = 'No file was uploaded.';
                                    break;

                            case '6':
                                    $error = 'Missing a temporary folder';
                                    break;
                            case '7':
                                    $error = 'Failed to write file to disk';
                                    break;
                            case '8':
                                    $error = 'File upload stopped by extension';
                                    break;
                            case '999':
                            default:
                                    $error = 'No error code avaiable';
                    }
            }elseif(empty($_FILES[$fileElementName]['tmp_name']) || $_FILES[$fileElementName]['tmp_name'] == 'none')
            {
                    $error = 'No file was uploaded..';
            }else 
            {
                            $msg .= " File Name: " . $_FILES[$fileElementName]['name'] . ", ";
                            $msg .= " File Size: " . @filesize($_FILES[$fileElementName]['tmp_name']);
                            //for security reason, we force to remove all uploaded file
                            @unlink($_FILES[$fileElementName]);		
            }		
            echo "{";
            echo				"error: '" . $error . "',\n";
            echo				"msg: '" . $msg . "'\n";
            //echo				"files: '" . $files . "'\n";
            echo "}";
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