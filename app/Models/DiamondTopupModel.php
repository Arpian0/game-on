<?php

namespace App\Models;

use CodeIgniter\Model;

class DiamondTopupModel extends Model
{
    protected $table = 'diamond_topup';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nickname', 'user_id', 'amount', 'status'];
}
