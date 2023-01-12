<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TamuModel;

class Checkout extends BaseController
{

  protected $tamuModel;

  public function __construct()
  {
    $this->tamuModel = new TamuModel();
  }

  public function update($id = null, $status = 'CHECK-IN')
  {
    if ($status == "CHECK-OUT") {
      $status = "CHECK-IN";
    } else {
      $status = "CHECK-OUT";
    }

    $data = [
      'status' => $status
    ];

    $this->tamuModel->update($id, $data);
    session()->setFlashdata('success', 'Check Out Berhasil');
    return redirect()->to(base_url('/admin/detailtamu'));
  }
}
