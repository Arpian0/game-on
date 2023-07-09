<?php

namespace App\Models;

use CodeIgniter\Model;

class DcModel extends Model
{
    protected $table = 'darkcrystal';
    protected $primaryKey = 'id';
    protected $allowedFields = ['uid', 'nickname', 'server', 'amount'];
}
