<?php



class MasyarakatModel extends CI_model
{
    private $table = 'masyarakat';
    private $db;
    public function __construct() {
        parent::__construct();
    }
    public function ambilSemuaDataMasyarakat()
    {
        $query = 'SELECT * FROM '. $this->table;
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function ambilDataMasyarakatNIK($nik)
    {
        $query = 'SELECT * FROM '. $this->table .' WHERE nik=:nik';
        $this->db->query($query);
        $this->db->bind('nik', $nik);
        $this->db->execute();
        return $this->db->single();
    }
    public function editDataMasyarakatNIK($nik)
    {
        $query = '';
        $this->db->query($query);
        $this->db->bind('nik', $nik);
        $this->db->execute();
        return $this->db->single();
    }
    public function hapusDataMasyarakatNIK($nik)
    {
        $query = 'DELETE FROM '. $this->table .' WHERE nik=:nik';
        $this->db->query($query);
        $this->db->bind('nik', $nik);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function tambahMasyarakat($data){
       
        $nik = $data['nik'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $username = $data['username'];
        $pass = $data['password'];
        $telp = $data['telp'];
        
    }

}
