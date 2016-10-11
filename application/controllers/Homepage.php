<?php

/**
* 
*/
class Homepage extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		# code...
	}

	function index()
	{
		$data['title'] = 'Home';
		$this->load->view('Homeview',$data);
	}
}

?>