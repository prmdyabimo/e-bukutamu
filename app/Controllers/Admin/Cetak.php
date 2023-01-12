<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TamuModel;

class Cetak extends BaseController
{
    protected $tamuModel;

    public function __construct()
    {
        $this->tamuModel = new TamuModel();
    }

    public function index()
    {
        $session = session();
        $data = [
            'tamu' => $this->tamuModel->findAll(),
            'nama_admin' => $session->get('nama_admin')
        ];
        return view('print/excel', $data);
    }
}
