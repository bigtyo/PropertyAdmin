<?php

class Listing extends RS_Controller {

	public function __construct()
	{
		parent::__construct();
                
                
        
		$this->load->model('listing_model');
	}

	public function index()
        {
                //$data['news'] = $this->news_model->get_news();
                //$data['title'] = 'News archive';
                $header['scripts'] = array(
                    "listing/listing"
                                        
                );
                
                $header['external_scripts'] = array();
                $userid = $this->session->userdata('userid');
                $officeid = $this->session->userdata('officeid');
                $data['userid'] = $userid;
                
                $data['listings'] = $this->listing_model->getListings("personal",$officeid,$userid);
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
                "listing/listingadd"
            );
            $this->load->view('templates/header',$header);
            $this->load->view('listing/add');
            $this->load->view('templates/footer');
        }
}
?>