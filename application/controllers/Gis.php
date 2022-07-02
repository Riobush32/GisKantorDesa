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

    public function circle()
	{
        $data = array(
            'judul' => 'Circle',
            'page' => 'circle/v_circle',
            'dir' => 'Home '
        );
		$this->load->view('v_template', $data, FALSE);
	}

    public function polyline()
	{
        $data = array(
            'judul' => 'Polyline',
            'page' => 'polyline/v_polyline',
            'dir' => 'Home '
        );
		$this->load->view('v_template', $data, FALSE);
	}

    public function polygon()
	{
        $data = array(
            'judul' => 'Polygon',
            'page' => 'polygon/v_polygon',
            'dir' => 'Home '
        );
		$this->load->view('v_template', $data, FALSE);
	}
}
