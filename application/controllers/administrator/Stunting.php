<?php class Stunting extends CI_Controller{

function __construct(){
    parent::__construct();
    $this->load->library('pagination');
    $this->load->helper('url');
    if (!isset($this->session->userdata['username'])) {
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alertdismissible fade show" role="alert"> Anda Belum Login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('administrator/auth');
        }
        }

public function index() {

    // echo json_encode($this->session->userdata()); die();
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
        'username' => $data->username,
        'id' => $data->id,
        'level' => $data->level,);
    $data['title'] = "Data Stunting";
    
        $config['base_url'] = site_url('stunting/index'); //site url
        $config['total_rows'] = $this->db->count_all('stunting'); //total row
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
        $data['stunting'] = $this->stunting_model->get_mahasiswa_list($config["per_page"], $data['page']);           
    
        $data['pagination'] = $this->pagination->create_links();

    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    $this->load->view('administrator/stunting',$data);
    $this->load->view('template_administrator/footer');

}

public function ibu()
{
    // echo json_encode($this->session->userdata()); die();
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
        'username' => $data->username,
        'id' => $data->id,
        'level' => $data->level,);
        $data['title'] = "Data stunting";

    
// menghubungkan controller dengan model yang kita buat
    // $data['biodata'] = $this->biodata_model->tampil_data()->result();
    $id_user = $this->session->userdata('id');
    
    $data['stunting'] = $this->stunting_model->join2table($id_user)->result();

    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    $this->load->view('administrator/stunting_ibu',$data);
    $this->load->view('template_administrator/footer');

}

public function laporan()
{
    // echo json_encode($this->session->userdata()); die();
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
        'username' => $data->username,
        'id' => $data->id,
        'level' => $data->level,);
        $data['title'] = "Data stunting";

    
// menghubungkan controller dengan model yang kita buat
    // $data['biodata'] = $this->biodata_model->tampil_data()->result();
    $id_user = $this->session->userdata('id');
    
    $data['stunting'] = $this->stunting_model->tampil_data()->result();

    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    $this->load->view('administrator/laporan',$data);
    $this->load->view('template_administrator/footer');

}

public function informasi(){

    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
        'username' => $data->username,
        'id' => $data->id,
        'level' => $data->level,);
    $data['title'] = "Informasi Stunting";

    
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    //memanggilView,namunkitamenambahkan$datauntukmembawadatadarimodelkedalamView,sehingga$datadalamviewmerupakansebuaharrayyangberisidatadarimodel
    
    $this->load->view('administrator/informasi',$data);
    $this->load->view('template_administrator/footer');
}
    
    public function input(){

        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'id' => $data->id,
            'level' => $data->level,);
        $data['title'] = "Input Data Stunting";

        
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar',$data);
        //memanggilView,namunkitamenambahkan$datauntukmembawadatadarimodelkedalamView,sehingga$datadalamviewmerupakansebuaharrayyangberisidatadarimodel
        
        $this->load->view('administrator/input_stunting',$data);
        $this->load->view('template_administrator/footer');
    }
    
    public function input_aksi(){$this->_rules();
        
        if ($this->form_validation->run()==FALSE){
            
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissiblefadeshow"role="alert">
            Isi data dengan benar !
            <button type="button"class="close"data-dismiss="alert"aria-label="Close">
            <spanaria-hidden="true">&times;
            </span>
            </button>
            </div>');
            redirect('administrator/stunting/input');
        
        }else{$data=array(

            'id_user'=>$this->input->post('id_user',TRUE),
            'ibu'=>$this->input->post('ibu',TRUE),
            'nama'=>$this->input->post('nama',TRUE),
            'nik'=>$this->input->post('nik',TRUE),
            'umur'=>$this->input->post('umur',TRUE),
            'kelamin'=>$this->input->post('kelamin',TRUE),
            'berat'=>$this->input->post('berat',TRUE),
            'tinggi'=>$this->input->post('tinggi',TRUE),
            'imt'=>$this->input->post('imt',TRUE),
        );
            
            $this->stunting_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissiblefadeshow"role="alert">
            Data Stunting Berhasil Ditambahkan!
            <button type="button"class="close"data-dismiss="alert"aria-label="Close">
            <spanaria-hidden="true">&times;
            </span>
            </button>
            </div>');
            redirect('administrator/stunting');
        }
    }
    public function _rules(){
    $this->form_validation->set_rules('nama','nama','required',['required'=>'Nama wajib di isi!']);
    $this->form_validation->set_rules('nik','nik','required',['required'=>'NIK wajib di isi!']);
    $this->form_validation->set_rules('umur','umur','required',['required'=>'Umur wajib di isi!']);
    $this->form_validation->set_rules('berat','berat','required',['required'=>'Berat Badan wajib di isi!']);
    $this->form_validation->set_rules('tinggi','tinggi','required',['required'=>'Tinggi Badan wajib di isi!']);
    }

