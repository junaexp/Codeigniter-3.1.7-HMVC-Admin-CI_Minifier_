<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
	
	public function index()
	{
		$this->load->view('_inc/head');
		$this->load->view('_inc/menu');
		$this->load->view('main');
		$this->load->view('_inc/foot');
	}
}

	
