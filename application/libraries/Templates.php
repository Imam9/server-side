<?php


class Templates
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }

    public function admin($content, $data = Null)
    {
        $this->ci->load->view('templates_karyawan/v_karyawan_header');
        $this->ci->load->view('templates_karyawan/v_karyawan_sidebar', $data);
        $this->ci->load->view('admin/' . $content, $data);
        $this->ci->load->view('templates_karyawan/v_karyawan_footer');
        $this->ci->load->view('templates_karyawan/v_karyawan_script', $data);
    }

    public function penjual($content, $data = Null)
    {
        $this->ci->load->view('templates_karyawan/v_karyawan_header');
        $this->ci->load->view('templates_karyawan/v_karyawan_sidebar', $data);
        $this->ci->load->view('penjual/' . $content, $data);
        $this->ci->load->view('templates_karyawan/v_karyawan_footer');
        $this->ci->load->view('templates_karyawan/v_karyawan_script', $data);
    }

    public function pembeli($content, $data = Null)
    {
        $this->ci->load->view('templates_pembeli/v_pembeli_header');
        $this->ci->load->view('templates_pembeli/v_pembeli_navbar', $data);
        $this->ci->load->view('pembeli/' . $content, $data);
        $this->ci->load->view('templates_pembeli/v_pembeli_footer');
        $this->ci->load->view('templates_pembeli/v_pembeli_script', $data);
    }

    public function lengkapi_toko($content, $data = Null)
    {
        $this->ci->load->view('templates_karyawan/v_karyawan_header');
        $this->ci->load->view('templates_karyawan/v_karyawan_navbar', $data);
        $this->ci->load->view('penjual/' . $content, $data);
        $this->ci->load->view('templates_karyawan/v_karyawan_footer');
        $this->ci->load->view('templates_karyawan/v_karyawan_script', $data);
    }


    public function login($data = Null)
    {
        $this->ci->load->view('auth/v_login', $data);
    }

    public function registerasi_penjual($data = Null)
    {
        $this->ci->load->view('penjual/v_registerasi_penjual', $data);
    }
}
