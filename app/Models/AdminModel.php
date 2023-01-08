<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table            = 'tb_admin';
    protected $primaryKey       = 'id_admin';
    protected $allowedFields    = ['nama_admin', 'email_admin', 'nomor_identitas_admin', 'nomor_telepon_admin', 'password_admin', 'created_at_admin'];

}
