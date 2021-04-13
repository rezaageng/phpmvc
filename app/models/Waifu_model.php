<?php
class Waifu_model {
    private $table = 'waifu', $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllWaifu() 
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getWaifuById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataWaifu($data)
    {
        $query = "INSERT INTO waifu VALUES ('', :nama, :nis, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataWaifu($id)
    {
        $query = "DELETE FROM waifu WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
}