
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	protected 	$view_data = array(),
				$attempt = 0;

	public function __construct()
	{
		parent::__construct();
		$this->attempt = $this->session->userdata('attempt');
		$this->word = $this->session->userdata('word');
	}

	public function index()
	{
		$this->load->view('home');				
	}

	public function process_word()
	{
		if($this->attempt)
			$this->attempt++;
		else
			$this->attempt = 1;

		$word = substr(str_shuffle(md5(time())),0,14);
		
		$this->session->set_userdata('attempt', $this->attempt);
		$this->session->set_userdata('word', $word);

		redirect(base_url());
	}
}