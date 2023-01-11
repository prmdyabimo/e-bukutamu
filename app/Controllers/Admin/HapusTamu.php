<?php

namespace App\Controllers\Admin;

use \App\Controllers\BaseController;
use App\Models\TamuModel;

class HapusTamu extends BaseController
{
  protected $tamuModel;

  public function __construct()
  {
    $this->tamuModel = new TamuModel();
  }

  public function delete($id = null)
  {
    $tamu = $this->tamuModel->find($id);
    if ($tamu['foto'] !== 'default.png') {
      unlink('upload/' . $tamu['foto']);
    }
    $this->tamuModel->delete($id);
    session()->setFlashdata('success', 'Tamu berhasil dihapus');
    return redirect()->to(base_url('/admin/detailtamu'));
  }
}
