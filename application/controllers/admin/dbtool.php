<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbtool extends CI_Controller {
	function index()
	{
		$this->load->view('admin/dbtoolview');
	}
}