<?php

namespace App\Models;

use CodeIgniter\Model;

class StellarModel extends Model
{
    protected $table = 'stellar';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nickname', 'uid', 'server', 'amount', 'status'];
}
