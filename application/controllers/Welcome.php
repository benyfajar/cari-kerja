<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('m_data');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function admin()
	{
		$kategori = $this->m_data->ambilDataS('kategori', 'kd_kat');
		$data["data_low"] = array();

		foreach ($kategori as $row => $v) {
			$jum = $this->m_data->grafik($v->kd_kat);
			$nilai = array('nama' => $v->kategori, 'nilai' => $jum[0]->z);
			array_push($data['data_low'], $nilai);
		}

		$data["tittle"] = "Dashboard || Cari-Kerja.site";
		$data['header'] = "Dashboard";
		$data['active'] = "home";
		$data["content"] = "grafik/v_grafik";

		$this->load->view("v_main", $data);
	}

	public function kategori()
	{
		$data['tittle'] = "Kategori Lowongan || Cari-Kerja.site";
		$data['header'] = "Kategori Lowongan";
		$data['active'] = "kategori";
		$data['content'] = "kategori/v_kategori";

		$jumlah_data = $this->m_data->jumlah_data("kategori");
		$this->load->library('pagination');

		//konfigurasi pagination
		$config['base_url'] = site_url('welcome/kategori'); //site url
		$config['total_rows'] = $jumlah_data; //total row
		$config['per_page'] = 25;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-end">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		//panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
		$data['listData'] = $this->m_data->data("kategori", $config['per_page'], $data['page']);

		$data['pagination'] = $this->pagination->create_links();

		$this->load->view("v_main", $data);
	}

	public function subKategori()
	{
		$data['tittle'] = "Sub Kategori Lowongan || Cari-Kerja.site";
		$data['header'] = "Sub Kategori Lowongan";
		$data['active'] = "subKategori";
		$data['content'] = "kategori/v_subKategori";

		$jumlah_data = $this->m_data->jumlah_data("sub_kategori");
		$this->load->library('pagination');

		//konfigurasi pagination
		$config['base_url'] = site_url('welcome/subKategori'); //site url
		$config['total_rows'] = $jumlah_data; //total row
		$config['per_page'] = 25;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-end">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


		//panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
		$data['listData'] = $this->m_data->dataSubKategori($config['per_page'], $data['page']);

		$data['pagination'] = $this->pagination->create_links();
		$data['listKategori'] = $this->m_data->ambilDataS('kategori', 'kategori');

		$this->load->view("v_main", $data);
	}
	public function jadwal()
	{
		$data['tittle'] = "Jadwal Scraping || Cari-Kerja.site";
		$data['header'] = "Jadwal Scraping";
		$data['active'] = "jadwal";
		$data['content'] = "scrap/v_jadwal";

		$data['webLoker'] = $this->m_data->ambilDataS('web_loker', 'nama_loker');
		$data['listData'] = $this->m_data->dataJadwal();

		$this->load->view("v_main", $data);
	}
}
