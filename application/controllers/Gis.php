<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gis extends CI_Controller {

	
	public function index()
	{
        $data = array(
            'judul' => 'Home',
            'page' => 'v_home',
            'dir' => 'Dashboard / Pages'
        );
		$this->load->view('v_template', $data, FALSE);
	}

    public function viewMaps()
	{
        $data = array(
            'judul' => 'View Maps',
            'page' => 'viewMaps/v_maps',
            'dir' => 'Home '
        );
		$this->load->view('v_template', $data, FALSE);
	}
}
