<?php
class customer extends RS_Controller{
    public function __construct() {
        parent::__construct();
        
        $this->load->model('customer_model');
        $this->load->model('listing_model');
    }
    
    public function index(){
        $header['scripts'] = array(
            "customer/customer"
        );
        $header['external_scripts'] = array();
        
        $param['marketingid'] = $this->session->userdata('marketingid');
        $param['userid'] = $this->session->userdata('userid');
        $data['customers'] = $this->customer_model->get_customers_list($param,-1,-1);
        
        $footer['watchs'] = $this->session->all_userdata();
        $this->load->view('templates/header',$header);
        $this->load->view('marketing/customer',$data);
        $this->load->view('templates/footer',$footer);
    }
    
    public function save()
    {
        $data = $this->input->post('data');
        if($data == FALSE)
        {
            $json['status'] = 0;
            $json['error'] = "Tidak ada data yang dikirim";
        }
        else
        {
            $marketingid = $this->session->userdata('marketingid');
            $id_baru = $this->customer_model->addCustomer($data,$marketingid);
            if(!$id_baru)
            {
                $json['status'] = 0;
                $json['error'] = "gagal menyimpan data";
            }else
            {
                $json['status'] = 1;
                $json['id'] = $id_baru;
            }
            $return['json'] = json_encode($json);
            $this->load->view('json_view',$return);
        }
    }
    
    public function update()
    {
        $data = $this->input->post('data');
        if($data == FALSE)
        {
            $json['status'] = 0;
            $json['error'] = "Tidak ada data yang dikirim";
        }
        else
        {
            $this->customer_model->update_customer($data);
        }
    }
    
    public function custdetail()
    {
        $custid = $this->input->get('customerid');
        $marketingid = $this->session->userdata('marketingid');
        
        $customer = $this->customer_model->getCustomer($custid,$marketingid);
        $history = $this->customer_model->getCustomerHistory($custid,$marketingid);
        
        $data['customer'] = $customer;
        $data['histories'] = $history;
        $data['customerid'] = $custid;
        $header['scripts'] = array(
            "customer/detail"
        );
        
        $this->load->view('templates/header',$header);
        $this->load->view('marketing/custdetail',$data);
        $this->load->view('templates/footer');
    }
    
    public function match()
    {
        $data['customerid'] = $this->input->get('customerid');
        $historyid = $this->input->get('historyid');
        $marketingid = $this->session->userdata('marketingid');
        $data['customer'] = $this->customer_model->getCustomer($data['customerid'],$marketingid);
        $data['listings'] = $this->listing_model->getListingByHistory($historyid,$marketingid);
        
        $this->load->view('templates/header');
        $this->load->view('match/customer',$data);
        $this->load->view('templates/footer');
    }
    
    public function saveHistory()
    {
        $history = json_decode($this->input->post('data'),true);
        $history['MARKETINGID'] = $this->session->userdata('marketingid');
        $id = $this->customer_model->addCustomerHistory($history);
        $json['id'] = $id;
        $data['json'] = json_encode($json);
        $this->load->view('json_view',  $data);
    }
    
    public function listHistory()
    {
        $customerid = $this->input->get('customerid');
        
        $marketingid = $this->session->userdata('marketingid');
        
        
        $data['histories'] = $this->customer_model->getCustomerHistory($customerid,$marketingid);
        $this->load->view('marketing/historylist',$data);
    }
    
    public function loadDialog()
    {
        $dialogname = $this->input->post('dialog');
        
        $this->load->view('marketing/'.$dialogname);
    }
    
}

?>
