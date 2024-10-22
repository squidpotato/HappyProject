<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function ViewHome()
    {
        $data = [
            'totalProducts' => 310,
            'salesToday' => 100,
            'totalRevenue' => 'Rp 75,000,000',
            'registeredUser' => 350
        ];
        return view('home', $data);
    }
}
