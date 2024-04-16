<?php 

namespace App\Controllers;
use App\Controllers\BaseController;
class Contoh extends BaseController
{
    public function index()
    {
        $data['nama'] = "Bella Manda Putri";
        $data['tlp'] = '085733560590';
        /*$data = [
            'nama' => 'Bella Manda Putri',
            'tlp' => '085733560590
        ];*/
        echo view('belajar/index', $data);
    }
} 