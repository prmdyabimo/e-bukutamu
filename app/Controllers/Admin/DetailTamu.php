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
        $currentPage = $this->request->getVar('page_tamu') ? $this->request->getVar('page_tamu') : 1;


        $session = session();
        $data = [
            'title' => 'Detail Tamu',
            'tamu' => $this->tamuModel->paginate(5, 'tamu'),
            'pager' => $this->tamuModel->pager,
            'nama_admin' => $session->get('nama_admin'),
            'currentPage' => $currentPage
        ];
        return view('pages/v_detailtamu', $data);
    }
}
