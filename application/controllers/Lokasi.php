<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		
		$this->load->model('m_lokasi');
		
	}

    public function input()
	{
        $this->form_validation->set_rules('desa', 'Desa', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
		$this->form_validation->set_rules('kepala_desa', 'Kepala Desa', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
        $this->form_validation->set_rules('dana_desa', 'Dana Desa', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
        $this->form_validation->set_rules('alokasi_dana_desa', 'Alokasi Dana Desa', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
        
		$this->form_validation->set_rules('longitude', 'Longitude', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
		$this->form_validation->set_rules('longitude', 'Longitude', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
		if ($this->form_validation->run() == FALSE) {
			$data = array(
                'judul' => 'Marker',
                'page' => 'marker/v_marker',
                'dir' => 'Home ',
                'lokasi' => $this->m_lokasi->allData(),
            );
            $this->load->view('v_template', $data, FALSE);
		} else {

            $config['upload_path']          = './gambar/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1000000;

            $this->load->library('upload');
            $this->upload->initialize($config);

            $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('gambar'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                    $gambar = $this->upload->data();
                    $gambar = $gambar['file_name'];
                        #simpan data ke database
                    $data = array(
                        'desa' => $this->input->post('desa'),
                        'kepala_desa' => $this->input->post('kepala_desa'),
                        'dana_desa' => $this->input->post('dana_desa'),
                        'alokasi_dana_desa' => $this->input->post('alokasi_dana_desa'),
                        'kecamatan' => $this->input->post('kecamatan'),
                        'kabupaten' => $this->input->post('kabupaten'),
                        'provinsi' => $this->input->post('provinsi'),
                        'gambar' => $gambar,
                        'latitude' => $this->input->post('latitude'),
                        'longitude' => $this->input->post('longitude'),
                    );
                    $this->m_lokasi->input($data);
                    #notifikasi data berhasil disimpan
                    $this->session->set_flashdata('pesan', 'Data Lokasi Berhasil Disimpan !!');
                    redirect('gis/makeMaker');
                }
			
			
		}
		
	}

    public function viewEdit($id) {
        $data = array(
            'judul' => 'Edit Marker',
            'page' => 'marker/v_edit',
            'dir' => 'Home / Marker ',
            'lokasi' => $this->m_lokasi->detail($id),
        );
        $this->load->view('v_template', $data, FALSE);
    }

    public function edit($id)
	{
		$this->form_validation->set_rules('desa', 'Desa', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
		$this->form_validation->set_rules('kepala_desa', 'Kepala Desa', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
        $this->form_validation->set_rules('dana_desa', 'Dana Desa', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
        $this->form_validation->set_rules('alokasi_dana_desa', 'Alokasi Dana Desa', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
        
		$this->form_validation->set_rules('longitude', 'Longitude', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
		$this->form_validation->set_rules('longitude', 'Longitude', 'required', array('required'
						=>'%s Tidak Boleh Kosong'));
		if ($this->form_validation->run() == FALSE) {
            $data = array(
                'judul' => 'Marker',
                'page' => 'marker/v_marker',
                'dir' => 'Home ',
                'lokasi' => $this->m_lokasi->allData(),
            );
            $this->load->view('v_template', $data, FALSE);
	    } else {
            $config['upload_path']          = './gambar/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1000000;

            $this->load->library('upload');
            $this->upload->initialize($config);

            $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('gambar'))
                {
                    $data = array(
                        'id' => $id,
                        'desa' => $this->input->post('desa'),
                        'kepala_desa' => $this->input->post('kepala_desa'),
                        'dana_desa' => $this->input->post('dana_desa'),
                        'alokasi_dana_desa' => $this->input->post('alokasi_dana_desa'),
                        'kecamatan' => $this->input->post('kecamatan'),
                        'kabupaten' => $this->input->post('kabupaten'),
                        'provinsi' => $this->input->post('provinsi'),
                        'latitude' => $this->input->post('latitude'),
                        'longitude' => $this->input->post('longitude'),
                    );
                    $this->m_lokasi->edit($data);
                    #notifikasi data berhasil disimpan
                    $this->session->set_flashdata('pesan', 'Data Lokasi Berhasil Disimpan !!');
                    redirect('lokasi/viewEdit');
                }
                else
                {

                    

                    $item = $this->m_lokasi->detail($id);
                    if($item->image == null){
                        $target_file = base_url('gambar/'.$item->gambar);
                        unlink($target_file);
                        $gambar = $this->upload->data();
                        $gambar = $gambar['file_name'];
                            #simpan data ke database
                        $data = array(
                            'id' => $id,
                            'desa' => $this->input->post('desa'),
                            'kepala_desa' => $this->input->post('kepala_desa'),
                            'dana_desa' => $this->input->post('dana_desa'),
                            'alokasi_dana_desa' => $this->input->post('alokasi_dana_desa'),
                            'kecamatan' => $this->input->post('kecamatan'),
                            'kabupaten' => $this->input->post('kabupaten'),
                            'provinsi' => $this->input->post('provinsi'),
                            'gambar' => $gambar,
                            'latitude' => $this->input->post('latitude'),
                            'longitude' => $this->input->post('longitude'),
                    );
                    }

                    $this->m_lokasi->edit($data);
                    #notifikasi data berhasil disimpan
                    $this->session->set_flashdata('pesan', 'Data Lokasi Berhasil Disimpan !!');
                    redirect('lokasi/viewEdit');
                }
	    }
	}

    public function delete($id)
	{
        
		$item = $this->m_lokasi->detail($id);
        $target_file = base_url('/gambar/'.$item->gambar);
        unlink($target_file);
        
		$data = array('id' => $id);
		$this->m_lokasi->delete($data);
		$this->session->set_flashdata('pesan', 'data berhasil di hapus');
		redirect('gis/marker');
	}

}
