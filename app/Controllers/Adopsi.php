<?php

namespace App\Controllers;

use App\Models\Identitas_kucingModel;

class Adopsi extends BaseController
{
    protected $identitas_kucing;
    public function __construct()
    {
        $this->identitas_kucingModel = new Identitas_kucingModel();
    }
    public function mauadopsi()
    {

        $data = [
            'identitas_kucing' => $this->identitas_kucingModel->getIdentitas_kucing()
        ];

        return view('Adopsi/mauadopsi', $data);
    }

    public function detail($slug)
    {
        $data = [
            'identitas_kucing' => $this->identitas_kucingModel->getIdentitas_kucing($slug)
        ];

        //kalau kucing tidak ada
        if (empty($data['identitas_kucing'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama kucing ' . $slug . ' tidak ditemukan');
        }

        return view('Adopsi/profilekucing', $data);
    }

    public function caripengadopsi()
    {

        return view('Adopsi/caripengadopsi');
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('Nama_kucing'), '-', true);
        $this->identitas_kucingModel->save([
            'Nama_kucing' => $this->request->getVar('Nama_kucing'),
            'slug' => $slug,
            'Gender' => $this->request->getVar('Gender'),
            'Jenis_Kucing' => $this->request->getVar('Jenis_Kucing'),
            'Perkiraan_Umur' => $this->request->getVar('Perkiraan_Umur'),
            'Domisili' => $this->request->getVar('Domisili'),
            'Deskripsi' => $this->request->getVar('Deskripsi'),
            'Foto' => $this->request->getVar('Foto')
        ]);

        session()->setFlashdata('pesan', 'Semoga ada orang baik yang mau adopsi kucing kamu secepatnya yaa, Terimakasih sudah mau berpartisipasi');

        return redirect()->to('/caripengadopsi');
    }
}