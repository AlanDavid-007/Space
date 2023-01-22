<?php 
namespace App\Models;
use CodeIgniter\Model;
class Topics extends Model
{
    protected $table = 'topics';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['title', 'description'];
}