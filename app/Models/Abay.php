<?php 
namespace App\Models;

use CodeIgniter\Model;

class Abay extends Model
{
    protected $table = 'myabay';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'hobby', 'email', 'address'];
}