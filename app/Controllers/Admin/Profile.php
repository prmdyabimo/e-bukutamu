<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use Config\View;

class Profile extends BaseController
{
    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }

    public function index()
    {
        $session = session();
        $data = [
            'title' => 'Profile',
            'admin' => $this->adminModel->findAll(),
            'nama_admin' => $session->get('nama_admin')
        ];
        return view('pages/v_profile', $data);
    }
}