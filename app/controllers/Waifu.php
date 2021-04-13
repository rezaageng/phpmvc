<?php
class Waifu extends Controller {
    public function index() {
        $data['judul'] = 'Daftar Waifu';
        $data['wfu'] = $this->model('Waifu_model')->getAllWaifu();

        $this->view('templates/header', $data);
        $this->view('waifu/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = 'Detail Waifu';
        $data['wfu'] = $this->model('Waifu_model')->getWaifuByID($id);

        $this->view('templates/header', $data);
        $this->view('waifu/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Waifu_model')->tambahDataWaifu($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL. '/waifu');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL. '/waifu');
            exit;
        }
    }
}