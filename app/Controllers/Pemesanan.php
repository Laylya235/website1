<?php namespace App\Controllers;

use App\Models\PemesananModel;

class Pemesanan extends BaseController
{
    protected $pemesananModel;

    public function __construct()
    {
        $this->pemesananModel = new PemesananModel();
    }

    // Tampilkan semua data pemesanan
    public function index()
    {
        $data['pemesanan'] = $this->pemesananModel->findAll();
        return view('pemesanan/index', $data);
    }

    // Tampilkan form tambah data
    public function create()
    {
        return view('pemesanan/create');
    }

    // Proses simpan data baru
    public function store()
    {
        // Validasi input
        $rules = [
            'no_rm' => 'required',
            'nama_pasien' => 'required',
            'jk_kelamin' => 'required',
            'umur' => 'required|integer',
            'tanggal_masuk' => 'required|valid_date',
            'status_px' => 'required',
            'cara_bayar' => 'required',
            'cara_keluar' => 'required',
            'id_bangsal' => 'required|integer',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->pemesananModel->save($this->request->getPost());
        return redirect()->to('/pemesanan')->with('success', 'Data berhasil ditambahkan');
    }

    // Tampilkan form edit data
    public function edit($id)
    {
        $data['pemesanan'] = $this->pemesananModel->find($id);
        if (!$data['pemesanan']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan');
        }
        return view('pemesanan/edit', $data);
    }

    // Proses update data
    public function update($id)
    {
        $rules = [
            'no_rm' => 'required',
            'nama_pasien' => 'required',
            'jk_kelamin' => 'required',
            'umur' => 'required|integer',
            'tanggal_masuk' => 'required|valid_date',
            'status_px' => 'required',
            'cara_bayar' => 'required',
            'cara_keluar' => 'required',
            'id_bangsal' => 'required|integer',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->pemesananModel->update($id, $this->request->getPost());
        return redirect()->to('/pemesanan')->with('success', 'Data berhasil diupdate');
    }

    // Hapus data
    public function delete($id)
    {
        $this->pemesananModel->delete($id);
        return redirect()->to('/pemesanan')->with('success', 'Data berhasil dihapus');
    }
}
