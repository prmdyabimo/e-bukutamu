<?php

namespace App\Models;

use CodeIgniter\Model;

class TamuModel extends Model
{
    protected $table            = 'tb_tamu';
    protected $primaryKey       = 'id_tamu';
    protected $allowedFields    = ['nama_tamu', 'nama_penemu', 'nomor_identitas_tamu', 'alamat_tamu', 'keperluan_tamu', 'tanggal_kunjungan', 'foto'];
}
