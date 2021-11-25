<?php
 class Tokosepatu extends CI_Controller
 {
    public function index()
    {
        $this->load->view('view-form-tokosepatu');
    }

    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'nama',
            'required|min_length[3]',
            [
                'required' => 'Nama Harus Di isi',
                'min_length' => 'Nama terlalu pendek'
            ]
        
        );
        
        $this->form_validation->set_rules(
            'no',
            'no hp',
            'required|min_length[11]',
            [
                'required' => 'No HP Harus diisi',
                'min_length' => 'No HP terlalu pendek'
            ]
        
        );

        public function cetak()
    {
        $this->form_validation->set_rules(
            'tanggal',
            'tanggal masuk sepatu',
            'required|min_length[3]',
            [
                'required' => 'Tanggal Masuk Sepatu Harus diisi',
                'min_length' => 'Tanggal Masuk Sepatu tidak sesuai  '
            ]
        
        );

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-nyuciinaja');
        } else {

            $data = [
                'nama' => $this->input->post('nama'),
                'no' => $this->input->post('no'),
                'treatment' => $this->input->post('treatment'),
                'harga' => $this->input->post('harga'),
            ];

            if ($this->input->post('treatment') == 'Fast Cleaning') {
                $data['harga'] = 25000;
            } elseif ($this->input->post('treatment') == 'DeepCleaning') {
                $data['harga'] = 35000;
            } elseif ($this->input->post('treatment') == 'UnyellowingCleaning') {
                $data['harga'] = 50000;
            } elseif ($this->input->post('treatment') == 'OtherCleaning') {
                $data['harga'] = 0;
            } 

            $this->load->view('view-data-nyuciinaja' , $data);
        }
    }
}