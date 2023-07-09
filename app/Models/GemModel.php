<?php

namespace App\Models;

use CodeIgniter\Model;

class GemModel extends Model
{
    protected $table = 'gem';
    protected $primaryKey = 'id';
    protected $allowedFields = ['uid', 'nickname', 'server', 'amount'];
}
