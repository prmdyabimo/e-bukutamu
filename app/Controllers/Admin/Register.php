<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Register extends BaseController
{
  public function index()
  {
    helper(['form']);
    session();
    $data = [
      'title' => 'Registrasi Admin',
      'validation' => \Config\Services::validation()
    ];
    return view('pages/v_register', $data);
  }

  public function save()
  {
    helper(['form']);
    $rules = [
      'nama_admin' => [
        'rules'  => 'required',
        'errors' => [
          'required' => 'Nama wajib diisi'
        ]
      ],
      'email_admin' => [
        'rules'  => 'required|valid_email|is_unique[tb_admin.email_admin]',
        'errors' => [
          'required' => 'Email wajib diisi',
          'valid_email' => 'Email tidak valid',
          'is_unique' => 'Email sudah digunakan',
        ]
      ],
      'nomor_identitas_admin' => [
        'rules' => 'required|numeric|max_length[20]',
        'errors' => [
          'required' => 'Nomor identitas wajib diisi',
          'numeric' => 'Nomor identitas harus berupa angka',
          'max_length' => 'Nomor identitas maksima 20 digit'
        ]
      ],
      'nomor_telepon_admin' => [
        'rules' => 'required|numeric|max_length[20]',
        'errors' => [
          'required' => 'Nomor telepon wajib diisi',
          'numeric' => 'Nomor telepon harus berupa angka',
          'max_length' => 'Nomor telepon maksima 20 digit'
        ]
      ],
      'password_admin' => [
        'rules' => 'required|min_length[3]|max_length[8]|alpha_numeric',
        'errors' => [
          'required' => 'Password wajib diisi',
          'min_length' => 'Password minimal 3 karakter',
          'max_length' => 'Password maksimal 8 karakter',
          'alpha_numeric' => 'Password harus berupa angka dan huruf'
        ]
      ]
    ];

    if ($this->validate($rules)) {
      $adminModel = new AdminModel();
      $data = [
        'nama_admin' => $this->request->getVar('nama_admin'),
        'email_admin' => $this->request->getVar('email_admin'),
        'nomor_identitas_admin' => $this->request->getVar('nomor_identitas_admin'),
        'nomor_telepon_admin' => $this->request->getVar('nomor_telepon_admin'),
        'password_admin' => password_hash($this->request->getVar('password_admin'), PASSWORD_DEFAULT) 
      ];
      $adminModel->save($data);
      session()->setFlashdata('success', 'Anda berhasil registrasi');
      return redirect()->to(base_url('/admin/login'))->withInput();
    } else {
      session()->setFlashdata('failed', 'Anda gagal registrasi');
      return redirect()->to(base_url('/admin/register'))->withInput();
    }

  }
}
