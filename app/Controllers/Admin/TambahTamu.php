<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TamuModel;

class TambahTamu extends BaseController
{

  public function index()
  {
    $session = session();
    $data = [
      'title' => 'Tambah Tamu',
      'validation' => \Config\Services::validation(),
      'nama_admin' => $session->get('nama_admin')
    ];
    return view('pages/v_tambahtamu', $data);
  }

  public function saveTamu()
  {
    helper(['form']);
    $rules = [
      'nama_tamu' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Nama tamu wajib diisi'
        ]
      ],
      'nama_penemu' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Nama penemu wajib diisi',
        ]
      ],
      'nomor_identitas_tamu' => [
        'rules' => 'required|numeric|max_length[20]',
        'errors' => [
          'required' => 'Nomor identitas tamu wajib diisi',
          'numeric' => 'Nomor identitas tamu harus berupa angka',
          'max_length' => 'Nomor identitas tamu maksimal 20 angka'
        ]
      ],
      'keperluan_tamu' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Keperluan tamu wajib diisi'
        ]
      ],
      'alamat_tamu' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Alamat tamu wajib diisi'
        ]
      ],
      'tanggal_kunjungan_tamu' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'Tanggal kunjungan tamu wajib diisi'
        ]
      ],
      'foto' => [
        'rules' => 'is_image[foto]|mime_in[foto,image/jpg,image/png,image/jpeg]',
        'erros' => [
          'is_image' => 'Foto yang anda pilih bukan gambar',
          'mime_in' => 'Foto harus bertipe PNG/JPG/JPEG'
        ]
      ]
    ];

    if ($this->validate($rules)) {
      $tamuModel = new TamuModel();
      
      // file foto
      $fileFoto = $this->request->getFile('foto');
      if ($fileFoto->getError() == 4) {
        $namaFoto = 'default.png';
      } else {
        $namaFoto = $fileFoto->getRandomName();
        $fileFoto->move('upload', $namaFoto);
      }

      $status = 'CHECK-IN';

      $data = [
        'nama_tamu' => $this->request->getVar('nama_tamu'),
        'nama_penemu' => $this->request->getVar('nama_penemu'),
        'nomor_identitas_tamu' => $this->request->getVar('nomor_identitas_tamu'),
        'alamat_tamu' => $this->request->getVar('alamat_tamu'),
        'keperluan_tamu' => $this->request->getVar('keperluan_tamu'),
        'tanggal_kunjungan_tamu' => $this->request->getVar('tanggal_kunjungan_tamu'),
        'foto' => $namaFoto,
        'status' =>$status
      ];

      $tamuModel->save($data);
      session()->setFlashdata('success', 'Berhasil menambahkan tamu');
      return redirect()->to(base_url('/admin/detailtamu'));
    } else {
      return redirect()->to(base_url('/admin/tambahtamu'))->withInput();
    }
  }
}
