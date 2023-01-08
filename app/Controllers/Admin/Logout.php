<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Logout extends BaseController
{
  public function index()
  {
    $session = session();
    $session->destroy();
    $session->setFlashdata('success', 'Anda berhasil logout');
    return redirect()->to('/admin/login');
  }
}
