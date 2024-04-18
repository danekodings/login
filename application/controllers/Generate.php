<?php

class Generate extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_generate');
        $this->load->model('m_sertifikat');
        $this->load->model('user');
        $this->load->model('m_event');
    }

    public function index()
    {
        $data['certificate_assignment'] = $this->m_generate->get_data('certificate_assignments')->result();
        $data['certificate'] = $this->m_generate->get_data('certificates')->result();
        $data['users'] = $this->m_generate->get_data('user')->result();
        $data['event'] = $this->m_generate->get_data('events')->result();


        $data['title'] = 'Sertifikat';
        $this->load->view('admin/vw_generate', $data);
    }
    public function tambah()
    {
        $data['certificate_assignment'] = $this->m_generate->get_data('certificate_assignments')->result();
        $data['certificate'] = $this->m_generate->get_data('certificates')->result();
        $data['users'] = $this->m_generate->get_data('user')->result();
        $data['event'] = $this->m_generate->get_data('events')->result();

        $this->load->view('admin/vw_tambah_gen', $data);
    }
    
    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'certificate_id' => $this->input->post('certificate_id'),
                'user_id' => $this->input->post('user_id'),
                'event_id' => $this->input->post('event_id'),
            );

            $this->m_generate->insert_data($data, 'certificate_assignments');
            $this->session->set_flashdata('pesanevent', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Generate Berhasil Di Tambahkan!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
            redirect('generate');

            redirect('generate');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('certificate_id', 'Certificate Text', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('user_id', 'Username', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('event_id', 'Event Name', 'required', array(
            'required' => '%s harus diisi !!'
        ));
    }

    public  function delete($id)
    {
        $where = array('assignment_id' => $id);

        $this->m_generate->delete($where, 'certificate_assignments');
        $this->session->set_flashdata('pesanevent', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Generate Berhasil Di hapus!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
        redirect('generate');
    }
    public function download($id)
    {
    $certificate = $this->m_sertifikat->get_datadetail($id);
    $event  = $this->m_event->get_datadetail($id);

    $data['sertifikat'] = $certificate;
    $data['event_certificate'] = $event;
    
    $this->load->library('dompdf_gen');
    $this->load->view('admin/download_serti', $data);

    $paper_size = 'A4';
    $orientation = 'landscape';
    $html = $this->output->get_output();

    $this->dompdf->set_paper($paper_size, $orientation);
    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream('Certificate.pdf', array('Attachment' =>0));
    }
}