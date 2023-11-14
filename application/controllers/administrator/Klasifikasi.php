<?php 

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class klasifikasi extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->model("LatihModel");
		$this->load->model("Batita_model");
		if (!isset($this->session->userdata['username'])) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alertdismissible fade show" role="alert"> Anda Belum Login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
			redirect('administrator/auth');
		}
	}

	public function input()
	{

		$data = $this->user_model->ambil_data($this->session->userdata['username']);
		$data = array(
			'username' => $data->username,
			'id' => $data->id,
			'level' => $data->level,
		);
		$data['title'] = "Input Data klasifikasi";


		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar', $data);
		//memanggilView,namunkitamenambahkan$datauntukmembawadatadarimodelkedalamView,sehingga$datadalamviewmerupakansebuaharrayyangberisidatadarimodel

		$this->load->view('administrator/input_klasifikasi', $data);
		$this->load->view('template_administrator/footer');
	}

	public function input_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {

			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissiblefadeshow"role="alert">
            Isi data dengan benar !
            <button type="button"class="close"data-dismiss="alert"aria-label="Close">
            <spanaria-hidden="true">&times;
            </span>
            </button>
            </div>');
			redirect('administrator/klasifikasi/input');
		} else {
			$data = array(

				'id_user' => $this->input->post('id_user', TRUE),
				'ibu' => $this->input->post('ibu', TRUE),
				'nama' => $this->input->post('nama', TRUE),
				'nik' => $this->input->post('nik', TRUE),
				'umur' => $this->input->post('umur', TRUE),
				'kelamin' => $this->input->post('kelamin', TRUE),
				'berat' => $this->input->post('berat', TRUE),
				'tinggi' => $this->input->post('tinggi', TRUE),
				'imt' => $this->input->post('imt', TRUE),
			);

			$this->klasifikasi_model->input_data($data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissiblefadeshow"role="alert">
            Data klasifikasi Berhasil Ditambahkan!
            <button type="button"class="close"data-dismiss="alert"aria-label="Close">
            <spanaria-hidden="true">&times;
            </span>
            </button>
            </div>');
			redirect('administrator/klasifikasi');
		}
	}
	public function _rules()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required', ['required' => 'Nama wajib di isi!']);
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required', ['required' => 'Tanggal lahir wajib di isi!']);
		$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required', ['required' => 'Jenis Kelamin wajib di isi!']);
		$this->form_validation->set_rules('berat', 'berat', 'required', ['required' => 'Berat Badan wajib di isi!']);
		$this->form_validation->set_rules('tinggi', 'tinggi', 'required', ['required' => 'Tinggi Badan wajib di isi!']);
	}

	public function data_latih_rules()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required', ['required' => 'Nama wajib di isi!']);
		$this->form_validation->set_rules('kelamin', 'kelamin', 'required', ['required' => 'Jenis Kelamin wajib di isi!']);
		$this->form_validation->set_rules('berat', 'berat', 'required', ['required' => 'Berat badan wajib di isi!']);
		$this->form_validation->set_rules('tinggi', 'tinggi', 'required', ['required' => 'Tinggi Badan wajib di isi!']);
		$this->form_validation->set_rules('diagnosa', 'diagnosa', 'required', ['required' => 'Diagnosa Bayi wajib di isi!']);
	}

	public function update($id)
	{
		$data = $this->user_model->ambil_data($this->session->userdata['username']);
		$data = array(
			'username' => $data->username,
			'id' => $data->id,
			'level' => $data->level,
		);
		$data['title'] = "Data klasifikasi";

		$where = array('id_klasifikasi' => $id);
		$data['klasifikasi'] = $this->klasifikasi_model->edit_data($where, 'klasifikasi')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar', $data);
		$this->load->view('administrator/update_klasifikasi', $data);
		$this->load->view('template_administrator/footer');
	}

	public function update_aksi()
	{ //menangkapdatayangdimasukkankedalamjurusan_update
		$data = $this->user_model->ambil_data($this->session->userdata['username']);
		$data = array(
			'username' => $data->username,
			'level' => $data->level,
		);

		$id = $this->input->post('id_klasifikasi');
		//methodpostuntukmengambildata
		$nama = $this->input->post('nama');
		$nik = $this->input->post('nik');
		$umur = $this->input->post('umur');
		$kelamin = $this->input->post('kelamin');
		$tinggi = $this->input->post('tinggi');
		$berat = $this->input->post('berat');
		$beratbadan = $this->input->post('beratbadan');
		$imt = $this->input->post('imt');
		//masukkankedalamvariabeldatakemudianmasukkedalamarray
		$data = array('nama' => $nama, 'nik' => $nik, 'umur' => $umur, 'kelamin' => $kelamin, 'berat' => $berat, 'tinggi' => $tinggi, 'beratbadan' => $beratbadan, 'imt' => $imt);
		//variabelwhereuntukmengubahidnyamenjadiarray
		$where = array('id_klasifikasi' => $id);
		//masukkandatakedalamtabeljurusanmelaluijurusan_model//update_datamerupakanfunctiondarijurusan_model
		$this->klasifikasi_model->update_data($where, $data, 'klasifikasi');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show"role="alert">Data klasifikasi Berhasil Update!
    <button type="button"class="close"data-dismiss="alert"aria-label="Close">
    <span aria-hidden="true">&times;</span></button></div>');
		redirect('administrator/klasifikasi');
	}

	// ============ Data Batita ================

	public function index()
	{

		// echo json_encode($this->session->userdata()); die();
		$data = $this->user_model->ambil_data($this->session->userdata['username']);
		$data = array(
			'username' => $data->username,
			'id' => $data->id,
			'level' => $data->level,
		);
		$data['title'] = "Data Batita";
		$data['max_date'] = date("Y-m-d");

		$config['base_url'] = site_url('klasifikasi/index'); //site url
		$config['total_rows'] = $this->db->count_all('mst_batita'); //total row
		$config['per_page'] = 5;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);
		

		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
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
		$data['klasifikasi'] = $this->Batita_model->getDataBatita($config["per_page"], $data['page']);

		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar', $data);
		$this->load->view('administrator/DataBatita/Index', $data);
		$this->load->view('template_administrator/footer');
	}

	public function input_batita()
	{

		$data = $this->user_model->ambil_data($this->session->userdata['username']);
		$data = array(
			'username' => $data->username,
			'id' => $data->id,
			'level' => $data->level,
		);
		$data['title'] = "Input Data klasifikasi";
		
		$data['max_date'] = date("Y-m-d");

		$latih = $this->LatihModel->countData();

		var_dump($latih);
		
		if($latih == 0){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissiblefadeshow"role="alert">
				Data Latih Masih Kosong, Mohon Diisi Data Latih terlebih Dahulu!
				<button type="button"class="close"data-dismiss="alert"aria-label="Close">
				<spanaria-hidden="true">&times;
				</span>
				</button>
				</div>');	
				redirect('administrator/klasifikasi');
		}else{
			$this->load->view('template_administrator/header');
			$this->load->view('template_administrator/sidebar', $data);
			$this->load->view('administrator/DataBatita/Input', $data);
			$this->load->view('template_administrator/footer');
		}
	}

	public function save_batita()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {

			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissiblefadeshow"role="alert">
            Isi data dengan benar !
            <button type="button"class="close"data-dismiss="alert"aria-label="Close">
            <spanaria-hidden="true">&times;
            </span>
            </button>
            </div>');
			redirect('administrator/klasifikasi/input_batita');
		} else {
			$usia_diagnosa = $this->hitung_umur($this->input->post('tanggal_lahir'));
			$diagnosa = $this->diagnosa($this->input->post('berat'), $this->input->post('tinggi'));
			// die();
			$data = array(
				'nama' => $this->input->post('nama', TRUE),
				'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
				'usia_diagnosa' => $usia_diagnosa,
				'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
				'berat' => $this->input->post('berat', TRUE),
				'tinggi' => $this->input->post('tinggi', TRUE),
				'diagnosa' => $diagnosa
			);
			

			$query = $this->Batita_model->insert($data);
			// var_dump($query);
			// die();
			if($query){
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissiblefadeshow"role="alert">
				Data klasifikasi Berhasil Ditambahkan!
				<button type="button"class="close"data-dismiss="alert"aria-label="Close">
				<spanaria-hidden="true">&times;
				</span>
				</button>
				</div>');	
				redirect('administrator/klasifikasi');
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissiblefadeshow"role="alert">
				Data klasifikasi Gagal Ditambahkan!
				<button type="button"class="close"data-dismiss="alert"aria-label="Close">
				<spanaria-hidden="true">&times;
				</span>
				</button>
				</div>');	
				redirect('administrator/klasifikasi');
			}
		}
	}

	public function edit_batita($id)
	{
		$data = $this->user_model->ambil_data($this->session->userdata['username']);
		$data = array(
			'username' => $data->username,
			'id' => $data->id,
			'level' => $data->level,
		);
		$data['title'] = "Edit Batita";
		$data['max_date'] = date("Y-m-d");

		$data['klasifikasi'] = $this->Batita_model->get($id);

		// var_dump($data);
		// die();

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar', $data);
		$this->load->view('administrator/DataBatita/update', $data);
		$this->load->view('template_administrator/footer');
	}

	public function update_batita()
	{
		$this->_rules();

		// var_dump($this->form_validation->run());
		// die();

		if ($this->form_validation->run() == FALSE) {

			$previous_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'default_fallback_url';

			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissiblefadeshow"role="alert">
            Isi data dengan benar !
            <button type="button"class="close"data-dismiss="alert"aria-label="Close">
            <spanaria-hidden="true">&times;
            </span>
            </button>
            </div>');
			redirect($previous_url);
		} else {
			
			$data['max_date'] = date("Y-m-d");
			$usia_diagnosa = $this->hitung_umur($this->input->post('tanggal_lahir'));
			// die();
			$data = array(
				'nama' => $this->input->post('nama', TRUE),
				'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE),
				'usia_diagnosa' => $usia_diagnosa,
				'tanggal_lahir' => $this->input->post('tanggal_lahir', TRUE),
				'berat' => $this->input->post('berat', TRUE),
				'tinggi' => $this->input->post('tinggi', TRUE),
			);

			$query = $this->Batita_model->update($data,$this->input->post('id'));
			// var_dump($query);
			// die();
			if($query){
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissiblefadeshow"role="alert">
				Data klasifikasi Berhasil DiUpdate!
				<button type="button"class="close"data-dismiss="alert"aria-label="Close">
				<spanaria-hidden="true">&times;
				</span>
				</button>
				</div>');	
				redirect('administrator/klasifikasi',$data);
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissiblefadeshow"role="alert">
				Data klasifikasi Gagal DiUpdate!
				<button type="button"class="close"data-dismiss="alert"aria-label="Close">
				<spanaria-hidden="true">&times;
				</span>
				</button>
				</div>');	
				redirect('administrator/klasifikasi');
			}
		}
	}

	public function hapus_batita($id)
	{
		$query = $this->Batita_model->delete($id);

		if ($query) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissiblefadeshow"role="alert">
				Data Latih Berhasil Di Hapus!
				<button type="button"class="close"data-dismiss="alert"aria-label="Close">
				<spanaria-hidden="true">&times;
				</span>
				</button>
				</div>');
			redirect('administrator/klasifikasi');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissiblefadeshow"role="alert">
				Data Latih Gagal Di Hapus!
				<button type="button"class="close"data-dismiss="alert"aria-label="Close">
				<spanaria-hidden="true">&times;
				</span>
				</button>
				</div>');
			redirect('administrator/klasifikasi');
		}
	}

	public function reset_batita()
	{
		$query = $this->Batita_model->reset();
		
		if($query){
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissiblefadeshow"role="alert">
			Data Batita Berhasil Direset!
			<button type="button"class="close"data-dismiss="alert"aria-label="Close">
			<spanaria-hidden="true">&times;
			</span>
			</button>
			</div>');	
			redirect('administrator/klasifikasi');
		}else{
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissiblefadeshow"role="alert">
			Data Batita Gagal Direset!
			<button type="button"class="close"data-dismiss="alert"aria-label="Close">
			<spanaria-hidden="true">&times;
			</span>
			</button>
			</div>');	
			redirect('administrator/klasifikasi');
		}
	}

	// ============ End Batita =================

	// ============= Data Latih ================
	public function data_latih()
	{
		// echo json_encode($this->session->userdata()); die();
		$data = $this->user_model->ambil_data($this->session->userdata['username']);
		$data = array(
			'username' => $data->username,
			'id' => $data->id,
			'level' => $data->level,
		);
		$data['title'] = "Data Latih";


		// menghubungkan controller dengan model yang kita buat
		// $data['biodata'] = $this->biodata_model->tampil_data()->result();
		$id_user = $this->session->userdata('id');

		$data['klasifikasi'] = $this->LatihModel->getAll()->result();

		// var_dump("ini di data_latih", $data);
		// die();

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar', $data);
		$this->load->view('administrator/DataLatih/Index', $data);
		$this->load->view('template_administrator/footer');
	}

	public function input_latih()
	{

		$data = $this->user_model->ambil_data($this->session->userdata['username']);
		$data = array(
			'username' => $data->username,
			'id' => $data->id,
			'level' => $data->level,
		);
		$data['title'] = "Input Data Latih";

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar', $data);
		$this->load->view('administrator/DataLatih/Input', $data);
		$this->load->view('template_administrator/footer');
	}

	public function save_latih()
	{
		$this->data_latih_rules();

		// var_dump($this->input->post());
		// 	die();

		if ($this->form_validation->run() == FALSE) {

			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissiblefadeshow"role="alert">
            Mohon isi Data dengan Benar!
            <button type="button"class="close"data-dismiss="alert"aria-label="Close">
            <spanaria-hidden="true">&times;
            </span>
            </button>
            </div>');
			redirect('administrator/klasifikasi/input_latih');
		} else {
			$data = array(
				'nama' => $this->input->post('nama', TRUE),
				'jenis_kelamin' => $this->input->post('kelamin', TRUE),
				'berat' => $this->input->post('berat', TRUE),
				'tinggi' => $this->input->post('tinggi', TRUE),
				'hasil' => $this->input->post('diagnosa', TRUE),
			);

			$query = $this->LatihModel->insert($data);

			if ($query) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissiblefadeshow"role="alert">
				Data Latih Berhasil Ditambahkan!
				<button type="button"class="close"data-dismiss="alert"aria-label="Close">
				<spanaria-hidden="true">&times;
				</span>
				</button>
				</div>');
				redirect('administrator/klasifikasi/data_latih');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissiblefadeshow"role="alert">
				Data Latih Gagal Ditambahkan!
				<button type="button"class="close"data-dismiss="alert"aria-label="Close">
				<spanaria-hidden="true">&times;
				</span>
				</button>
				</div>');
				redirect('administrator/klasifikasi/data_latih');
			}
		}
	}

	public function edit_latih($id)
	{
		$data = $this->user_model->ambil_data($this->session->userdata['username']);
		$data = array(
			'username' => $data->username,
			'id' => $data->id,
			'level' => $data->level,
		);
		$data['title'] = "Data klasifikasi";

		$id_latih = array('id_klasifikasi' => $id);

		$data['klasifikasi'] = $this->LatihModel->get($id);

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar', $data);
		$this->load->view('administrator/DataLatih/update', $data);
		$this->load->view('template_administrator/footer');
	}

	public function update_latih()
	{
		$this->data_latih_rules();

		// var_dump($this->input->post());
		// 	die();

		if ($this->form_validation->run() == FALSE) {

			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissiblefadeshow"role="alert">
            Mohon isi Data dengan Benar!
            <button type="button"class="close"data-dismiss="alert"aria-label="Close">
            <spanaria-hidden="true">&times;
            </span>
            </button>
            </div>');
			redirect('administrator/klasifikasi/input_latih');
		} else {
			$data = array(
				'nama' => $this->input->post('nama', TRUE),
				'jenis_kelamin' => $this->input->post('kelamin', TRUE),
				'berat' => $this->input->post('berat', TRUE),
				'tinggi' => $this->input->post('tinggi', TRUE),
				'hasil' => $this->input->post('diagnosa', TRUE),
			);
			$id = $this->input->post('id');

			$query = $this->LatihModel->update($data, $id);

			if ($query) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissiblefadeshow"role="alert">
				Data Latih Berhasil Di Update!
				<button type="button"class="close"data-dismiss="alert"aria-label="Close">
				<spanaria-hidden="true">&times;
				</span>
				</button>
				</div>');
				redirect('administrator/klasifikasi/data_latih');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissiblefadeshow"role="alert">
				Data Latih Gagal Di Update!
				<button type="button"class="close"data-dismiss="alert"aria-label="Close">
				<spanaria-hidden="true">&times;
				</span>
				</button>
				</div>');
				redirect('administrator/klasifikasi/data_latih');
			}
		}
	}

	public function hapus_latih($id)
	{
		// die($id);
		$query = $this->LatihModel->delete($id);

		if ($query) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissiblefadeshow"role="alert">
				Data Latih Berhasil Di Hapus!
				<button type="button"class="close"data-dismiss="alert"aria-label="Close">
				<spanaria-hidden="true">&times;
				</span>
				</button>
				</div>');
			redirect('administrator/klasifikasi/data_latih');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissiblefadeshow"role="alert">
				Data Latih Gagal Di Hapus!
				<button type="button"class="close"data-dismiss="alert"aria-label="Close">
				<spanaria-hidden="true">&times;
				</span>
				</button>
				</div>');
			redirect('administrator/klasifikasi/data_latih');
		}
	}

	public function input_batch()
	{
		$data = $this->user_model->ambil_data($this->session->userdata['username']);
		$data = array(
			'username' => $data->username,
			'id' => $data->id,
			'level' => $data->level,
		);
		$data['title'] = "Input Batch Data Latih";

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar', $data);
		$this->load->view('administrator/DataLatih/Batch', $data);
		$this->load->view('template_administrator/footer');
	}

	public function save_batch(){
		// Misalnya, Anda mendapatkan file Excel sebagai data POST dari formulir
		$excelData = $_FILES['batch']['tmp_name'];
		$reader = new Xlsx();
		$spreadsheet = $reader->load($excelData);
		$worksheet = $spreadsheet->getActiveSheet();
		$highestRow = $worksheet->getHighestRow();

		$rowData = array();

		$index = 0;

		for ($row = 2; $row <= $highestRow; $row++) {
			$kelamin = null;

			if($worksheet->getCell('C' . $row)->getValue() == 'P'){
				$kelamin = 'Perempuan';
			}else if($worksheet->getCell('C' . $row)->getValue() == 'L'){
				$kelamin = 'Laki-Laki';
			}

			// Create an associative array
			$data = array(
				'nama' => $worksheet->getCell('B' . $row)->getValue(),
				'jenis_kelamin' => $kelamin,
				'berat' => $worksheet->getCell('D' . $row)->getValue(),
				'tinggi' => $worksheet->getCell('E' . $row)->getValue(),
				'hasil' => $worksheet->getCell('F' . $row)->getValue()
			);
			$rowData[$index] = $data;
			$index++;
		}

		$query = $this->LatihModel->insert_batch($rowData);

		if ($query) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissiblefadeshow"role="alert">
				Data Latih Batch Berhasil Di Tambahkan!
				<button type="button"class="close"data-dismiss="alert"aria-label="Close">
				<spanaria-hidden="true">&times;
				</span>
				</button>
				</div>');
			redirect('administrator/klasifikasi/data_latih');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissiblefadeshow"role="alert">
				Data Latih Batch Gagal Di Tambahkan!
				<button type="button"class="close"data-dismiss="alert"aria-label="Close">
				<spanaria-hidden="true">&times;
				</span>
				</button>
				</div>');
			redirect('administrator/klasifikasi/data_latih');
		}
    }

    public function reset_latih()
	{
		$query = $this->LatihModel->deleteAll();

		if ($query) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissiblefadeshow"role="alert">
				Data Latih Berhasil Di Hapus!
				<button type="button"class="close"data-dismiss="alert"aria-label="Close">
				<spanaria-hidden="true">&times;
				</span>
				</button>
				</div>');
			redirect('administrator/klasifikasi/data_latih');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissiblefadeshow"role="alert">
				Data Latih Gagal Di Hapus!
				<button type="button"class="close"data-dismiss="alert"aria-label="Close">
				<spanaria-hidden="true">&times;
				</span>
				</button>
				</div>');
			redirect('administrator/klasifikasi/data_latih');
		}
	}
	// ================= End Data Latih ================
	
	public function laporan_diagnosa()
	{
		// echo json_encode($this->session->userdata()); die();
		$data = $this->user_model->ambil_data($this->session->userdata['username']);
		$data = array(
			'username' => $data->username,
			'id' => $data->id,
			'level' => $data->level,
		);
		$data['title'] = "Data Batita";
		$data['max_date'] = date("Y-m-d");

		$config['base_url'] = site_url('klasifikasi/index'); //site url
		$config['total_rows'] = $this->db->count_all('mst_batita'); //total row
		$config['per_page'] = 5;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);
		

		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
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
		$data['klasifikasi'] = $this->Batita_model->getDataBatita($config["per_page"], $data['page']);

		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar', $data);
		$this->load->view('administrator/Penghitungan/diagnosa', $data);
		$this->load->view('template_administrator/footer');
	}

	// ================= Penghitungan ==================

	public function hitung_umur($tanggal_lahir)
	{
		// Tanggal lain yang ingin Anda hitung selisihnya
		$otherDate = new DateTime($tanggal_lahir); // Ganti dengan tanggal yang Anda inginkan

		// Tanggal sekarang
		$now = new DateTime();

		// Menghitung selisih antara dua tanggal
		$interval = $now->diff($otherDate);

		// Mendapatkan selisih tahun, bulan, hari, jam, menit, dan detik
		$years = $interval->y;
		$months = $interval->m;
		$days = $interval->d;
		$hours = $interval->h;
		$minutes = $interval->i;
		$seconds = $interval->s;

		return("$years tahun, $months bulan, $days hari");
	}

	public function diagnosa($berat, $tinggi)
	{

		$data = $this->LatihModel->getAll()->result();

		$newData = array();
		foreach ($data as $key => $dr) {
			$newData[$key]['value'] = $dr->hasil;
			$newData[$key]['data'] = sqrt((pow(($berat - $dr->berat), 2)) + (pow(($tinggi - $dr->tinggi), 2)));
		}

		$temp = null;
		$param = 0;
		foreach ($newData as $d) {
			if ($param < $d['data']) {
				$param = $d['data'];
				$temp = $d['value'];
			} else {
				$temp = $d['value'];
			}
		}
		return $temp;
	}
	// ================= End Penhitungan ===============

	public function testing(){
		$data = $this->user_model->ambil_data($this->session->userdata['username']);
		$data = array(
			'username' => $data->username,
			'id' => $data->id,
			'level' => $data->level,
		);
		$data['title'] = "Input Data Latih";

		// $this->load->view('template_administrator/header');
		// $this->load->view('template_administrator/sidebar', $data);
		$this->load->view('administrator/testing');
		// $this->load->view('template_administrator/footer');
	}
}
