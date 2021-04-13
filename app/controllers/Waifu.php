<?php
class Waifu extends Controller {
    public function index() {
        $data['judul'] = 'Waifu';
        $data['wfu'] = $this->model('Waifu_model')->getAllWaifu();

        $this->view('templates/header', $data);
        $this->view('waifu/index', $data);
        $this->view('templates/footer');
    }
}