<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Login extends BaseController
{
  public function index()
  {
    helper(['form']);
    $data = [
      'title' => 'Login'
    ];
    return view('pages/v_login', $data);
  }

  public function auth()
  {
    $session = session();
    $adminModel = new AdminModel();
    $email = $this->request->getVar('email_admin');
    $password = $this->request->getVar('password_admin');
    $data = $adminModel->where('email_admin', $email)->first();

    if ($data) {
      $pass = $data['password_admin'];
      $passVerify = password_verify($password, $pass);
      if ($passVerify) {
        $sesData = [
          'id_admin' => $data['id_admin'],
          'nama_admin' => $data['nama_admin'],
          'email_admin' => $data['email_admin'],
          'nomor_identitas_admin' => $data['nomor_identitas_admin'],
          'nomor_telepon_admin' => $data['nomor_telepon_admin'],
          'password_admin' => $data['password_admin'],
          'logged_in' => true
        ]; 
        $session->set($sesData);
        $session->setFlashdata('success', 'Anda berhasil login');
        return redirect()->to(base_url('/admin/dashboard'));
      } else {
        $session->setFlashdata('failed', 'Password anda salah');
        return redirect()->to(base_url('/admin/login'))->withInput();
      }
    } else {
      $session->setFlashdata('failed', 'Email belum terdaftar');
      return redirect()->to(base_url('/admin/login'))->withInput();
    }
  }
}
