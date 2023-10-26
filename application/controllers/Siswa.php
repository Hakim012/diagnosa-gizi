<?php
class Siswa extends CI_Controller{

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

public function index()
{
    // echo json_encode($this->session->userdata()); die();
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
        'username' => $data->username,
        'id' => $data->id,
        'level' => $data->level,);
    $data['title'] = "Data Siswa";
    
        $config['base_url'] = site_url('siswa/index'); //site url
        $config['total_rows'] = $this->db->count_all('siswa'); //total row
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
        $data['siswa'] = $this->siswa_model->get_mahasiswa_list($config["per_page"], $data['page']);           
    
        $data['pagination'] = $this->pagination->create_links();

    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    $this->load->view('administrator/siswa',$data);
    $this->load->view('template_administrator/footer');

}


public function input(){
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'id' => $data1->id,
        'level' => $data1->level,);
    $data = array(
    'id_siswa' => set_value('id_siswa'),
    'nama' => set_value('nama'),
    'nisn' => set_value('nisn'),
    'jurusan' => set_value('jurusan'),
    'kelamin' => set_value('kelamin'),
    'tgl_lahir' => set_value('tgl_lahir'),
    'tempat_lahir' => set_value('tempat_lahir'),
    'kelas' => set_value('kelas'),
    'alamat' => set_value('alamat'),
    'no_hp' => set_value('no_hp'),
    'foto' => set_value('foto'),);
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    // memanggil View, namun kita menambahkan $data untuk membawa data dari model ke dalam View, sehingga $data dalam view merupakan sebuah array yang berisi data dari model
    $this->load->view('administrator/tambah_siswa',$data);
    $this->load->view('template_administrator/footer');
}


