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

    public function viewBaseMaps()
	{
        $data = array(
            'judul' => 'View Base Maps',
            'page' => 'baseMaps/v_base_maps',
            'dir' => 'Home '
        );
		$this->load->view('v_template', $data, FALSE);
	}

    public function marker()
	{
        $data = array(
            'judul' => 'Marker',
            'page' => 'marker/v_marker',
            'dir' => 'Home '
        );
		$this->load->view('v_template', $data, FALSE);
	}
}
