<?php
    class Stunting_model extends CI_Model{
        public function tampil_data()
        {
            // memanggil usename dari database
             return $this->db->get('stunting');
        }

        function join2table($id){
            $this->db->select('*');
            $this->db->from('user');
            $this->db->join('stunting','stunting.id_user = user.id');
            $this->db->where('stunting.id_user', $id);      
            $query = $this->db->get();
            return $query;
         }

    public function input_data($data)
        {
            // insert data ke tabel jurusan
             $this->db->insert('stunting',$data);
        }
        public function edit_data($where,$table)
            {
        // untuk menampilkan data dari tabel text, karena datanya sudah di input sebelumnya
            return $this->db->get_where($table,$where);
            }
        public function update_data($where,$data,$table)
            {
            $this->db->where($where);
            $this->db->update($table,$data);
            }
            public function hapus_data($where,$table)
            {
            $this->db->where($where);
            $this->db->delete($table);
            }

           
        public function search($keyword){
                $this->db->select('*');
                $this->db->from('stunting');
                $this->db->like('nama',$keyword);
                $this->db->or_like('nisn',$keyword);
                return $this->db->get()->result();
            }

            public function cari()
            {
                $cari = $this->input->GET('cari', TRUE);
                $data = $this->db->query("SELECT * from stunting where nama like '%$cari%' ");
                return $data->result();
            }

            public function show_hadir(){
                $this->db->select('*');
                $this->db->from('stunting');
                $this->db->where('status','Hadir');
                return $this->db->get();
            }

            function get_mahasiswa_list($limit, $start){
                $query = $this->db->get('stunting', $limit, $start);
                return $query;
            }

            public function reset()
            {
                $this->db->query("DELETE from stunting ");

            }

            public function caritahun()
            {
                $tanggal = $this->input->GET('tanggal', TRUE);
                $this->db->select('*');
                $this->db->from('stunting');
                $this->db->where('tanggal',$tanggal);
                // $this->db->like($cari);
                $data = $this->db->get();
                return $data->result();
            }

            public function carit()
            {
                $cari = $this->input->GET('cari', TRUE);
                $data = $this->db->query("SELECT * from stunting where tanggal like '%$cari%' ");
                return $data->result();
            }
  
    }