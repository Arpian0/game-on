<?php

namespace App\Models;

use CodeIgniter\Model;

class ValorantModel extends Model
{
    protected $table = 'valorant';
    protected $primaryKey = 'id';
    protected $allowedFields = ['uid', 'nickname', 'server', 'amount'];
}
