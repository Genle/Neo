<?php
	/**
	* 
	*/
	class Entry extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			# code...
		}

		function index()
		{
			$data['title'] = "Entry";
			$this->load->view('entry', $data);
		}
	}
?>