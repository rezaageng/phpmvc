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

    public function hapus($id)
    {
        if ($this->model('Waifu_model')->hapusDataWaifu($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'warning');
            header('Location: ' . BASEURL. '/waifu');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL. '/waifu');
            exit;
        }
    }

    public function getUbah()
    {
        echo json_encode($this->model('Waifu_model')->getWaifuById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Waifu_model')->ubahDataWaifu($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubahkan', 'success');
            header('Location: ' . BASEURL. '/waifu');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubahkan', 'danger');
            header('Location: ' . BASEURL. '/waifu');
            exit;
        }
    }

    public function cari() {
        $data['judul'] = 'Daftar Waifu';
        $data['wfu'] = $this->model('Waifu_model')->cariWaifu();

        $this->view('templates/header', $data);
        $this->view('waifu/index', $data);
        $this->view('templates/footer');
    }
}