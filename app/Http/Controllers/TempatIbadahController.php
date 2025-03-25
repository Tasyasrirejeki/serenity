<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempatIbadahController extends Controller
{
    public function getData()
    {
        $ibadah = [
            ['id' => 1, 'nama' => 'Masjid Agung', 'tiket' => 'free'],
            ['id' => 2, 'nama' => 'Vihara Duta Maitreya', 'tiket' => 'free'],
            ['id' => 3, 'nama' => 'Masjid Chenghoo', 'tiket' => 'free'],
        ];

        return view('tempat_ibadah', compact('ibadah'));
    }
}
