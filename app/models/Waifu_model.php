<?php
class Waifu_model {
    private $table = 'waifu', $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllWaifu() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getWaifuById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}