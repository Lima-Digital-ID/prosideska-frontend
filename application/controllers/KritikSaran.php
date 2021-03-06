<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KritikSaran extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Feedback_model');
		$this->load->model('notifikasi_model');
		if (isset($_SESSION['nik']) && !empty($_SESSION['nik'])) {
			$this->data['totalNotifikasi'] = $this->notifikasi_model->getTotalNotifikasi($_SESSION['nik']);
		}
	}

	public function index()
	{
		$this->data['title'] = 'Kritik Saran';

		$this->load->view('kritik_saran/index', $this->data);
	}

	public function store()
	{
		if ($this->Feedback_model->insert()) {
			$this->session->set_flashdata('pesan', 'data berhasil dikirim');

			echo '<script type="text/javascript">alert("Berhasil mengirim saran");window.location="http://localhost/prosideska-frontend/"</script>';
			// redirect('welcome/index');
		}
	}
}
