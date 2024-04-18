<?php

class Sertifikat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_sertifikat');
    }

    public function index()
    {
       $data['sertifikat'] = $this->m_sertifikat->get_data('certificates')->result();
       $data['event'] = $this->m_sertifikat->get_data('events')->result();
       $data['users'] = $this->m_sertifikat->get_data('user')->result();



       $this->load->view('admin/vw_sertifikat', $data);
    }

    public function tambah()
    {
        $data['certificate'] = $this->m_sertifikat->get_data('certificates')->result();
        $data['event'] = $this->m_sertifikat->get_data('events')->result();
        $data['users'] = $this->m_sertifikat->get_data('user')->result();

        $this->load->view('admin/vw_tambah_serti', $data);
    }

    public function tambah_data()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'participant_name' => $this->input->post('participant_name'),
                'event_name' => $this->input->post('event_name'),
                'event_date' => $this->input->post('event_date'),
                'certificate_text' => $this->input->post('certificate_text'),
            );

            $this->m_sertifikat->insert_data($data, 'certificates');
            $this->session->set_flashdata('pesanevent', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Sertifikat Berhasil Di Tambahkan!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
            redirect('sertifikat');

            redirect('sertifikat');
        }
    }

    public function edit($certificate_id)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'certificate_id' => $certificate_id,
                'participant_name' => $this->input->post('participant_name'),
                'event_name' => $this->input->post('event_name'),
                'event_date' => $this->input->post('event_date'),
                'certificate_text' => $this->input->post('certificate_text'),
            );

            $this->m_sertifikat->update_data($data, 'certificates');
            $this->session->set_flashdata('pesanevent', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Data Sertifikat Berhasil Di Ubah!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
            redirect('sertifikat');
        }
    }
    public  function hapus($id)
    {
        $where = array('certificate_id' => $id);

        $this->m_sertifikat->delete($where, 'certificates');
        $this->session->set_flashdata('pesanevent', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Sertifikat Berhasil Di hapus!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('sertifikat');
    }
    public function _rules()
    {
        $this->form_validation->set_rules('participant_name', 'Participant Name', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('event_name', 'Event Name', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('event_date', 'Event date', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('certificate_text', 'Certificate text', 'required', array(
            'required' => '%s harus diisi !!'
        ));
    }
}
