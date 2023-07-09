<?php

namespace App\Models;

use CodeIgniter\Model;

class CrystalModel extends Model
{
    protected $table = 'crystal';
    protected $primaryKey = 'id';
    protected $allowedFields = ['uid', 'nickname', 'server', 'amount'];
}
