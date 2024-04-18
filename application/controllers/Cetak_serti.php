<?php

class Cetak_serti extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_generate');
    }

    public function index()
    {
        $data['certificate_assignment'] = $this->m_generate->get_data('certificate_assignments')->result();
        $data['certificate'] = $this->m_generate->get_data('certificates')->result();
        $data['users'] = $this->m_generate->get_data('user')->result();
        $data['event'] = $this->m_generate->get_data('events')->result();


        $data['title'] = 'Sertifikat';
        $this->load->view('user/cetak_serti', $data);
    }
}