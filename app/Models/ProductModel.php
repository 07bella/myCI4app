<?php 

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    public function getData()
    {
        return 'Ini adalah Method getData di dalam ProductModel';
    }
}