public function aksi_upload(){
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'id' => $data1->id,
        'level' => $data1->level,);

    $data['siswa'] = $this->siswa_model->tampil_data()->result();
    
    $config['upload_path']          = 'upload/siswa/';
    $config['allowed_types']        = 'gif|jpg|png|docx|pdf';
    // $config['max_size']             = ;
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    // memanggil View, namun kita menambahkan $data untuk membawa data dari model ke dalam View, sehingga $data dalam view merupakan sebuah array yang berisi data dari model
    $this->load->view('administrator/tambah_siswa',$config);
    $this->load->view('template_administrator/footer');


    $upload_gambar1 = $this->upload->do_upload('foto');
    $data['error'] = [];
    if ($upload_gambar1){
        
        $nama_file1 = $this->upload->data('file_name');

                    $datasimpan = [

                        'foto'=> $nama_file1,
                        'nama'=> $this->input->post('nama', TRUE),
                        'nisn'=> $this->input->post('nisn', TRUE),
                        'jurusan'=> $this->input->post('jurusan', TRUE),
                        'id_siswa'=> $this->input->post('id_siswa', TRUE),
                        'kelas'=> $this->input->post('kelas', TRUE),
                        'kelamin'=> $this->input->post('kelamin', TRUE),
                        'agama'=> $this->input->post('agama', TRUE),
                        'tgl_lahir'=> $this->input->post('tgl_lahir', TRUE),
                        'tempat_lahir'=> $this->input->post('tempat_lahir', TRUE),
                        'alamat'=> $this->input->post('alamat', TRUE),
                        'no_hp'=> $this->input->post('no_hp', TRUE),


                    ];
                    $this->siswa_model->input_data($datasimpan);
                    $this->session->set_flashdata('pesan1','<div class="alert alert-success alertdismissible fade show" role="alert">Data Siswa Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                    redirect('siswa'); 

    }else{
        $this->session->set_flashdata('input','<div class="alert alert-danger alertdismissible fade show" role="alert">Isi Data Dengan Benar!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

    }
    redirect('siswa/input');
}


public function _rules()
{
    $this->form_validation->set_rules('nama','nama','required',['required' => 'Nama wajib diisi!']);
    $this->form_validation->set_rules('alamat','alamat','required',['required' => 'Alamat wajib diisi!']);
    $this->form_validation->set_rules('email','email','required',['required' => 'Email wajib diisi!']);
    $this->form_validation->set_rules('no_hp','no_hp','required',['required' => 'No Hp wajib diisi!']);
}

public function update($id){
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    $where = array('id_siswa' => $id);
    $data['siswa'] = $this->siswa_model->edit_data($where,'siswa')->result();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/update_siswa',$data);
    $this->load->view('template_administrator/footer');
}

public function update_aksi()
    {//menangkapdatayangdimasukkankedalamjurusan_update
        $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
        $data1 = array(
        'username' => $data1->username,
        'id' => $data1->id,
        'level' => $data1->level,);
        
        $data['siswa'] = $this->siswa_model->tampil_data()->result();
        
        $config['upload_path']          = 'upload/siswa/';
        $config['allowed_types']        = 'gif|jpg|png|docx|pdf';
        // $config['max_size']             = ;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
    
        $this->load->library('upload', $config);
    
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar',$data1);
        // memanggil View, namun kita menambahkan $data untuk membawa data dari model ke dalam View, sehingga $data dalam view merupakan sebuah array yang berisi data dari model
        $this->load->view('administrator/update_siswa',$config);
        $this->load->view('template_administrator/footer');

    $id_siswa=$this->input->post('id_siswa');
    //methodpostuntukmengambildata
    $nama=$this->input->post('nama');
    $nisn=$this->input->post('nisn');
    $jurusan=$this->input->post('jurusan');
    $kelas=$this->input->post('kelas');
    $kelamin=$this->input->post('kelamin');
    $agama=$this->input->post('agama');
    $tgl_lahir=$this->input->post('tgl_lahir');
    $tempat_lahir=$this->input->post('tempat_lahir');
    $alamat=$this->input->post('alamat');
    $no_hp=$this->input->post('no_hp');
    
    
    $upload_gambar1 = $this->upload->do_upload('foto');
        $data['error'] = [];
        if ($upload_gambar1){
            
            $nama_file1 = $this->upload->data('file_name');

                    $datasimpan = [

                        'foto'=> $nama_file1,
                        'nama'=> $nama,
                        'nisn'=> $nisn,
                        'jurusan'=> $jurusan,
                        'kelas'=> $kelas,
                        'kelamin'=> $kelamin,
                        'agama'=> $agama,
                        'tgl_lahir'=> $tgl_lahir,
                        'tempat_lahir'=> $tempat_lahir,
                        'alamat'=> $alamat,
                        'no_hp'=> $no_hp,

                    ];
                    
                    $where = array ('id_siswa' => $id_siswa );
                    $this->siswa_model->update_data($where,$datasimpan,'siswa');
                    $this->session->set_flashdata('pesan1','<div class="alert alert-success alert-dismissiblefadeshow"role="alert">
                    Data Siswa Berhasil Di Update!
                    <button type="button"class="close"data-dismiss="alert"aria-label="Close">
                    <spanaria-hidden="true">&times;
                    </span>
                    </button>
                    </div>');
                    redirect('administrator/siswa'); 

        }else{
            $data['error']['foto'] = $this->upload->display_errors();
            
        }
    $this->session->set_flashdata('pesan1','<div class="alert alert-danger alert-dismissiblefadeshow"role="alert">
    Data Siswa Gagal Di Update!
    <button type="button"class="close"data-dismiss="alert"aria-label="Close">
    <spanaria-hidden="true">&times;
    </span>
    </button>
    </div>');

    redirect('siswa');
}

public function delete($id)
{
$where = array ('id_siswa' => $id);
$this->siswa_model->hapus_data($where,'siswa');
$this->session->set_flashdata('pesan','<div class="alert alert-danger alertdismissible fade show" role="alert">Data Siswa Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
redirect('siswa');
}


public function hasil()
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/siswa_cari', $data2);
    $this->load->view('template_administrator/footer');

}

public function export_excel(){
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
        'username' => $data->username,
        'level' => $data->level,);

        $data = array( 'title' => 'Rekap_Siswa_Tidak_Hadir',
        'siswa' => $this->excel_model->listing());
 $this->load->view('administrator/laporan_excel',$data);
 }

}
