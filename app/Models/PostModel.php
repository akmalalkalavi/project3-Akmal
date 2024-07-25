<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table            = 'posts';
    protected $primaryKey       = 'id';
    
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'content', 'status', 'author', 'slug'];
}
