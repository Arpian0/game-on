<?php

namespace App\Models;

use CodeIgniter\Model;

class ApexcoinModel extends Model
{
    protected $table = 'apexcoin';
    protected $primaryKey = 'id';
    protected $allowedFields = ['uid', 'nickname', 'server', 'amount', 'status'];
}
