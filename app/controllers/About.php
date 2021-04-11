<?php
class About {
    public function index($nama = 'Keqing', $aksi = 'cium') {
        echo "$nama wangy sekali, aku ingin $aksi $nama";
    }

    public function page() {
        echo 'About/page';
    }
}