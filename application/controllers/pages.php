<?php

class Pages extends RS_Controller {

	public function view($page = 'home')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		//$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
        
        public function dashboard()
        {
            $scripts['scripts'] = array(
                'dashboard',
                "plugins/flot/jquery.flot.min",
                "plugins/flot/jquery.flot.bar.order.min",
                "plugins/flot/jquery.flot.pie.min",
                "plugins/flot/jquery.flot.resize.min",
                "plugins/slimscroll/jquery.slimscroll.min"
            
            );
            
            
            $this->load->view('pages/dashboard');
            $this->load->view('templates/footer',$scripts);
        }
}
?>