<?php namespace App\Models;
use CodeIgniter\Model;
class Riwayat_Model extends Model
{
	protected $table = 'riwayat_mining';
	protected $primaryKey = 'id';
	protected $allowedFields =['produk_nama','jumlah_produk', 'tgl_mulai', 'tgl_selesai'];

	public function simpan($data){
		return $this->db->table($this->table)->insertBatch($data);
	}
	public function tampil(){
		return $this->db->table($this->table)->get()->getResultArray();
    }
    public function hapusSemua(){
        return $this->db->table($this->table)->truncate();
    }
}