public function update($id){
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
        'username' => $data->username,
        'id' => $data->id,
        'level' => $data->level,);
    $data['title'] = "Data Stunting";

    $where=array('id_stunting'=>$id);
    $data['stunting']=$this->stunting_model->edit_data($where,'stunting')->result();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    $this->load->view('administrator/update_stunting',$data);
    $this->load->view('template_administrator/footer');
    }

public function update_aksi()
    {//menangkapdatayangdimasukkankedalamjurusan_update
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'level' => $data->level,);

    $id=$this->input->post('id_stunting');
    //methodpostuntukmengambildata
    $nama=$this->input->post('nama');
    $nik=$this->input->post('nik');
    $umur=$this->input->post('umur');
    $kelamin=$this->input->post('kelamin');
    $tinggi=$this->input->post('tinggi');
    $berat=$this->input->post('berat');
    $beratbadan=$this->input->post('beratbadan');
    $imt=$this->input->post('imt');
    //masukkankedalamvariabeldatakemudianmasukkedalamarray
    $data=array('nama'=>$nama,'nik'=>$nik,'umur'=>$umur,'kelamin'=>$kelamin,'berat'=>$berat,'tinggi'=>$tinggi,'beratbadan'=>$beratbadan,'imt'=>$imt);
    //variabelwhereuntukmengubahidnyamenjadiarray
    $where=array('id_stunting'=>$id);
    //masukkandatakedalamtabeljurusanmelaluijurusan_model//update_datamerupakanfunctiondarijurusan_model
    $this->stunting_model->update_data($where,$data,'stunting');
    $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show"role="alert">Data Stunting Berhasil Update!
    <button type="button"class="close"data-dismiss="alert"aria-label="Close">
    <span aria-hidden="true">&times;</span></button></div>');
    redirect('administrator/stunting');
    }

    public function bbu()
    {
        // echo json_encode($this->session->userdata()); die();
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'id' => $data->id,
            'level' => $data->level,);
            $data['title'] = "Data Berat Badan";
    
        
    // menghubungkan controller dengan model yang kita buat
        // $data['biodata'] = $this->biodata_model->tampil_data()->result();
        $id_user = $this->session->userdata('id');
        
        $data['stunting'] = $this->stunting_model->tampil_data()->result();
    
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar',$data);
        $this->load->view('administrator/bbu',$data);
        $this->load->view('template_administrator/footer');
    
    }

    public function pbu()
    {
        // echo json_encode($this->session->userdata()); die();
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'id' => $data->id,
            'level' => $data->level,);
            $data['title'] = "Data Panjang / Tinggi Badan";
    
        
    // menghubungkan controller dengan model yang kita buat
        // $data['biodata'] = $this->biodata_model->tampil_data()->result();
        $id_user = $this->session->userdata('id');
        
        $data['stunting'] = $this->stunting_model->tampil_data()->result();
    
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar',$data);
        $this->load->view('administrator/pbu',$data);
        $this->load->view('template_administrator/footer');
    
    }

    public function imtu()
    {
        // echo json_encode($this->session->userdata()); die();
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'id' => $data->id,
            'level' => $data->level,);
            $data['title'] = "Data Indeks Masa Tubuh (IMT)";
    
        
    // menghubungkan controller dengan model yang kita buat
        // $data['biodata'] = $this->biodata_model->tampil_data()->result();
        $id_user = $this->session->userdata('id');
        
        $data['stunting'] = $this->stunting_model->tampil_data()->result();
    
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar',$data);
        $this->load->view('administrator/imtu',$data);
        $this->load->view('template_administrator/footer');
    
    }

    public function bbpb()
    {
        // echo json_encode($this->session->userdata()); die();
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'id' => $data->id,
            'level' => $data->level,);
            $data['title'] = "Data Berat Badan Menurut Panjang Badan / Berat Badan";
    
        
    // menghubungkan controller dengan model yang kita buat
        // $data['biodata'] = $this->biodata_model->tampil_data()->result();
        $id_user = $this->session->userdata('id');
        
        $data['stunting'] = $this->stunting_model->tampil_data()->result();
    
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar',$data);
        $this->load->view('administrator/bbpb',$data);
        $this->load->view('template_administrator/footer');
    
    }

    public function laporan_diagnosa()
    {
        // echo json_encode($this->session->userdata()); die();
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'id' => $data->id,
            'level' => $data->level,);
            $data['title'] = "Data Berat Badan Menurut Panjang Badan / Berat Badan";
    
        
    // menghubungkan controller dengan model yang kita buat
        // $data['biodata'] = $this->biodata_model->tampil_data()->result();
        $id_user = $this->session->userdata('id');
        
        $data['stunting'] = $this->stunting_model->tampil_data()->result();
    
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar',$data);
        $this->load->view('administrator/hasil',$data);
        $this->load->view('template_administrator/footer');
    
    }

    public function diagnosa($id){
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'id' => $data->id,
            'level' => $data->level,);
        $data['title'] = "Diagnosa";
    
        $where=array('id_stunting'=>$id);
        $data['stunting']=$this->stunting_model->edit_data($where,'stunting')->result();
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar',$data);
        $this->load->view('administrator/diagnosa',$data);
        $this->load->view('template_administrator/footer');
        }
    
    public function diagnosabbu($id){
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'id' => $data->id,
            'level' => $data->level,);
        $data['title'] = "Diagnosa";
        
        $where=array('id_stunting'=>$id);
        $data['stunting']=$this->stunting_model->edit_data($where,'stunting')->result();
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar',$data);
        $this->load->view('administrator/diagnosabbu',$data);
        $this->load->view('template_administrator/footer');
        }

    public function diagnosapbu($id){
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'id' => $data->id,
            'level' => $data->level,);
        $data['title'] = "Diagnosa";
        
        $where=array('id_stunting'=>$id);
        $data['stunting']=$this->stunting_model->edit_data($where,'stunting')->result();
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar',$data);
        $this->load->view('administrator/diagnosapbu',$data);
        $this->load->view('template_administrator/footer');
        }

    public function diagnosabbpb($id){
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'id' => $data->id,
            'level' => $data->level,);
        $data['title'] = "Diagnosa";
        
        $where=array('id_stunting'=>$id);
        $data['stunting']=$this->stunting_model->edit_data($where,'stunting')->result();
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar',$data);
        $this->load->view('administrator/diagnosabbpb',$data);
        $this->load->view('template_administrator/footer');
        }

    public function diagnosaimtu($id){
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'id' => $data->id,
            'level' => $data->level,);
        $data['title'] = "Diagnosa";
        
        $where=array('id_stunting'=>$id);
        $data['stunting']=$this->stunting_model->edit_data($where,'stunting')->result();
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar',$data);
        $this->load->view('administrator/diagnosaimtu',$data);
        $this->load->view('template_administrator/footer');
        }

    public function delete($id)
    {
        $where=array('id_stunting'=>$id);
        $this->stunting_model->hapus_data($where,'stunting');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show"role="alert">Data Stunting Berhasil Dihapus!
        <button type="button"class="close"data-dismiss="alert"aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/stunting');
    }

    public function hasil()
    {
        $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
        $data1 = array(
            'username' => $data1->username,
            'level' => $data1->level,);

            $data1['title'] = "Data stunting";

        $data2['cari'] = $this->stunting_model->cari();
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar',$data1);
        $this->load->view('administrator/stunting_cari', $data2);
        $this->load->view('template_administrator/footer');

    }

    public function reset()
    {

        $this->stunting_model->reset();
        $this->session->set_flashdata('pesan1','<div class="alert alert-danger alertdismissible fade show" role="alert">Data Status Berhasil Direset!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/stunting');
    }

    public function export_excel(){
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'level' => $data->level,);
    
            $data = array( 'title' => 'Rekap_Data_stunting',
            'stunting' => $this->excel_model->listing());
     $this->load->view('administrator/laporan_excel',$data);
     }

     public function hasil_tahun()
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
        $data1['title'] = "Data stunting";
        $data2 = array( 'title' => 'Rekap_stunting');
    $data2['cari'] = $this->stunting_model->carit();


    $this->load->view('administrator/tahun_cari', $data2);

}

public function cetak_tahun($id){
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
        'username' => $data->username,
        'level' => $data->level,);
        $data1 = array( 'title' => 'Rekap_stunting');
        $where = array('id_stunting' => $id);
        $data1['stunting'] = $this->stunting_model->edit_data($where,'stunting')->result();

    $this->load->view('administrator/cetak_stunting',$data1);
}

}