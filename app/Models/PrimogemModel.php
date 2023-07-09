<?php

namespace App\Models;

use CodeIgniter\Model;

class PrimogemModel extends Model
{
    protected $table = 'primo';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nick_gi', 'user_uid', 'amount'];
}
