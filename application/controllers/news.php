<?php

class News extends RS_Controller {

	public function __construct()
	{
		parent::__construct();
                $this->load->helper('url');
		$this->load->model('news_model');
	}

	public function index()
        {
                //$data['news'] = $this->news_model->get_news();
                //$data['title'] = 'News archive';

                //$this->load->view('templates/header', $data);
            $today = new DateTime();
            $today->add(new DateInterval('P2D'));
            $time = date_format($today, 'Y-m-d');
            $today->sub(new DateInterval('P2D'));
            $last = date_format($today, 'Y-m-d');;
            $userid = $this->session->userdata('userid');
            $data['feeds'] = $this->news_model->getAktivitasBaru($time,$last,$userid);
            $scripts['scripts'] = array(
                'news/index'
            );
            //$data['json'] = json_encode($json);
            //$this->load->view('json_view',$data);
            $this->load->view('news/index', $data);
            $this->load->view('templates/footer',$scripts);
        }


        
        public function view($slug)
        {
                $data['news_item'] = $this->news_model->get_news($slug);

                if (empty($data['news_item']))
                {
                        show_404();
                }

                $data['title'] = $data['news_item']['title'];

                $this->load->view('templates/header', $data);
                $this->load->view('news/view', $data);
                $this->load->view('templates/footer');
        }
}
?>
