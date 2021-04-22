<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$ci = &get_instance();
$ci->load->library('session');
if (null == $ci->session->userdata('uid') && null == $ci->session->userdata('uname')) {
    $val = substr(base_url(uri_string()), -5);
    if ($val == 'login') {
    } elseif ($val == 'Login') {
    } else {
        $ci->session->set_userdata('next_url', base_url(uri_string()));
        redirect(base_url('login/'), 'refresh');
    }
}
