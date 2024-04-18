<?php

class Event extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_event');
    }

    public function index()
    {
        $data['event'] = $this->m_event->get_data('events')->result();

        $this->load->view('vw_event', $data );
    }
}
