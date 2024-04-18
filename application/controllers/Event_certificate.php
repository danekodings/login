<?php

class Event_certificate extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_event');
    }

    public function index()
    {
        $data['events_certificates'] = $this->m_event->get_data('events')->result();

        $this->load->view('admin/vw_event', $data);
    }
    function tambah(){
        $this->load->view('admin/vw_tambah'); 
    }

    function tambah_data(){

        $this->_rules();

        if ($this->form_validation->run() == FALSE){
            $this->index();
        }else{
            $data=array(
            'event_name' => $this->input->post('event_name'),
			'event_date' => $this->input->post('event_date'),
			'location'     => $this->input->post('location'),
			'organizer'   => $this->input->post('organizer'),
            );  
            $this->m_event->tambah_data($data, 'events');
            redirect('event_certificate');
        }
    }

    
    function edit_data($event_id){
        
        $this->_rules();

        if ($this->form_validation->run() == FALSE){
            $this->index();
        }else{
            $data=array(

            'event_id' => $event_id,
            'event_name' => $this->input->post('event_name'),
			'event_date' => $this->input->post('event_date'),
			'location'     => $this->input->post('location'),
			'organizer'   => $this->input->post('organizer'),
            );  
            $this->m_event->update_data($data, 'events');
            redirect('event_certificate');
        }
    }
    function hapus($id){
        $where = array('event_id' => $id);
        $this->m_event->hapus_data($where,'events');
        redirect('event_certificate');
       }
       public function _rules()
    {
        $this->form_validation->set_rules('event_name', 'event_name','required', array(

        ));
		$this->form_validation->set_rules('event_date', 'event_date','required', array(

        ));
		$this->form_validation->set_rules('location', 'location','required', array(

        ));
		$this->form_validation->set_rules('organizer', 'organizer','required', array(

        ));
    }
}
    