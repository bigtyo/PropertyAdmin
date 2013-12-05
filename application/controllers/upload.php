<?php

class upload extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function listingimage()
    {
        $listingid = $this->input->get('listingid');
        $data['listingid'] = $listingid;
        $this->load->view('upload/listing',$data);
    }
}
?>
