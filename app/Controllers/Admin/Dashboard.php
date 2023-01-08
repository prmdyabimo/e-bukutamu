<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
  public function index()
  {
    $session = session();
    $data = [
      'title' => 'Dashboard',
      'nama_admin' => $session->get('nama_admin')
    ];
    return view('pages/v_dashboard', $data);
  }
}
