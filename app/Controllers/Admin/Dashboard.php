<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\TamuModel;

class Dashboard extends BaseController
{
  protected $tamuModel;
  protected $adminModel;

  public function __construct()
  {
    $this->tamuModel = new TamuModel();
    $this->adminModel = new AdminModel();
  }

  public function index()
  {

    $db = \Config\Database::connect();
    $sql = "SELECT * FROM tb_tamu WHERE status='CHECK-OUT'";
    $result = $db->query($sql);
    $row = $result->getResult('array');
    $countRow = count($row);

    $session = session();
    $data = [
      'title' => 'Dashboard',
      'nama_admin' => $session->get('nama_admin'),
      'tamu' => $this->tamuModel->findAll(),
      'admin' => $this->adminModel->findAll(),
      'status_out' => $countRow,
      'status_in' => $this->CountCheckin()
    ];
    return view('pages/v_dashboard', $data);
  }

  public function CountCheckin(): int
  {
    $db = \Config\Database::connect();
    $sql = "SELECT * FROM tb_tamu WHERE status='CHECK-IN'";
    $result = $db->query($sql);
    $row = $result->getResult('array');
    $countRow = count($row);

    return $countRow;
  }

}
