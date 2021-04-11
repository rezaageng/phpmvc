<?php
class About extends Controller {
    public function index($nama = 'Keqing', $aksi = 'cium', $jumlah = 5) {
        $data['nama'] = $nama;
        $data['aksi'] = $aksi;
        $data['jumlah'] = $jumlah;
        $data['judul'] = 'About Index';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page() {
        $data['judul'] = 'About Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}