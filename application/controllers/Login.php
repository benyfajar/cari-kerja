<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data', 'm_data');
        // if ($this->session->userdata('status') != "telah_login") {
        //     redirect(base_url() . 'login?alert=belum_login');
        // }
    }

    public function index()
    {
        $this->load->view('v_login');
    }

    public function login2()
    {
        $this->load->view('v_login2');
    }

    public function doLogin()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', array(
            'required' => '<p style="color:white;">Username harus diisi !</p>'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '<p style="color:white;">Password harus diisi !</p>'
        ));

        if ($this->form_validation->run() != false) {
            // menangkap data username dan password dari halaman login
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $where = array(
                'username' => $username,
                'password' => md5($password),
                'status' => 1
            );

            // Cek kesesuaian login pada table user
            $cek = $this->m_data->cek_login("user", $where);

            // cek jika login benar
            if ($cek->num_rows() > 0) {
                // ambil data pengguna yang melakukan login
                $data = $cek->row();

                // buat session untuk pengguna yang berhasil login
                $data_session = array(
                    'uid' => $data->id_user,
                    'uname' => $data->username,
                    'status' => 'telah_login'
                );

                $this->session->set_userdata($data_session);

                // alihkan halaman ke halaman dashboard pengguna
                redirect(base_url() . 'welcome');
            } else {
                redirect(base_url() . 'login?alert=gagal');
            }
        } else {
            $this->load->view('v_login');
        }
    }

    public function doLogout()
    {
        $this->session->sess_destroy();
        redirect('login?alert=logout');
    }
}
