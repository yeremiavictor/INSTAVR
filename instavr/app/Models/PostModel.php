<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table        ='post';
    protected $primaryKey   ='id';
    
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id','post','foto','comment','like'];
}