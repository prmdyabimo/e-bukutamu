<?php

namespace App\Controllers\Admin;

use \App\Controllers\BaseController;
use App\Models\TamuModel;

class DetailTamu extends BaseController
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
            'title' => 'Detail Tamu',
            'tamu' => $this->tamuModel->findAll(),
            'nama_admin' => $session->get('nama_admin')
        ];
        return view('pages/v_detailtamu', $data);
    }
}
