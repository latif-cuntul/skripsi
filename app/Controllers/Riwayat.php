<?php namespace App\Controllers;

use App\Models\Riwayat_Model;

class Riwayat extends BaseController
{
    public function __construct()
    {
        $this->riwayat = new Riwayat_Model();
    }
    public function index()
    {
        session()->set(['url' => "riwayat"]);
        $this->riwayat->select('riwayat_kd');
        $this->riwayat->groupBy('riwayat_kd');
        $this->riwayat->orderBy('riwayat_kd', 'DESC'); // sing terbaru neng duwur dewe
        $dt['riwayat'] = $this->riwayat->get()->getResultArray();

        return view('riwayat', $dt);
    }

    public function show($id)
    {
        session()->set(['url' => "riwayat"]);

        $this->riwayat->select(['riwayat_kd', 'produk_nama', 'jumlah_produk', 'support', 'confiden', 'tgl_mulai', 'tgl_selesai']);
        $this->riwayat->where('riwayat_kd', $id);
        $this->riwayat->orderBy('jumlah_produk', 'DESC'); // sing terbaru neng duwur dewe
        $dt['kd_mining'] = $id;
        $dt['riwayat'] = $this->riwayat->get()->getResultArray();

        return view('detail_riwayat', $dt);
    }
    public function delete($id)
    {
        $this->riwayat->where('riwayat_kd', $id);
        $this->riwayat->delete();
        return redirect()->to(base_url() . '/riwayat');
        // return redirect()->to('riwayat');
        // return view('riwayat', $dt);
    }
    public function destroy()
    {
        $this->riwayat->truncate();
    }
    //--------------------------------------------------------------------

}
